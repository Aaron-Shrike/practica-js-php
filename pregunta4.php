<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 1</title>
</head>
<body>
    <header>
        <h1>Pregunta 04</h1>
        <p>Escribir un programa libre, donde utilice html y que llame al script
switch.php</p>
    </header>
    <main>
        <form action="#" method="POST">
            <label for="numero">Ingrese un número entre 1 y 2</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Generar Tabla">
        </form>
        <?php $numero = isset($_POST['numero']) ? $_POST['numero'] : null; ?>
        <div>
            <?php if($numero != null){ ?>
                <div>
                <?php 
                    include_once("switch.php")
                ?>
                </div>
            <?php   }else{ ?>
                <p>Aun no ingresas un numero</p>
            <?php } ?>
        </div>
    </main>
</body>
</html>