<?= $this->extend('Views/Dashboard/plantilla'); ?>

<?= $this->section('menu'); ?>
    <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Administración
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Usuarios</p>
                    </a>
                </li>              
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" onclick="cerrarSesion();" class="nav-link">              
                <i class="fas fa-sign-out-alt text-danger"></i>
                <p>Salir</p>              
                </a>
            </li>
            </ul>
    </nav>
<script type="text/javascript">

    function cerrarSesion()
    {
        Swal.fire({
            title: '¿ Desea Salir ?',
            text: 'La sesión terminará!',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText:'Sí, salir'
        }).then((result)=>{
           if(result.isConfirmed){
            window.location.href ="<?php echo base_url('Login/cerrarSesion'); ?>"
           } 
        });
      
    }
  
    
</script>


<?= $this->endSection(); ?>

<?= $this->section('contenido')?> 

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Inicio</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Escritorio</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
        
    </section>
    
<?= $this->endSection(); ?>