<?php
class Connection{
    private $_connection;
    private static $_instance; //the single instance
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = ''; //Remplazar contraseña
    private $_database = 'contacts_db';

    public static function getInstancia(){
        if(!self::$_instance){//si no existe instancia se crea una
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    //Constructor de DB
    private function __construct(){
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

        if(mysqli_connect_error()){
            trigger_error('No se pudo conectar a mysql: '.mysqli_connect_error(), E_USER_ERROR);
        }
        else{

        }
    }

    //Metodo clone vacio para prevenit duplicados de conexion
    private function __clone(){}

    public function getConexion(){
        return $this->_connection;
    }
}
?>
