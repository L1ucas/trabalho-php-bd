let botao = document.getElementById("entrar-btn")

botao.addEventListener("click", () => {
    let dass = {}
    let senha = document.getElementById("senha")
    let email = document.getElementById("email")

    if(senha == "" || email == ""){
        alert("Digite todos os dados")
    }
    else{
        dass.senha = senha.value.replace(/\n/g, "")
        dass.email = email.value.replace(/\n/g, "")

        var data = new FormData();
        data.append("data", JSON.stringify(dass));
        var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
        xhr.open('post', 'validar_login.php', true);
        xhr.send(data);

    }
})