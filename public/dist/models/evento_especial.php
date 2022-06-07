<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Productos terminados</title>
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
                <span class="site-heading-lower">Gestión de Pedidos Especiales</span>
            </h1>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html">Regresar a página principal</a></li>
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
                                        <td class="td" align="left">Agregar Pedido</td>
                                        <td>
                                            <form action="../../../app/Http/Controllers/eventos_especiales/Insert_Ee.php" method="post">
                                                <table style="margin: 0 auto;">
                                                    <tr>
                                                    <input type="text" class="form-control" name="id_evento" placeholder="ID de Evento" aria-label="ID de Evento">
                                                    </tr>
                                                    <tr>
                                                    <select class="form-select" name="chocolate" aria-label="Default select example">
                                                            <option selected>Tipo de Chocolate</option>
                                                            <option value="Amargo">Amargo</option>
                                                            <option value="Leche">Leche</option>
                                                            <option value="Blanco">Blanco</option>
                                                            <option value="Almendra">Almendra</option>
                                                            <option value="Menta">Menta</option>
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <select class="form-select" name="piezas" aria-label="Default select example">
                                                            <option selected>Presentación</option>
                                                            <option value="3">3</option>
                                                            <option value="9">9</option>
                                                            <option value="12">12</option>
                                                            <option value="24">24</option>
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="descripcion" placeholder="Descripción de Evento" aria-label="Descripción de Evento">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="fecha" placeholder="Fecha de entrega" aria-label="Fecha de entrega">
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
                                        <td class="td" align="left">Consultar Pedidos</td>
                                        <td>
                                            <form action="../../../app/Http/Controllers/eventos_especiales/Select_Ee.php" method="post">
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
                                        <td class="td" align="left">Actualizar Pedido</td>
                                        <td>    
                                            <form action="../../../app/Http/Controllers/eventos_especiales/Update_Ee.php" method="post">
                                                <table style="margin: 0 auto;">
                                                <tr>
                                                    <input type="text" class="form-control" name="id_evento" placeholder="ID de Evento" aria-label="ID de Evento">
                                                    </tr>
                                                    <tr>
                                                    <select class="form-select" name="chocolate" aria-label="Default select example">
                                                            <option selected>Tipo de Chocolate</option>
                                                            <option value="Amargo">Amargo</option>
                                                            <option value="Leche">Leche</option>
                                                            <option value="Blanco">Blanco</option>
                                                            <option value="Almendra">Almendra</option>
                                                            <option value="Menta">Menta</option>
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <select class="form-select" name="piezas" aria-label="Default select example">
                                                            <option selected>Presentación</option>
                                                            <option value="3">3</option>
                                                            <option value="9">9</option>
                                                            <option value="12">12</option>
                                                            <option value="24">24</option>
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="descripcion" placeholder="Descripción de Evento" aria-label="Descripción de Evento">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="fecha" placeholder="Fecha de entrega" aria-label="Fecha de entrega">
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
                                                       
                                <!-- FUNCION DELETE -->
                               
                                    <tr>
                                        <td class="td" align="left">Borrar Pedido</td>
                                        <td>    
                                            <form action="../../../app/Http/Controllers/eventos_especiales/Delete_Ee.php" method="post">
                                                <table style="margin: 0 auto;">
                                                    <tr>
                                                    <input type="text" class="form-control" name="id_evento" placeholder="ID de Pedido" aria-label="ID de Chocolate">
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
