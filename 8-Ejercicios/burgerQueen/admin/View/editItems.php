<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/style.css">
    <title>Edición Productos</title>
</head>
<body>
    <div class="wrapper">
        <div class="app">
            <h1 class="titleEdit">Actualmente estas modificando el producto <br> <span class="categoryName"><?= $items['name'] ?></span></h1>
            <form class="form" method="POST" enctype="multipart/form-data" action="index.php?action=editItem&id=<?= $items['id'] ?>">
                <label for="name">Nombre </label>
                <input class="inputText" type="text" name="name" value= "<?= $items['name'] ?>">
                <label for="name">Precio </label>
                <input class="inputText" type="text" name="price" value= "<?= $items['price'] ?>">
                <label for="name">Categoria </label>
                <input class="inputText" type="text" name="category" value= "<?= $items['category'] ?>">
                <input type="file" name="image">
                <textarea name="description"><?= $items['description'] ?></textarea>
                <div class="imageContainer">
                    <img class="imgCategories" src="src/img/items/<?= $items['image']?>" alt="">
                </div>
                <div class="formButtons">
                    <button class="btnForm btnSubmit" type="submit">Actualizar</button>
                    <a class="btnForm btnCancel" href="index.php?action=products&id=<?= $items['category'] ?>">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    

</body>
</html>