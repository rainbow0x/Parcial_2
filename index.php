<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2 - Angelica Reyes</title>
</head>
<body>
    <h1>Parcial 2</h1>
    <form action="hacer_sumatoria.php" method="post">
        <h2>Digite el valor de N: </h2>
        <input type="number" name="n" id="n">
        <input type="submit" value="Aceptar" name="enviar" id="enviar">
    </form>



    <div>
        <h2>
            
        </h2>
        <?php require_once("Class/sumatorias.php");
            $obj_sumar = new sumar();
            $sumatorias = $obj_sumar->listar();
            $index = 0;

            if ($sumatorias == null) {
                echo "No hay sumatorias";
            } else {
                $nsumatorias = count($sumatorias);
                //inicio del select de las sumatorias
                if ($nsumatorias > 0) : 
                    echo "<table border=1>";

                    ?>
        <?php foreach ($sumatorias as $resultado) :
                    //foreach ($resultado as $parcial2) :
                        $index ++;
                        echo "<tr>";
                        echo "<td>";
                            echo 'N: '.$resultado['N'];
                        echo "</td>";
                        echo "<td>";
                            echo ' Factorial:' .  $resultado['Factorial'];
                        echo "</td>";
                        echo "<td>";
                            echo ' Sumatoria:' .  $resultado['Sumatoria'];
                        echo "</td>";
                        echo "<tr>";
                //endforeach;
                    endforeach; 
                    echo "<tr>";
                    echo "</table>";?>
        <?php endif ?>
    </div>
        <?php } ?>
</body>
</html>