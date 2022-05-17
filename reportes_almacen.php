<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>REPORTE ALMACEN</title>
</head>

<style>
    .td {
        color:#000;
        font-size:50px;
        padding:17px;
        font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
    }
    .btn{
        cursor: pointer;
    }
</style>

<body>    
    <!-- FUNCION SELECT -->
   <table style="margin: 0 auto;" border="">
        <tr>
            <td class="td" align="left">Consultar Reportes</td>
            <td>
                <form action="./app/Http/Controllers/reportes/Select_reporte.php" method="post">
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
            <td class="td" align="left">Borrar reporte</td>
            <td>    
                <form action="./app/Http/Controllers/reportes/Delete_reporte.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center">ID del reporte:</td>
                            <td><input type="text" name="id"></td>
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

