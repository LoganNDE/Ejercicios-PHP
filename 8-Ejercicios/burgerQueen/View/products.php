<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/style.css">
    <script src="https://kit.fontawesome.com/9f16feb66e.js" crossorigin="anonymous"></script>
    <title>Burger Queen</title>
</head>
<body>
    
    <div class="wrapper">
        <div class="app">
            <h1>Hola Logan, ¿que quieres comer hoy?</h1>
            <div class="gridParent">
                <?php foreach($items as $item): ?>
                    <div class="grid">
                        <?php if($_SESSION['user'] === 'admin'): ?>
                            <a class="editBtn" href="index.php?action=editItem&id=<?php echo $item['id']?>"><i class="fa-solid fa-pen"></i></a>
                        <?php endif?>
                        <img class="imgCategories" src="src/img/items/<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                        <div class="titleBox">
                            <h2><?= $item['name'] ?></h2>
                            <h3><?= $item['price'] ?>€</h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="btnHome" href="index.php">Volver al inicio</a>
        </div>
    </div>

</body>
</html>