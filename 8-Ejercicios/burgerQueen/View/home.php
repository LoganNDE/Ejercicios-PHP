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
            <?php if($_SESSION['user'] === 'admin'): ?>
                <a class="closeSessionBtn" href="admin/closeSession.php">Cerrar Sesión</a>
                <a class="changeModeBtn" href="index.php?mode=<?= $mode ?>">Modo <?= $mode ?></a>
            <?php endif?>
            <div class="gridParent">
                <?php foreach($categories as $categorie): ?>
                    <div class="grid">
                        <?php if($_SESSION['user'] === 'admin'): ?>
                            <?php if($mode === 'edit'): ?>
                            <a class="btnMode" href="index.php?action=editCategorie&id=<?php echo $categorie['id']?>"><i class="fa-solid fa-pen"></i></a>
                            <?php else:?>
                            <a class="btnMode" href="index.php?action=removeCategorie&id=<?php echo $categorie['id']?>"><i class="fa-solid fa-trash"></i></a>
                            <?php endif?>
                        <?php endif?>
                        <a href="index.php?id=<?php echo $categorie['id']?>&action=products">
                        <img class="imgCategories" src="src/img/categories/<?= $categorie['image'] ?>" alt="<?= $categorie['name'] ?>">
                        <div class="titleBox">
                            <h2><?= $categorie['name'] ?></h2>
                        </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if($_SESSION['user'] === 'admin'): ?>
            <a class="addBtn" href="index.php?action=addCategorie"><i class="fa-solid fa-plus"></i></a>
            <?php endif?>
        </div>
    </div>

</body>
</html>