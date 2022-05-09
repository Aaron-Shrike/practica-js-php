<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 3</title>
</head>
<body>
    <header>
        <h1>Pregunta 03</h1>
        <p>Crear un formulario con el campo Nombre y pasar la variable del
formulario al script php:</p>
    </header>
    <main>
        <h2>Ejercicio Analisis de formulario</h2>
        <h2>Rellena los campos</h2>
        <form action="script.php" method="POST">
            <label for="nombre">Tu nombre</label>
            <input type="text" name="nombre" id="nombre">
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>