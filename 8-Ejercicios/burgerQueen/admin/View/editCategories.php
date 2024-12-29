<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/style.css">
    <title>Edición Categorias</title>
</head>
<body>
    <div class="wrapper">
        <div class="app">
            <h1 class="titleEdit">Actualmente estas modificando la categoria <br> <span class="categoryName"><?= $categories['name'] ?></span></h1>
            <form class="form" enctype="multipart/form-data" method="POST" action="index.php?action=editCategorie&id=<?= $categories['id'] ?>">
                <label for="name">Nombre </label>
                <input class="inputText" type="text" name="name" value= "<?= $categories['name'] ?>">
                <input type="file" name="image">
                <div class="imageContainer">
                    <img class="imgCategories" src="src/img/categories/<?= $categories['image']?>" alt="">
                </div>
                <div class="formButtons">
                    <button class="btnForm btnSubmit" type="submit">Actualizar</button>
                    <a class="btnForm btnCancel" href="index.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    

</body>
</html>