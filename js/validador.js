function checkForm() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var fone = document.getElementById("fone").value;
    var cnpj = document.getElementById("cnpj").value;

    if (nome == '' || email == '' || fone == '' || cnpj == '') {
        alert("Por favor preencha todos os campos.");
        return false;
    } else {
        document.getElementById("contatoBemacash").submit();
        return true;
    }
}