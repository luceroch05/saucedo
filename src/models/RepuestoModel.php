<?php
namespace App\Models;
use PDO;
use App\Models\EntityModel;
class RepuestoModel extends EntityModel{
    protected $pdo;
    public $table='repuesto';
    private int $id;
    private string $descripcion;
    private float $precio;
    private int $stock;
    private int $idcategoria;
    private string $imagen;
public function getId(){
    return $this->id;
}
public function getDescripcion(){
    return $this->descripcion;
}
public function setDescripcion($descripcion){
    $this->descripcion=$descripcion;
}
public function getPrecio(){
    return $this->precio;
}
public function setPrecio($precio){
    $this->precio=$precio;
}
public function getStock(){
    return $this->stock;
}
public function setStock($stock){
    $this->stock=$stock;
}
public function getIdcategoria(){
    return $this->idcategoria;
}
public function setIdcategoria($idcategoria){
    $this->idcategoria=$idcategoria;
}
public function getImagen(){
    return $this->imagen;
}
public function setImagen($imagen){
    $this->imagen=$imagen;
}


}

?>