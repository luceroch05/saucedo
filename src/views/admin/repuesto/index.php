

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

            <!-- Mostrar error si lo hay -->
        
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
                        

                        require_once '../../../utils/autoload.php'; // Incluye el autoload
                        
                        // Obtiene la ruta solicitada
                        $requestUri = $_SERVER['REQUEST_URI'];
                        
                        // Verifica si la ruta solicitada es para el listado de repuestos
                        if ($requestUri == '/admin/repuestos') {
                            // Si la ruta es correcta, se instancia el controlador y se llama al método index()
                            $controller = new \App\Controllers\RepuestoController();
                            $controller->index();  // Llama al método 'index' del controlador
                        }
                        
                        



                        if (!empty($repuestos)) : ?>
                            <?php foreach ($repuestos as $item) : ?>
                                <tr>
                                    <td><?= htmlspecialchars($item->getId()); ?></td>
                                    <td><?= htmlspecialchars($item->getDescripcion()); ?></td>
                                    <td><?= htmlspecialchars($item->getPrecio()); ?> PEN</td>
                                    <td><?= htmlspecialchars($item->getStock()); ?></td>
                                    <td><?= htmlspecialchars($item->getIdcategoria()); ?></td>
                                    <td>
                                        <img src="/assets/images/<?= htmlspecialchars($item->getImagen()); ?>" alt="<?= htmlspecialchars($item->getDescripcion()); ?>" style="width: 100px; height: auto;">
                                    </td>
                                    <td>
                                        <a href="/views/admin/repuestos/edit.php?id=<?= htmlspecialchars($item->getId()); ?>" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="/controllers/RepuestoController.php?action=delete&id=<?= htmlspecialchars($item->getId()); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este repuesto?')">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
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
