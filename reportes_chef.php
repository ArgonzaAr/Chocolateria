<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>REPORTE</title>
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
    <!-- FUNCION INSERT -->    
    <table style="margin: 0 auto;" border="">
        <tr>
            <td class="td" align="left">Crear Reporte</td>
            <td>
                <form action="./app/Http/Controllers/reportes/Insert_reporte.php" method="post">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td align="center">ID del reporte:</td>
                            <td><input type="text" name="id"></td>
                        </tr>
                        <tr>
                            <td align="center">Descripción de insumos utilizados:</td>
                            <td><input type="text" name="insumos"></td>
			</tr>
			 <td align="center">Ejemplo: Azúcar(20gr), Cacao(2kg),...</td>
                        <tr>
                            <td align="center">Descripción de productos terminados:</td>
                             <td><input type="text" name="terminados"></td>
			</tr>
			    <td align="center">Ejemplo: 1 caja Amargo[24 piezas],...</td>
                        <tr>
                            <td align="center">Nombre del Chef:</td>
                            <td><input type="text" name="chef"></td>
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
    </table>
</body>
</html>

