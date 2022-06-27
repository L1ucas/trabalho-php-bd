<?php 
if (!empty($_POST['data'])) {

    $data = $_POST['data'];

    $output = null;
    exec("./ler_json.py 3 '" . $data . "'", $output);

    if ($output[0] != "FALSE"){
        header("cliente_pedidos.php" . $output[0]);
    }
}

?>