<?php


# cadastro do cliente
if (!empty($_POST['data'])) {
    $data = $_POST['data'];
    $fname = "banco.txt";

    $file = fopen($fname, 'a+');
    fwrite($file, "\n" . $data);
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
