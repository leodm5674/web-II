function validar() {
    var divErro = document.querySelector("#divErro");

    var titulo = document.getElementById("titulo").value;
    var autor = document.getElementById("autor").value;
    var genero = document.getElementById("genero").value;
    var pagina = document.getElementById("qtd_paginas").value;


    if (titulo.trim() == '') {
        divErro.innerHTML = "Informe o Título";
        return false;
    }

    if (autor.trim() == '') {
        divErro.innerHTML = ("Informe o Autor");
        return false;
    }

    if (genero.trim() == '') {
        divErro.innerHTML = ("Informe o Genero");
        return false;
    }
    if (pagina.trim() == '') {
        divErro.innerHTML = ("Informe a Numeros de paginas");
        return false;
    }

    return true;
}
