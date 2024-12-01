<?php
namespace App\Controllers;



use App\Models\RepuestoModel;

class RepuestoController {
    private $repuestoModel;

    // Constructor: Solo instanciamos el modelo una vez
    public function __construct() {
    }

    // Método para mostrar todos los repuestos
    public function index() {

        
            $repuestoModel = new RepuestoModel(); // Instanciamos el modelo localmente
            $repuestos = $repuestoModel->all();
        
            // Pasar los repuestos a la vista
            include '../views/admin/repuesto/index.php';
        
        
    }

    // Método para mostrar el formulario de creación
    public function create() {
        require_once __DIR__ . "/../views/admin/repuestos/create.php"; // Vista de creación
    }

    // Método para almacenar un nuevo repuesto
    public function store($post) {
        // Validar los datos enviados por el formulario
        $descripcion = $post['descripcion'];
        $precio = $post['precio'];
        $stock = $post['stock'];
        $idcategoria = $post['idcategoria'];

        // Inserción en la base de datos usando el modelo
        $this->repuestoModel->insert(
            "descripcion, precio, stock, idcategoria", // Columns
            [
                ':descripcion' => $descripcion,
                ':precio' => $precio,
                ':stock' => $stock,
                ':idcategoria' => $idcategoria
            ]
        );

        // Redirigir al listado de repuestos
        header('Location: /admin/repuestos'); // Redireccionamos a la lista de repuestos
        exit;
    }

    // Método para mostrar el formulario de edición
    public function edit($id) {
        // Obtener el repuesto a editar usando el método find()
        $repuesto = $this->repuestoModel->find('*', $id);
        
        // Incluir la vista de edición
        require_once __DIR__ . "/../views/admin/repuestos/edit.php";
    }

    // Método para actualizar un repuesto existente
    public function update($post, $id) {
        // Validar los datos enviados por el formulario
        $descripcion = $post['descripcion'];
        $precio = $post['precio'];
        $stock = $post['stock'];
        $idcategoria = $post['idcategoria'];

        // Actualización en la base de datos usando el modelo
        $this->repuestoModel->update(
            "descripcion = :descripcion, precio = :precio, stock = :stock, idcategoria = :idcategoria", // Set columns
            [
                ':descripcion' => $descripcion,
                ':precio' => $precio,
                ':stock' => $stock,
                ':idcategoria' => $idcategoria,
                ':id' => $id // Agregar el ID a los parámetros para la condición WHERE
            ],
            $id // El ID también se pasa como parámetro
        );

        // Redirigir al listado de repuestos
        header('Location: /admin/repuestos');
        exit;
    }

    // Método para eliminar un repuesto
    public function delete($id) {
        // Eliminar el repuesto usando el método delete() del modelo
        $this->repuestoModel->delete($id);

        // Redirigir al listado de repuestos
        header('Location: /admin/repuestos');
        exit;
    }
}
?>
