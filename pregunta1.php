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
        <h1>Pregunta 01</h1>
        <p>Escriba un programa que presente por pantalla la tabla de multiplicar hasta 12 de un número introducido por teclado.</p>
    </header>
    <main>
        <form action="#" method="POST">
            <label for="numero">Ingrese un número</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Generar Tabla">
        </form>
        <?php $numero = isset($_POST['numero']) ? $_POST['numero'] : null; ?>
        <div>
            <?php if($numero != null){ ?>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Multiplicación</th>
                            <th>Resultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=1; $i < 13; $i++) { ?>
                                <tr>
                                    <th><?php echo $numero . " x " . $i; ?></th>
                                    <th><?php echo $numero*$i; ?></th>
                                </tr>
                        <?php   }   ?>
                    </tbody>
                </table>
            <?php   }else{ ?>
                <p>Aun no ingresas un numero</p>
            <?php } ?>
        </div>
    </main>
</body>
</html>