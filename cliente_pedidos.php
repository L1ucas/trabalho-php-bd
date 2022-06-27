
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'header.php' ?>
    <title>PEDIDOS DE EMPRÉSTIMO</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="navbar-brand" href="#"><img src="imagens/LOGO.png" style="width:auto; height:3em;"></a>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 2em; font-weight: bolder; color: white">BEM VINDO(A) CLIENTE</a>
                </li>
            </ul>

            <div class="d-flex">

                <a href="index.php"><button class="btn btn-outline-success" type="submit">VOLTAR AO INÍCIO</button></a>

            </div>


        </div>

    </nav>
    <div id="pedidos" style="display: none !important; display: flex; flex-direction: row;
    justify-content: center; align-items: center;">

        <article class="servico-login 
    servico-a" style="width: fit-content">

            <header>
                <h1>PEDIR EMPRÉSTIMO</h1>
            </header>
                <div class="row">
                    <div class="col">
                        <label>Capital</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                R$
                            </span>
                            <input oninput="mascaraUni('dinheiro')" id="capital-reais" name="capital-reais" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <label>Intervalo de pagamento</label>
                        <div class="input-group">
                            <input name="tempo-dias" id="tempo-dias" type="number" class="form-control">
                            <span class="input-group-text" id="basic-addon1">
                                DIAS
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Tipo de juros</label>
                        <select id="juros" name="juros" class="form-select" aria-label="Default select example">
                            <option selected>Escolher </option>
                            <option value="c">Composto 5%</option>
                            <option value="s">Simples 9%</option>
                        </select>

                    </div>
                    <div class="col">
                        <label for="">Você irá pagar no total</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                R$
                            </span>
                            <input oninput="mascaraUni('dinheiro')" name="total-montante" id="total-montante" type="number" class="form-control" readonly>
                            <button class="btn btn-primary" type="button" onclick="update()">Calcular</button>
                        </div>

                    </div>
                </div>
                <div class="row" style="padding-top: 3%; display: flex; justify-content: space-evenly;">
                   <button class="btn btn-primary" id="btn-concluir-cadastro-cliente" style="width:fit-content" type="button">Solicitar empréstimo</button>
                    <button id="cancelar" class="btn btn-primary" style="width:fit-content" type="button">Cancelar</button>
                </div>


        </article>
    </div>
    <div style="display: flex; flex-direction: row;
    justify-content: center; align-items: center; padding-top: 50px">

        <article class="servico-login 
    servico-a" style="width: fit-content">

            <header>
                <h1>ACOMPANHAR EMPRÉSTIMOS</h1>
            </header>
            <input type="text" name="" id="myInput" class="form-control">
            <table class="table" style="color:white">
                <thead></thead>
                <tbody id="myTable">
                    <tr>
                        <td>pao</td>
                    </tr>
                    <tr>
                        <td>arroz</td>
                    </tr>
                    <tr>
                        <td>adda</td>
                    </tr>
                    <tr>
                        <td>dada</td>
                    </tr>
            </table>
            </tbody>

            <button class="btn btn-primary" id="solicitar" style="margin-bottom: 5%">Solicitar novo empréstimo</button>
        </article>
    </div>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="cadastro_juros.js"></script>
</body>

</html>