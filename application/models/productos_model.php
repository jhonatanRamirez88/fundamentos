 <?php
    class Productos_model extends CI_Model {

    function __construct()
    {
         parent::__construct();
    }

    public function registrar($nombre,$precio,$existencia,$descripcion,$fecha,$idprov){            
            $query = "INSERT INTO `productos`(`nombre`, `precio`,`existencia`, `descripcion`, `fecha`, `cvePro` ) VALUES ('".$nombre."',".$precio.",".$existencia.",'".$descripcion."','".$fecha."',".$idprov." )";
            $res = $this->db->query($query);   
            return $res;
    }

    public function todos(){
        $query = "SELECT * FROM `productos`";        
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function getProducto($nombre){
        $query = "SELECT * FROM `productos` where `cveProd` = ".$nombre."";        
        $result = $this->db->query($query);
        return $result->result_array();   
    }

    public function deleteProducto($nombre){
        $query = "DELETE FROM `productos` where `cveProd` = ".$nombre."";        
        $result = $this->db->query($query);
        return $result;
    }

    public function reporte($fini,$ffin){
        $query = "SELECT * FROM `productos` WHERE `fecha` BETWEEN ('".$fini."') AND ('".$ffin."')";        
        $result = $this->db->query($query);
        return $result->result_array();        

    }

}