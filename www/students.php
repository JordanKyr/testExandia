<?php 


require_once "../lib/students_table.php";
require_once "../lib/dbconnect.php";

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

print_r("hello");

switch($r=array_shift($request)){
    case 'students': 
        switch ($b=array_shift($request)){
            case '':
            case null: handle_students($method); break;
            

            default: header("HTTP/1.1 404 Not Found");
            break;

        }
    break;
    default : header("HTTP/1.1 404 Not Found");
    exit;

}

function handle_students( $method) {

    if($method=='GET') {
        show_table();
    }else header('HTTP/1.1405 Method Not Allowed');
}

?>