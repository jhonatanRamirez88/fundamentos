  <?php
    class Alarma_model extends CI_Model {

    function __construct()
    {
         parent::__construct();
    }

    public function getAll()
    {
        $query = "SELECT * FROM `usuarios`";        
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function update($sum){            
            $query = "UPDATE `usuarios` SET `alerta`='".$sum."' WHERE `id_usuarios` = 1001";
            $res = $this->db->query($query);   
            return $res;   
    }

    public function registrar($usuario,$contrasena){            
            $query = "INSERT INTO `usuarios`(`usuario`, `password`, `latitud`, `longitud`, `alerta`) VALUES ('".$usuario."','".$contrasena."',19.2846306,-99.67811340000003,'0')";
            $res = $this->db->query($query);   
            return $res;
    }

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
