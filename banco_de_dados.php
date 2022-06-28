<?php


# cadastro do cliente
if (!empty($_POST['data'])) {

    $data = $_POST['data'];
    $fname = "banco.txt";

    $output = null;

    $jsond = json_decode($data, true);

    $mydate = json_encode(getdate());
    $nome = $jsond["nome"];
    $cpf = $jsond["cpf"];
    $endereco = $jsond["endereco"];
    $tel = $jsond["tel"];
    $email = $jsond["email"];
    $senha = hash("sha256", $jsond["senha"]);
    $id = hash("md5", $mydate);

    $dados = Array(
        "id" => $id,
        "nome" => $nome,
        "cpf" => $cpf,
        "endereco" => $endereco,
        "tel" => $tel,
        "email" => $email,
        "senha" => $senha
    );

    $file = fopen($fname, 'a+');
    fwrite($file, "\n" . json_encode($dados));
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
