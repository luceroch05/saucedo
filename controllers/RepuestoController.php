<?php
namespace App\Controllers;
require_once '../../../models/RepuestoModel.php';

use App\Models\RepuestoModel;
use App\Models\EntityModel;

class RepuestoController {
    private $repuestoModel;

    public function __construct() {
        $this->repuestoModel = new RepuestoModel();
    }

    public function index() {
        $repuestos = $this->repuestoModel->all();
        var_dump($repuestos); // Verifica los datos aquí.
        include '../views/admin/repuestos/index.php';
    }


    // Método para mostrar el formulario de creación
    public function create() {
        require_once __DIR__ . "/../views/admin/repuestos/create.php";
    }

    // Método para almacenar un nuevo repuesto
    public function store($post) {
        // Validar los datos enviados por el formulario
        $descripcion = $post['descripcion'];
        $precio = $post['precio'];
        $stock = $post['stock'];
        $idcategoria = $post['idcategoria'];

        // Inserción en la base de datos
        $this->repuestoModel->insert(
            "descripcion = :descripcion, precio = :precio, stock = :stock, idcategoria = :idcategoria",
            [
                ':descripcion' => $descripcion,
                ':precio' => $precio,
                ':stock' => $stock,
                ':idcategoria' => $idcategoria
            ]
        );

        header('Location: /views/admin/repuestos'); // Redirecciona al listado
        exit;
    }

    // Método para mostrar el formulario de edición
    public function edit($id) {
        $repuesto = $this->repuestoModel->find('*', $id);
        require_once __DIR__ . "/../views/admin/repuestos/edit.php";
    }

    // Método para actualizar un repuesto existente
    public function update($post, $id) {
        // Validar los datos enviados por el formulario
        $descripcion = $post['descripcion'];
        $precio = $post['precio'];
        $stock = $post['stock'];
        $idcategoria = $post['idcategoria'];

        // Actualización en la base de datos
        $this->repuestoModel->update(
            "descripcion = :descripcion, precio = :precio, stock = :stock, idcategoria = :idcategoria",
            [
                ':descripcion' => $descripcion,
                ':precio' => $precio,
                ':stock' => $stock,
                ':idcategoria' => $idcategoria,
                ':id' => $id
            ],
            $id
        );

        header('Location: /views/admin/repuestos'); // Redirecciona al listado
        exit;
    }

    // Método para eliminar un repuesto
    public function delete($id) {
        $this->repuestoModel->delete($id);
        header('Location: /views/admin/repuestos'); // Redirecciona al listado
        exit;
    }
}
?>