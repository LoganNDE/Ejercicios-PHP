<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/style/style.css">
    <title>Agregar Producto</title>
</head>
<body>
    <div class="wrapper">
        <div class="app">
            <h1 class="titleEdit">Actualmente estas agregando un nuevo producto</h1>
            <form class="form" method="POST" enctype="multipart/form-data" action="../../index.php?action=addItem">
                <label for="name">Nombre </label>
                <input class="inputText" type="text" name="name">
                <label for="name">Precio </label>
                <input class="inputText" type="text" name="price">
                <label for="name">Categoria </label>
                <input class="inputText" type="text" name="category" value="<?= $_GET['id'] ?>">
                <input type="file" name="image">
                <textarea name="description"></textarea>
                <div class="formButtons">
                    <button class="btnForm btnSubmit" type="submit">Agregar</button>
                    <a class="btnForm btnCancel" href="../../index.php?action=products&id=<?= $_GET['id'] ?>">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    

</body>
</html>