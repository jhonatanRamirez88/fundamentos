 <?php
    class Login_model extends CI_Model {

    function __construct()
    {
         parent::__construct();
    }

    public function getTodos()
    {
        $query = "SELECT * FROM `usuarios`";        
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function getUsuario($usuario,$contrasena)
    {
        $query = "SELECT * FROM `usuarios` where `usuario` = '".$usuario."' and `contrasena`='".$contrasena."'";        
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function update($sum){            
            $query = "UPDATE `usuarios` SET `alerta`='".$sum."' WHERE `id_usuarios` = 1001";
            $res = $this->db->query($query);   
            return $res;   
    }

    public function registrar($usuario,$contrasena){            
            $query = "INSERT INTO `usuarios`(`usuario`, `contrasena`) VALUES ('".$usuario."','".$contrasena."')";
            $res = $this->db->query($query);   
            return $res;
    }

}