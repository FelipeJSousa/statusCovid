<?php
    $result = "";
    if(isset($_POST['pais']))
    {
        $pais = $_POST['pais'];
        $result = shell_exec('python3 status.py '.$pais);
        $data = array("text" => $result);
        header('Content-Type: application/json');
        http_response_code(200);
        // $data = array("erro" => mysqli_error($Conn));
        // header('Content-Type: application/json');
        // http_response_code(400);
        echo json_encode($data);
    }
    else{
        http_response_code(404);
    }
?>