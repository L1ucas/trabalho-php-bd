
let button = document.getElementById("btn-concluir-cadastro-cliente")

button.addEventListener('click', () => {

    let Cliente = {}

    if ($("#nome").val() == "" ||
        $("#capital").val() == "" ||
        $("#cpf").val() == "" ||
        $("#endereco").val() == "" ||
        $("#tel").val() == "" ||
        $("#tempo").val() == "" ||
        $("#email").val() == "" ||
        $("#senha").val() == ""
    ) {
        alert("Por favor preencha todos os campos")
    } else {
        Cliente.nome = $("#nome").val()
        Cliente.cpf = $("#cpf").val().replace(/[^0-9]/g, "")
        Cliente.endereco = $("#endereco").val()
        Cliente.tel = $("#tel").val().replace(/[^0-9]/g, "")
        Cliente.email = $("#email").val()
        Cliente.senha = $("#senha").val()

        console.log(Cliente)

        var data = new FormData();
        data.append("data", JSON.stringify(Cliente));
        var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
        xhr.open('post', 'banco_de_dados.php', true);
        xhr.send(data);

        alert("Cadastro realizado")
    }

}
)
