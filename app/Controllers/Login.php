<?php
namespace App\Controllers;
use App\Models\Usuario;
class Login extends BaseController

{
    private $usuario;

    public function index()
    {
        /*$encrypter =  \Config\Services::encrypter();
        $clave = base64_encode($encrypter->encrypt('123'));
        echo $clave; *///  ejemplo para ver la encriptacion de la contraseña*/
               
        return view("Login/index");
    }

    public function validarIngreso()
    {
        $emailUsuario = $this->request->getPost("emailUsuario");
        if(filter_var($emailUsuario, FILTER_VALIDATE_EMAIL))
        {
            $email = filter_var($emailUsuario, FILTER_SANITIZE_EMAIL); //limpia el email del usuario de un caracter no deseado
            $this->usuario=new Usuario();
            $resultadoUsuario = $this->usuario->buscarUsuarioPorEmail($email);            
        }else{
            $usuario = preg_replace("/[^a-zA-Z0-9.-]/", "", $emailUsuario); //eliminar todos los caracteres que no sean letras (mayúsculas y minúsculas), números, puntos y guiones
            $this->usuario=new Usuario();
            $resultadoUsuario = $this->usuario->buscarUsuarioPorUsuario($usuario); 
        }

        if($resultadoUsuario)
        {
            $encrypter = \Config\Services::encrypter();
            $claveDB = $encrypter->decrypt(base64_decode($resultadoUsuario->clave));// desencriptar clave

            $clave= $this->request->getPost("clave"); //comparar las dos claves

            if($clave == $claveDB){  
                $data = [
                        "nombreUsuario" => $resultadoUsuario->nombre.' '.$resultadoUsuario->apellido,
                        "emailUsuario" => $resultadoUsuario->email,
                        "fotoUsuario" => $resultadoUsuario->foto
                        ];
                session()->set($data);// guarda los datos del usuario
                return redirect()->to(base_url().'/escritorio');

            }else{
                $data = ['tipo' => 'danger' , 'mensaje' => 'clave incorrecta'];
                return view('Login/index', $data);
            }
        }else{
            $data = ['tipo' => 'danger' , 'mensaje' => 'Usuario incorrecto '];
            return view('Login/index', $data);
        }
    }

    public function cerrarSesion()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}

