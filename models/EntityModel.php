<?php


namespace App\Models;
include '../config/config.php';
use PDOException;
use PDO;
use Exception;
class EntityModel{
protected $pdo;
public $table='tbl';
public function connect() {
    try {
        $this->pdo = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Puedes comentar este mensaje una vez que confirmes que la conexión funciona.
        echo "Conexión exitosa a la base de datos.";
    } catch (PDOException $e) {
        die("Error al conectar a la base de datos: " . $e->getMessage());
    }
}
    public function all() {
        $this->connect();
    $query = "SELECT * FROM $this->table";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ); 
    }
    
    

public function find($columns,$id){
    $this->connect();
    $query="SELECT $columns FROM $this->table WHERE id=:id"; 
    $stmt=$this->pdo->prepare($query);
    $stmt->execute([':id'=>$id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS,get_class($this));
    return $stmt->fetch();  //trae un solo resultado
}
    
public function insert($columns,$replaces){
    $this->connect();
    $query="INSERT INTO $this->table SET $columns";   
    $stmt=$this->pdo->prepare($query);
    $stmt->execute($replaces);//(params: [':cat'=>$post['nombre']]);
}  
public function update($columns,$replaces,$id){
    $this->connect();
    $query="UPDATE $this->table SET $columns WHERE id=:id";
    $stmt=$this->pdo->prepare($query);
    $stmt->execute($replaces);//(params: [':cat'=>$post['nombre'],':id'=>$id]);
} 
    public function delete($id){
        $this->connect();
        $query="DELETE FROM $this->table WHERE id=:id";
        $stmt=$this->pdo->prepare($query);
        $stmt->execute([':id'=>$id]);
        }
       
}


?>