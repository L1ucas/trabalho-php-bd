<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'header.php'; ?>
    <title>Tela do Funcionário</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="navbar-brand" href="#"><img src="imagens/LOGO.png" style="width:auto; height:3em;"></a>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-family:Arial, Helvetica, sans-serif; font-size: 2em; color: white;font-weight: 600;">BEM VINDO(A) FUNCIONÁRIO(A)</a>
                </li>
            </ul>

            <div class="d-flex">

                <a href="funcionario_login.php"><button class="btn btn-outline-success" type="submit">VOLTAR AO INÍCIO</button></a>

            </div>


        </div>

    </nav>
    <article style="margin-top: 2em;">
        <div class="container">
            <div class="col-sm-4">
                <div class="foto"><img src="imagens/barriguinha.jpeg" style="width: 120px; height:300;"></div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>NOME</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-4">
                    <label>CAPITAL</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>CPF</label>
                    <input type="text" class="form-control" placeholder="000.000.000-00">
                </div>
                <div class="col-sm-4">
                    <label>ENDEREÇO</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label>TELEFONE</label>
                    <input type="text" class="form-control" placeholder="(00) 00000 0000">
                </div>
                <div class="col-sm-4">
                    <label>TEMPO A PAGAR</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>EMAIL</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>




        <div class="container" style="margin-bottom: 1em; display:flex;
        flex-direction: column; justify-content: center; align-items: center">
            <header>
                <h1>LISTA DE <del>vítimas</del> CLIENTES</h1>
            </header>
            <div class="col-sm-4">
                <input type="text" name="" id="myInput" class="form-control"
                placeholder="Pesquisar">
            </div>

        </div>

        <table class="table row-clickable table-hover" 
        style="overflow: hidden;">
            <thead>
                <td>NOME</td>

                <td>CAPITAL</td>
                <td>TEMPO A PAGAR</td>
                <td>JUROS</td>
                <td>Botões</td>
            </thead>
            <tbody id="myTable">
                <tr >
                    <td>Jiu-jitsu</td>

                    <td>100</td>
                    <td>10</td>
                    <td>1% (composto)</td>
                    <td><?php include "adeilson.php";?>
                    </td>
                </tr>

                <tr>
                    <td>Moicano</td>

                    <td>14000</td>
                    <td>10</td>
                    <td>15% (composto)</td>
                    <td><?php include "adeilson.php";?>
                    </td>
                </tr>

                <tr>
                    <td>Robert</td>

                    <td>1050</td>
                    <td>10</td>
                    <td>10% (composto)</td>
                    <td><?php include "adeilson.php";?>
                    </td>
                </tr>

                <tr>
                    <td>Jamaicano</td>

                    <td>2000</td>
                    <td>10</td>
                    <td>10% (composto)</td>
                    <td><?php include "adeilson.php";?>
                    </td>
                </tr>

                <tr>
                    <td>Japonês da federal</td>

                    <td>3000</td>
                    <td>10</td>
                    <td>9% (composto)</td>
                    <td><?php include "adeilson.php";?>
                    </td>
                </tr>

            </tbody>
        </table>
    </article>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

</body>

</html>