<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Usuarios</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
    </head>

    <style>
        .td {
            color:#000;
            font-size:40px;
            padding:5px;
            font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
        }
        .btn{
            cursor: pointer;
        }
    </style>

    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-lower">Gestión de Usuarios</span>
            </h1>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../../../index.html">Regresar a página principal</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">

                            <ul class=" mb-5 text-left mx-auto">
                                <table style="margin: 0 auto;" border="">
                                    <tr>
                                        <td class="td" align="left">Agregar Usuarios</td>
                                        <td>
                                            <form action="../../../app/Http/Controllers/usuarios/Insert_usuarios.php" method="post">
                                                <table style="margin: 0 auto;">
                                                    <tr>
                                                    <input type="text" class="form-control" name="id_trabajador" placeholder="ID de Usuario" aria-label="ID de Usuario">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Nombre">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="apPaterno" placeholder="Apellido Paterno" aria-label="Apellido Paterno">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="apMaterno" placeholder="Apellido Materno" aria-label="Apellido Materno">
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                    <select class="form-select" name="puesto" aria-label="Default select example">
                                                            <option selected>Puesto</option>
                                                            <option value="Gerente de Ventas">Gerente de Ventas</option>
                                                            <option value="Vendedor">Vendedor</option>
                                                            <option value="Chef Chocolatero">Chef Chocolatero</option>
                                                            <option value="Empleado de Almacén">Empleado de Almacén</option>
                                                            <option value="Gerente de Almacén">Gerente de Almacén</option>
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" aria-label="Teléfono">
                                                    </tr>
                                                    <tr>
                                                        <td align="center" colspan="2">
                                                            <input type="submit" value="Insertar registro" class="btn">
                                                        </td> 
                                                    </tr>             
                                                </table>
                                            </form>
                                        </td>
                                    </tr>               
                                
                                <!-- FUNCION SELECT -->
                                    <tr>
                                        <td class="td" align="left">Consultar Registros</td>
                                        <td>
                                            <form action="../../../app/Http/Controllers/usuarios/Select_usuarios.php" method="post">
                                                <table style="margin: 0 auto;">
                                                    <tr>
                                                        <td align="center" colspan="2">
                                                            <input type="submit" value="Ver registros" class="btn">
                                                        </td> 
                                                    </tr> 
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                            
                                    <!-- FUNCION UPDATE -->
                            
                                    <tr>
                                        <td class="td" align="left">Actualizar Usuario</td>
                                        <td>    
                                            <form action="../../../app/Http/Controllers/usuarios/Update_usuarios.php" method="post">
                                                <table style="margin: 0 auto;">
                                                <tr>
                                                    <input type="text" class="form-control" name="id_trabajador" placeholder="ID de Usuario" aria-label="ID de Usuario">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Nombre">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="apPaterno" placeholder="Apellido Paterno" aria-label="Apellido Paterno">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="apMaterno" placeholder="Apellido Materno" aria-label="Apellido Materno">
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                    <select class="form-select" name="puesto" aria-label="Default select example">
                                                            <option selected>Puesto</option>
                                                            <option value="Gerente de Ventas">Gerente de Ventas</option>
                                                            <option value="Vendedor">Vendedor</option>
                                                            <option value="Chef Chocolatero">Chef Chocolatero</option>
                                                            <option value="Empleado de Almacén">Empleado de Almacén</option>
                                                            <option value="Gerente de Almacén">Gerente de Almacén</option>
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" aria-label="Teléfono">
                                                    </tr>
                                                    <tr>
                                                        <td align="center" colspan="2">
                                                            <input type="submit" value="Actualizar registro" class="btn">
                                                        </td> 
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                                       
                                <!-- FUNCION DELETE -->
                               
                                    <tr>
                                        <td class="td" align="left">Borrar Usuario</td>
                                        <td>    
                                            <form action="../../../app/Http/Controllers/usuarios/Delete_usuarios.php" method="post">
                                                <table style="margin: 0 auto;">
                                                    <tr>
                                                    <input type="text" class="form-control" name="id_trabajador" placeholder="ID de Usuario" aria-label="ID de Usuario">
                                                    </tr>                
                                                    <tr>
                                                        <td align="center" colspan="2">
                                                            <input type="submit" value="Eliminar registro" class="btn">
                                                        </td> 
                                                    </tr> 
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
