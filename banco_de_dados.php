<?php


# cadastro do cliente
if (!empty($_POST['data'])) {

    $data = $_POST['data'];
    $fname = "banco.txt";

    $output = null;
    exec("./ler_json.py 1'" . $data . "'", $output);

    $file = fopen($fname, 'a+');
    fwrite($file, "\n" . $output[0]);
    fclose($file);
}

function ler_e_imprimir_banco(){
    $handle = fopen("banco.txt", "r");

    if ($handle) {
        $line_number = 0;
        while (($line = fgets($handle)) !== false) {
            $jsonIterator = new RecursiveIteratorIterator(
                new RecursiveArrayIterator(json_decode($line, TRUE)),
                RecursiveIteratorIterator::SELF_FIRST);
            $line_number++;

            
            echo "<tr id='bd-" . $line_number . "'>";
            echo "<td>" . $line_number . "</td>";
            foreach ($jsonIterator as $key => $val) {
                if(is_array($val)) {
                    echo "$key:\n";
                }
                else if($key == "nome" || $key == "senha" 
                || $key == "id" || $key == "email" || $key == "cpf"
                || $key == "endereco"){
                    continue;
                } else {
                    echo "<td>$val</td>\n";
                }
                
            }
            echo "</tr>";
        }

        fclose($handle);
    }
}
?>
