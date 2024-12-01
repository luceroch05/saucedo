
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Repuestos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../../assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <div class="d-flex">
        <div class="sidebar">
            <?php include '../dashboard.php'; slidebar(); ?>
        </div>
        <main class="content">
            <h2 class="h4">Listado de Repuestos</h2>
            <a href="/src/views/admin/repuesto/create.php" class="btn btn-primary">Crear Nuevo Repuesto</a>
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
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
                        require_once '../../../../routes/web.php';

                        if (!empty($repuestos)): ?>
                            <?php foreach ($repuestos as $item): ?>
                                <tr>
                                    <td><?= htmlspecialchars($item->id_repuesto); ?></td>
                                    <td><?= htmlspecialchars($item->descripcion); ?></td>
                                    <td><?= htmlspecialchars($item->precio); ?> PEN</td>
                                    <td><?= htmlspecialchars($item->stock); ?></td>
                                    <td><?= htmlspecialchars($item->id_categoria); ?></td>
                                    <td><img src="/assets/images/<?= htmlspecialchars($item->imagen); ?>" style="width:100px;"></td>
                                    <td>
                                        <a href="/src/views/admin/repuesto/edit.php?id=<?= htmlspecialchars($item->id); ?>" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="/src/controllers/RepuestoController.php?action=delete&id=<?= htmlspecialchars($item->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">No hay repuestos disponibles.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
