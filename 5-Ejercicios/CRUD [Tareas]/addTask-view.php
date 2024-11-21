<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Tarea</title>
    <link rel="stylesheet" href="src/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="app">
            <h1>ToDo PHP - Logan Naranjo Rodriguez</h1>
            <div class="containerNewTask">
                <div class="newTaskSection">
                    <h2>Indique los datos necesarios para registrar su tarea</h2>
                    <form action="addTask.php" method="post" class="formNewTask grid-container">
                        <div class="section-grid-1 col">
                            <label for="nameTask">Nombre de la tarea</label>
                            <input type="text" id="nameTask" name="nameTask" class="inputStyle mb" placeholder="Practicar JavaScript">
                            <label for="timeTask">Duración</label>
                            <input type="text" id="timeTask" name="timeTask" class="inputStyle mb" placeholder="1h y 30m">
                        </div>

                        <div class="section-grid-2 col">
                            <label for="priority">Prioridad [1 - 10]</label>
                            <input type="text" id="priority" name="priority" class="inputStyle mb" placeholder="10">
                            <label for="statusTask">Estado de la tarea</label>
                            <select name="statusTask" id="statusTask" class="inputStyle mb">
                                <option value="Pendiente">Pendiente</option>
                                <option value="En Progreso" selected>En progreso</option>
                                <option value="Finalizado">Finalizado</option>
                            </select>
                        </div>

                        <div class="section-grid-3 col">
                            <label for="descriptionTask">Descripción</label>
                            <textarea id="descriptionTask" name="descriptionTask" class="inputStyle textAreaDescripcion mb" placeholder="Practicar asincronía, API y recursividad..."></textarea>
                        </div>

                        <div class="section-grid-4">
                            <button type="submit" class="btn btnAdd">Agregar tarea</button>
                            <button type="button" class="btn btnEdit hide">Actualizar tarea</button>
                        </div>

                        <div class="section-grid-5">
                            <button type="button" class="btn btnCancel">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="src/script.js"></script>
</body>
</html>
