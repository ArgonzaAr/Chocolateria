<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD PRODUCTOS_FINALES</title>
</head>

<style>
    .td {
        color:#000;
        font-size:100px;
        padding:17px;
        font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
    }
    .btn{
        cursor: pointer;
    }
</style>

<body>
    <!-- FUNCION INSERT -->    
    <table style="margin: 0 auto;" border="">
        <tr>
            <td class="td" align="left">Agregar Chocolates</td>
            <td>
                <form action="../Chocolateria/controllers/Insert_DB.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center">Tipo de chocolate:</td>
                            <td><input type="text" name="tipo"></td>
                        </tr>
                        <tr>
                            <td align="center">Presentación [3, 9, 12 o 24]:</td>
                             <td><input type="text" name="presentacion"></td>
                        </tr>
                        <tr>
                            <td align="center">Evento especial:</td>
                            <td><input type="text" name="evento_especial"></td>
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
                <form action="../Chocolateria/controllers/Select_DB.php" method="post">
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
                           
    <!-- FUNCION DELETE -->
   
        <tr>
            <td class="td" align="left">Borrar Chocolate</td>
            <td>    
                <form action="../Chocolateria/controllers/Delete_DB.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center">Tipo de chocolate:</td>
                            <td><input type="text" name="tipo"></td>
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
</body>
</html>
