 <?php
    class Proveedores_model extends CI_Model {

    function __construct()
    {
         parent::__construct();
    }

    public function registrar($nombre,$paterno,$telefono,$empresa){            
            $query = "INSERT INTO `proveedores`(`nombre`, `paterno`,`telefono`, `empresa` ) VALUES ('".$nombre."','".$paterno."','".$telefono."','".$empresa."')";
            $res = $this->db->query($query);   
            return $res;
    }

    public function todos(){
        $query = "SELECT * FROM `proveedores`";        
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function todosv(){
        $query = "SELECT * FROM `p`";        
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function getProveedor($nombre){
        $query = "SELECT * FROM `proveedores` where `idPro` = ".$nombre."";        
        $result = $this->db->query($query);
        return $result->result_array();   
    }

    public function deleteProveedor($nombre){
        $query = "DELETE FROM `proveedores` where `idPro` = ".$nombre."";        
        $result = $this->db->query($query);
        return $result;
    }

    public function modificar($nombre,$paterno,$telefono,$empresa,$idPro){
        $query = "UPDATE `proveedores` SET `nombre` = '".$nombre."', `paterno` = '".$paterno."', `telefono` = '".$telefono."', `empresa` = '".$empresa."' WHERE `idPro` = ".$idPro."";

             return $this->db->query($query);   
    }

}