<?php
class Introduccion extends CI_Controller {

    public function __construct(){
	    parent::__construct();	    
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('productos_model');
        $this->load->model('proveedores_model');
    }

    public function index(){    	
    	$this->load->view('headers/menu');   	    	
    	$this->load->view('login');
    	$this->load->view('headers/footer');
	}

	public function inicio(){    	
    	$this->load->view('headers/librerias');   	    	
    	$this->load->view('inicio');
    	$this->load->view('headers/footer');
	}

    public function inicio2(){       
        $this->load->view('headers/menu2');             
        $this->load->view('inicio');
        $this->load->view('headers/footer');
    }

    public function productosAdmin(){
        $this->load->view('headers/menuprod');             
        $this->load->view('productos');
        $this->load->view('headers/footer');
    }

    public function altaProducto(){
        //$data['proveedores']=$this->proveedores_model->todos();
        $data['proveedores']=$this->proveedores_model->todosv();
        $this->load->view('headers/menuprod');             
        $this->load->view('crearProd',$data);
        $this->load->view('headers/footer');
    }

    public function verProductos2(){
        $data['productos']=$this->productos_model->todos();
        $this->load->view('headers/menuprod');             
        $this->load->view('verProd2', $data);
        $this->load->view('headers/footer');
    }

    public function modificaProducto(){        
        $this->load->model('productos_model');
        $cveProd = $this->input->post('cveProd'); 
        $nombre = $this->input->post('nombre');
        $precio = $this->input->post('precio');
        $existencia = $this->input->post('existencia');
        $descripcion = $this->input->post('descripcion');
        $idprov = $this->input->post('idprov');
        $fecha = $this->input->post('fecha');
        $result = $this->productos_model->modificar($cveProd,$nombre,$precio,$existencia,$descripcion,$fecha,$idprov);
        
    }

    public function verProveedores2(){
        $data['productos']=$this->productos_model->todos();
        $this->load->view('headers/menuprod');             
        $this->load->view('verProvee2', $data);
        $this->load->view('headers/footer');
    }

    public function crearProducto(){
        $nombre = $this->input->post('nombre');
        $precio = $this->input->post('precio');
        $existencia = $this->input->post('existencia');
        $descripcion = $this->input->post('descripcion');
        $idprov = $this->input->post('idprov');
        $fecha = $this->input->post('fecha');
        $result = $this->productos_model->registrar($nombre,$precio,$existencia,$descripcion,$fecha,$idprov);
        if ($result != FALSE) {
            $this->response($result,200);
        }else{
            $this->response(false,200);
        }
    }

    public function verProductos(){
        $data['productos']=$this->productos_model->todos();
        $this->load->view('headers/menuprod');             
        $this->load->view('verProd', $data);
        $this->load->view('headers/footer');
    }

    public function checar(){
        
        $usuario = $this->get('usuario');
        $contrasena = $this->get('contrasena');
        $result=$this->login_model->getUsuario($usuario,$contrasena);
        if ($result != FALSE) {
            $this->response($result,200);
        }
        $this->response(false,200);
    }    

    public function buscarProd(){
        $nombre = $this->input->get('nombre');
        $result['producto']=$this->productos_model->getProducto($nombre);        
        $this->load->view('headers/menuprod');             
        $this->load->view('verProducto', $result);
        $this->load->view('headers/footer');
    }

    public function buscarProd2(){
        $result['proveedores']=$this->proveedores_model->todosv();
        $nombre = $this->input->get('nombre');
        $result['producto']=$this->productos_model->getProducto($nombre);        
        $this->load->view('headers/menuprod');             
        $this->load->view('modProd', $result);
        $this->load->view('headers/footer');
    }

    public function vRepo(){
        $fini = $this->input->get('fini');
        $ffin = $this->input->get('ffin');
        $result['reporte']=$this->productos_model->reporte($fini,$ffin);        
        $this->load->view('headers/menuprod');             
        $this->load->view('verRepo', $result);
        $this->load->view('headers/footer');
    }

    public function eliminarProd(){
       $data['productos']=$this->productos_model->todos();
        $this->load->view('headers/menuprod');             
        $this->load->view('delProd', $data);
        $this->load->view('headers/footer');
    }

    public function elProd(){
        $nombre = $this->input->get('nombre');
        $this->productos_model->deleteProducto($nombre);        
        $this->load->view('headers/menuprod');             
        $this->load->view('verProd');
        $this->load->view('headers/footer');
    }

        public function proveedoresAdmin(){
        $this->load->view('headers/menuprove');             
        $this->load->view('proveedores');
        $this->load->view('headers/footer');
    }
	
        public function altaProveedor(){
        $this->load->view('headers/menuprove');             
        $this->load->view('crearProveedor');
        $this->load->view('headers/footer');
    }

    public function crearProveedor(){
        $nombre = $this->input->post('nombre');
        $paterno = $this->input->post('paterno');
        $telefono = $this->input->post('telefono');
        $empresa = $this->input->post('empresa');
        $result = $this->proveedores_model->registrar($nombre,$paterno,$telefono,$empresa);
        if ($result != FALSE) {
            $this->response($result,200);
        }else{
            $this->response(false,200);
        }
    }

        public function eliminarProveedor(){
       $data['proveedores']=$this->proveedores_model->todos();
        $this->load->view('headers/menuprove');             
        $this->load->view('delProveedor', $data);
        $this->load->view('headers/footer');
    }

    public function elProveedor(){
        $nombre = $this->input->get('nombre');
        $this->proveedores_model->deleteProveedor($nombre);        
        $this->load->view('headers/menuprove');             
        $this->load->view('verProvee');
        $this->load->view('headers/footer');
    }

        public function verProveedor(){
        $data['proveedor']=$this->proveedores_model->todos();
        $this->load->view('headers/menuprove');             
        $this->load->view('verProvee', $data);
        $this->load->view('headers/footer');
    }

    public function verProveedor2(){
        $data['proveedor']=$this->proveedores_model->todos();
        $this->load->view('headers/menuprove');             
        $this->load->view('verProvee2', $data);
        $this->load->view('headers/footer');
    }
        public function buscarProveedor(){
        $nombre = $this->input->get('nombre');
        $result['proveedor']=$this->proveedores_model->getProveedor($nombre);        
        $this->load->view('headers/menuprove');             
        $this->load->view('verProveedor', $result);
        $this->load->view('headers/footer');
    }

       public function buscarProveedor2(){
        $nombre = $this->input->get('nombre');
        $result['proveedor']=$this->proveedores_model->getProveedor($nombre);        
        $this->load->view('headers/menuprove');             
        $this->load->view('crearProveedor2', $result);
        $this->load->view('headers/footer');
    }

   

    public function verRep(){
        $data['productos']=$this->productos_model->todos();
        $this->load->view('headers/menuprod');             
        $this->load->view('verReporte', $data);
        $this->load->view('headers/footer');
    }


    public function modificaProveedor(){                         
        $nombre = $this->input->post('nombre');
        $paterno = $this->input->post('paterno');
        $telefono = $this->input->post('telefono');
        $empresa = $this->input->post('empresa');        
        $idPro = $this->input->post('idPro');        
        $result = $this->proveedores_model->modificar($nombre,$paterno,$telefono,$empresa,$idPro);
        
    }

}