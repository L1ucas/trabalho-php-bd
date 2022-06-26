
let button = document.getElementById("btn-concluir-cadastro-cliente")

button.addEventListener('click', () => {

    let Cliente = {}
        let nome =$("#nome").val()
        let cpf = $("#cpf").val() 
        let endereco = $("#endereco").val() 
        let tel = $("#tel").val()
        let email = $("#email").val()
        let senha = $("#senha").val()

    if (nome == "" ||
        cpf == "" ||
        endereco == "" ||
        tel == "" ||
        email == "" ||
        senha == ""
    ) {
        alert("Por favor preencha todos os campos")
    }else if(
        tel.replace(/[^0-9]/g, "").length != 11 ||
        cpf.replace(/[^0-9]/g, "").length != 11 
    ){
        alert("Por favor preencha corretamente os dados do telefone ou do cpf")
    }
     else {
        Cliente.nome = nome
        Cliente.cpf = cpf.replace(/[^0-9]/g, "")
        Cliente.endereco = endereco
        Cliente.tel = tel.replace(/[^0-9]/g, "")
        Cliente.email = email
        Cliente.senha = senha

        console.log(Cliente)

        var data = new FormData();
        data.append("data", JSON.stringify(Cliente));
        var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
        xhr.open('post', 'banco_de_dados.php', true);
        xhr.send(data);

        alert("Cadastro realizado! Agora você pode entrar na tela de login")
    }

}
)
