<?php
include '../../models/connection/conexDB.php';
include '../../models/util/model.php';
include '../../models/entities/categoria.php';
include '../../controller/controllerCategorias.php';

use App\controllers\controllerCategorias;

$search = isset($_POST['search']) ? $_POST['search'] : null;

if ($search == null) {
    header("Location: ../AdminCategoria.php");
}
$controller = new controllerCategorias();
$cats = $controller->searchCategoria($_POST['search']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/styleSearch.css">
    <title>Buscar Categoría</title>
</head>

<body>
    <?php
    if (empty($cats)) {
        echo '<h1>Resultados de la operación</h1>';
        echo '<p class="msg-error">No se pudo encontrar ninguna coincidencia.</p>';
    } else {
        echo '<h1>Categorías encontradas:</h1>';
        echo '<ul>';
        foreach ($cats as $cat) {
            echo '<p>' . $cat->get('nombre') . ' 
            <a href="../Forms/formCat.php?id=' . $cat->get('id') . '"> <img src="../../images/update.svg" alt="update"></a>' .
                ' <a href="deleteCat.php?id=' . $cat->get('id') . '"> <img src="../../images/delete.svg" alt="delete"></a>'
                . '</p>';
        }
        echo '</ul>';
    }
    ?>
    <br>
    <div class="botones">
        <a href="../AdminCategoria.php">Buscar otra categoría</a>
        <a href="../inicio.php">Ir a inicio</a>
    </div>
</body>

</html>