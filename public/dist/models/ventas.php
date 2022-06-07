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
    <!--Consulta Chocolates-->    
    <table style="margin: 0 auto;" border="">
        <tr>
            <td class="td" align="left">Realizar venta</td>
            <td>
                <form action="../../../app/Http/Controllers/ventas/Select_Chocolates.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center" colspan="2">
                                <input type="submit" value="Consultar disponibilidad" class="btn">
                            </td> 
                        </tr>             
                    </table>
                </form>
            </td>
        </tr>               

        <!-- FUNCION INSERT -->

        <tr>
            <td class="td" align="left">Realizar venta</td>
            <td>    
                <form action="../../../app/Http/Controllers/ventas/Insert_Venta.php" method="post">
                    <table style="margin: 0 auto;">
                    <tr>
                        <input type="text" class="form-control" name="id_venta" placeholder="ID de Venta" aria-label="ID de Venta">
                    </tr>
                    <tr>
                        <select class="form-select" name="id_chocolate" aria-label="Default select example">
                        <option selected>Tipo de Chocolate</option>
                        <option value="1">Amargo - 3 piezas</option>
                        <option value="2">Amargo - 9 piezas</option>
                        <option value="3">Amargo - 12 piezas</option>
                        <option value="4">Amargo - 24 piezas</option>
                        <option value="5">Blanco - 3 piezas</option>
                        <option value="6">Blanco - 9 piezas</option>
                        <option value="7">Blanco - 12 piezas</option>
                        <option value="8">Blanco - 24 piezas</option>
                        <option value="9">Leche - 3 piezas</option>
                        <option value="10">Leche - 9 Piezas</option>
                        <option value="11">Leche - 12 Piezas</option>
                        <option value="12">Leche - 24 Piezas</option>
                        <option value="13">Almendra - 3 piezas</option>
                        <option value="14">Almendra - 9 piezas</option>
                        <option value="15">Almendra - 12 piezas</option>
                        <option value="16">Almendra - 24 piezas</option>
                        <option value="17">Menta - 3 piezas</option>
                        <option value="18">Menta - 9 piezas</option>
                        <option value="19">Menta - 12 piezas</option>
                        <option value="20">Menta - 24 piezas</option>
                    </select> 
                    </tr>
                    <tr>
                        <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" aria-label="Cantidad">
                    </tr>
                    <tr>
                        <input type="text" class="form-control" name="fecha" placeholder="Fecha de la venta" aria-label="Fecha de la venta">
                    </tr>
                    <tr>
                        <input type="text" class="form-control" name="vendedor" placeholder="Nombre de vendedor" aria-label="Nombre de vendedor">
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                        <input type="submit" value="Realizar Venta" class="btn">
                        </td> 
                    </tr>             
                    </table>
                </form>
            </td>
        </tr>

        <!-- FUNCION SELECT -->
        <tr>
            <td class="td" align="left">Consultar ventas</td>
            <td>
                <form action="../../../app/Http/Controllers/ventas/Select_Venta.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center" colspan="2">
                                <input type="submit" value="Ver ventas" class="btn">
                            </td> 
                        </tr> 
                    </table>
                </form>
            </td>
        </tr>

        <!-- FUNCION UPDATE -->

        <tr>
            <td class="td" align="left">Actualizar venta</td>
            <td>    
                <form action="../../../app/Http/Controllers/ventas/Update_Venta.php" method="post">
                    <table style="margin: 0 auto;">
                    <tr>
                        <input type="text" class="form-control" name="id_venta" placeholder="ID de Venta" aria-label="ID de Venta">
                    </tr>
                    <tr>
                        <select class="form-select" name="id_chocolate" aria-label="Default select example">
                        <option selected>Tipo de Chocolate</option>
                        <option value="1">Amargo - 3 piezas</option>
                        <option value="2">Amargo - 9 piezas</option>
                        <option value="3">Amargo - 12 piezas</option>
                        <option value="4">Amargo - 24 piezas</option>
                        <option value="5">Blanco - 3 piezas</option>
                        <option value="6">Blanco - 9 piezas</option>
                        <option value="7">Blanco - 12 piezas</option>
                        <option value="8">Blanco - 24 piezas</option>
                        <option value="9">Leche - 3 piezas</option>
                        <option value="10">Leche - 9 Piezas</option>
                        <option value="11">Leche - 12 Piezas</option>
                        <option value="12">Leche - 24 Piezas</option>
                        <option value="13">Almendra - 3 piezas</option>
                        <option value="14">Almendra - 9 piezas</option>
                        <option value="15">Almendra - 12 piezas</option>
                        <option value="16">Almendra - 24 piezas</option>
                        <option value="17">Menta - 3 piezas</option>
                        <option value="18">Menta - 9 piezas</option>
                        <option value="19">Menta - 12 piezas</option>
                        <option value="20">Menta - 24 piezas</option>
                    </select> 
                    </tr>
                    <tr>
                        <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" aria-label="Cantidad">
                    </tr>
                    <tr>
                        <input type="text" class="form-control" name="fecha" placeholder="Fecha de la venta" aria-label="Fecha de la venta">
                    </tr>
                    <tr>
                        <input type="text" class="form-control" name="vendedor" placeholder="Nombre de vendedor" aria-label="Nombre de vendedor">
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                        <input type="submit" value="Realizar Venta" class="btn">
                        </td> 
                    </tr>             
                    </table>
                </form>
            </td>
        </tr>
                           
    <!-- FUNCION DELETE -->
   
        <tr>
            <td class="td" align="left">Borrar venta</td>
            <td>    
                <form action="../../../app/Http/Controllers/ventas/Delete_Venta.php" method="post">
                    <table style="margin: 0 auto;">
                    <tr>
                        <input type="text" class="form-control" name="id_venta" placeholder="ID de venta" aria-label="ID de venta">
                    </tr>               
                    <tr>
                        <td align="center" colspan="2">
                            <input type="submit" value="Eliminar venta" class="btn">
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