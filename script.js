function mascaraCPF(mascaraInput) {
    const tamanhoInput = document.getElementById('txtCPF').maxLength
    let valorInput = document.getElementById('txtCPF').value
    //console.log('tamanho máximo:', tamanhoInput, 'valor input', valorInput)
    const mascara = {
        cpf: valorInput.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4')
    };

    if (valorInput.length == tamanhoInput) {
        document.getElementById('txtCPF').value = mascara[mascaraInput]
    }
}

function mascaraTel(mascaraInput) {
    const tamanhoInput = document.getElementById('txtTel').maxLength
    let valorInput = document.getElementById('txtTel').value
    //console.log('tamanho máximo:', tamanhoInput, 'valor input', valorInput)
    const mascara = {
        tel: valorInput.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3')
    };

    if (valorInput.length == tamanhoInput) {
        document.getElementById('txtTel').value = mascara[mascaraInput]
    }
}


$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
/*
$(document).ready(function() {

    $("tbody tr").click(function(){
        console.log("Clicakdo")
    })

});*/