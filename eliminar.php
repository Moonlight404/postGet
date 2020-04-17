<?php   
require './Classes/Usuario.php';
 
use Classes\Usuario;
$param= filter_input_array(INPUT_GET, FILTER_DEFAULT);
$usu = new Usuario;
//$getCod = $_GET['codigo'] ;
//$cod = $param['codigo'];
//$param['codigo']
    if(isset($_GET['codigo'])){  
       $usu->delete($param['codigo']);
    }
 header("Location:index.php");

?>
