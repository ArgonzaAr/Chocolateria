<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Compra de insumos</title>
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
                <span class="site-heading-lower">Gestión de insumos</span>
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
                                        <td class="td" align="left">Compra de insumos</td>
                                        <td>
                                            <form action="../../../app/Http/Controllers/compra_insumos/Insert_compraInsumos.php" method="post">
                                                <table style="margin: 0 auto;">
                                                    <tr>
                                                    <input type="text" class="form-control" name="id_compra" placeholder="ID de Compra" aria-label="ID de Compra">
                                                    </tr>
                                                    <tr>
                                                    <select class="form-select" name="id_insumo" aria-label="Default select example">
                                                            <option selected>ID de insumo</option>
                                                            <option value="1">1 - Cacao</option>
                                                            <option value="2">2 - Azucar</option>
                                                            <option value="3">3 - Leche</option>
                                                            <option value="4">4 - Vainilla</option>
                                                            <option value="5">5 - Manteca de Coco</option>
                                                            <option value="6">6 - Menta</option>
                                                            <option value="7">7 - Cartón 24 piezas</option>
                                                            <option value="8">8 - Cartón 12 piezas</option>
                                                            <option value="9">9 - Cartón 9 piezas</option>
                                                            <option value="10">10 - Cartón 3 piezas</option>    
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad de compra en gramos" aria-label="Cantidad de compra en gramos">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="precio" placeholder="Precio de compra" aria-label="Precio de compra">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="proveedor" placeholder="Nombre del proveedor" aria-label="Nombre del proveedor">
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
                                        <td class="td" align="left">Consultar compras</td>
                                        <td>
                                            <form action="../../../app/Http/Controllers/compra_insumos/Select_compraInsumos.php" method="post">
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
                                        <td class="td" align="left">Actualizar compra</td>
                                        <td>    
                                            <form action="../../../app/Http/Controllers/compra_insumos/Update_compraInsumos.php" method="post">
                                                <table style="margin: 0 auto;">
                                                <tr>
                                                    <input type="text" class="form-control" name="id_compra" placeholder="ID de Compra" aria-label="ID de Compra">
                                                    </tr>
                                                    <tr>
                                                    <select class="form-select" name="id_insumo" aria-label="Default select example">
                                                            <option selected>ID de insumo</option>
                                                            <option value="1">1 - Cacao</option>
                                                            <option value="2">2 - Azucar</option>
                                                            <option value="3">3 - Leche</option>
                                                            <option value="4">4 - Vainilla</option>
                                                            <option value="5">5 - Manteca de Coco</option>
                                                            <option value="6">6 - Menta</option>
                                                            <option value="7">7 - Cartón 24 piezas</option>
                                                            <option value="8">8 - Cartón 12 piezas</option>
                                                            <option value="9">9 - Cartón 9 piezas</option>
                                                            <option value="10">10 - Cartón 3 piezas</option>
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad de compra en gramos" aria-label="Cantidad de compra en gramos">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="precio" placeholder="Precio de compra" aria-label="Precio de compra">
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="proveedor" placeholder="Nombre del proveedor" aria-label="Nombre del proveedor">
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
                                        <td class="td" align="left">Borrar compra</td>
                                        <td>    
                                            <form action="../../../app/Http/Controllers/compra_insumos/Delete_compraInsumos.php" method="post">
                                                <table style="margin: 0 auto;">
                                                    <tr>
                                                    <input type="text" class="form-control" name="id_compra" placeholder="ID de compra" aria-label="ID de compra">
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

                                    <!-- FUNCION SELECT INSUMOS -->
                                    <tr>
                                        <td class="td" align="left">Consultar insumos</td>
                                        <td>
                                            <form action="../../../app/Http/Controllers/compra_insumos/Select_Insumos.php" method="post">
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

                                    <!-- FUNCION UPDATE Insumos -->
                            
                                    <tr>
                                        <td class="td" align="left">Actualizar Insumos</td>
                                        <td>    
                                            <form action="../../../app/Http/Controllers/compra_insumos/Update_Insumos.php" method="post">
                                                <table style="margin: 0 auto;">
                                                    <tr>
                                                    <select class="form-select" name="id_insumo" aria-label="Default select example">
                                                            <option selected>ID de insumo</option>
                                                            <option value="1">1 - Cacao</option>
                                                            <option value="2">2 - Azucar</option>
                                                            <option value="3">3 - Leche</option>
                                                            <option value="4">4 - Vainilla</option>
                                                            <option value="5">5 - Manteca de Coco</option>
                                                            <option value="6">6 - Menta</option>
                                                            <option value="7">7 - Cartón 24 piezas</option>
                                                            <option value="8">8 - Cartón 12 piezas</option>
                                                            <option value="9">9 - Cartón 9 piezas</option>
                                                            <option value="10">10 - Cartón 3 piezas</option>
                                                        </select> 
                                                    </tr>
                                                    <tr>
                                                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad de usada en gramos" aria-label="Cantidad de compra en gramos">
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
