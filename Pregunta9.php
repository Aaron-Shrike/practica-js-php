<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen01 - Aarón Rojas Vera</title>
</head>
<body>
    <header>
        <h1>Pregunta 09</h1>
        <p>Ingrese número 1 y número 2 luego debe realizar las operaciones de :  suma, resta, multiplicación, división</p>    
    </header>
    <main>
        <form action="#" method="POST">
            <label for="numero1">Ingrese un número 1</label>
            <input type="number" name="numero1" id="numero1">
            <br>
            <label for="numero2">Ingrese un número 2</label>
            <input type="number" name="numero2" id="numero2">
            <br>
            <input type="submit" value="Generar Operaciones">
        </form>
        <?php $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : null;
            $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : null; ?>
        <div>
            <?php if($numero1 != null && $numero2 != null){ ?>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Operación</th>
                            <th>Resultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><?php echo "Suma (" . $numero1 . " + " . $numero2 . ") : " ?></th>
                            <th><?php echo $numero1+$numero2 ?></th>
                        </tr>
                        <tr>
                            <th><?php echo "Resta (" . $numero1 . " - " . $numero2 . ") : " ?></th>
                            <th><?php echo $numero1-$numero2 ?></th>
                        </tr>
                        <tr>
                            <th><?php echo "Multiplicación (" . $numero1 . " x " . $numero2 . ") : " ?></th>
                            <th><?php echo $numero1*$numero2 ?></th>
                        </tr>
                        <tr>
                            <th><?php echo "División (" . $numero1 . " / " . $numero2 . ") : " ?></th>
                            <th><?php echo $numero1/$numero2 ?></th>
                        </tr>
                    </tbody>
                </table>
            <?php   }else{ ?>
                <p>Aún no ingresas los numeros</p>
            <?php } ?>
        </div>
    </main>
</body>
</html>