<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/style/style.css">
    <title>Agregar Categoria</title>
</head>
<body>
    <div class="wrapper">
        <div class="app">
            <h1 class="titleEdit">Actualmente estas agregando una nueva categoria</span></h1>
            <form class="form" enctype="multipart/form-data" method="POST" action="../../index.php?action=addCategorie">
                <label for="name">Nombre </label>
                <input class="inputText" type="text" name="name">
                <label for="image">Imagen </label>
                <input type="file" name="image">
                <div class="formButtons">
                    <button class="btnForm btnSubmit" type="submit">Actualizar</button>
                    <a class="btnForm btnCancel" href="../../index.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    

</body>
</html>