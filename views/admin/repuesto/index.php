


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Repuestos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <?php include '../dashboard.php'; slidebar(); ?>
        </div>
        

        <!-- Contenido Principal -->
        <main class="content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h4">Listado de Repuestos</h2>
                <a href="/views/admin/repuestos/create.php" class="btn btn-primary">Crear Nuevo Repuesto</a>
            </div>

            <!-- Tabla de repuestos -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Categoría</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 

  



    if (isset($repuestos) && !empty($repuestos)): ?>
        <?php foreach ($repuestos as $repuesto): ?>
            <tr>
                <td><?= $repuesto->getId(); ?></td>
                <td><?= $repuesto->getDescripcion(); ?></td>
                <td><?= number_format($repuesto->getPrecio(), 2); ?> PEN</td>
                <td><?= $repuesto->getStock(); ?></td>
                <td><?= $repuesto->getIdcategoria(); ?></td>
                <td>
                    <img src="/assets/images/<?= $repuesto->getImagen(); ?>" alt="<?= $repuesto->getDescripcion(); ?>" style="width: 100px; height: auto;">
                </td>
                <td>
                    <a href="/views/admin/repuestos/edit.php?id=<?= $repuesto->getId(); ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/controllers/RepuestoController.php?action=delete&id=<?= $repuesto->getId(); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este repuesto?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">No hay repuestos disponibles.</td>
        </tr>
    <?php endif; ?>
</tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
