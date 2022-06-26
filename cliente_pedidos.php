<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'header.php' ?>
    <title>PEDIDOS DE EMPRÉSTIMO</title>
</head>
<style>
    .my-dropdown {
        position: relative;
        display: inline-block;
    }

    .my-dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .my-dropdown:hover .my-dropdown-content {
        display: block;
    }
</style>

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
    <div style="display: flex; flex-direction: row;
    justify-content: center; align-items: center;">

        <article class="servico-login 
    servico-a" style="width: fit-content">

            <header>
                <h1>PEDIR EMPRÉSTIMO</h1>
            </header>

            <form>
                <div class="row">
                    <div class="col">
                        <label>Capital</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                R$
                            </span>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <label>Tempo a pagar</label>
                        <div class="input-group">
                            <input type="number" class="form-control">
                            <span class="input-group-text" id="basic-addon1">
                                DIAS
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Tipo de juros</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Escolher </option>
                            <option value="Composto">Composto 5%</option>
                            <option value="Simples">Simples 9%</option>
                        </select>

                    </div>
                    <div class="col">
                        <label for="">Você irá pagar no total</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                R$
                            </span>
                            <input type="number" class="form-control" readonly>
                        </div>

                    </div>
                </div>
                <div class="row" style="padding-top: 3%; display: flex; justify-content: space-evenly;">
                    <button class="btn btn-primary" style="width:fit-content">Solicitar empréstimo</button>
                    <button class="btn btn-primary" style="width:fit-content">Cancelar</button>
                </div>

            </form>


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
        </article>
    </div>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>