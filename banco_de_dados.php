<?php 


# cadastro do cliente
if(!empty($_POST['data'])){
    $data = $_POST['data'];
    $fname = "banco.txt";
    
    $file = fopen($fname, 'a+');
    fwrite($file, "\n" . $data);
    fclose($file);
}

?>