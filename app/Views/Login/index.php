<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Remon's | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/template/css/adminlte.min.css">
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg-com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/template/css/login.css">
  
</head>
 <style>
    section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    background: url('<?php echo Base_url(); ?>/assets/plugins/template/img/Login/remons.jpeg') no-repeat;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<section>
        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo base_url(); ?>/Login/validarIngreso"  method="post">
                    <h2> Login </h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="emailUsuario" id="emailUsuario" required> 
                        <label >Usuario o email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="clave" id="clave" required> 
                        <label >Contraseña</label>
                    </div>
                    
                    <button type= "submit" >Iniciar sesión</button>
                    
                </form>
                <br>
                <div class="row">
                    <div class="col-12" style="text-align: center;">
                    <?php if(isset($mensaje)){ ?>
                        <div class="alert alert-<?= $tipo; ?>">
                        <?= $mensaje; ?>
                        <div>
                    <?php }?>                    
                    </div>
                </div>
            </div>
        </div>
    </section>  


<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/plugins/template/js/adminlte.min.js"></script>
</body>
</html>
