function introduzirDadosUtilizador(){
    const dadoIntroduzido = prompt("Introduzir dados:")

    const novoElemento = document.createElement("li");
    novoElemento.textContent = dadoIntroduzido;
    document.getElementById("listaDeDados").appendChild(novoElemento);
}

function apagarDados(){
    const lista = document.getElementById("listaDeDados");

    while (lista.firstChild) {
       lista.removeChild(lista.firstChild); 
    }
}

document.getElementById('form_1').addEventListener('submit', function(event) {
    event.preventDefault();
    // Guardar os valores do formulário
    const titulo = document.getElementById("titulo").value;
    const descricao = document.getElementById("descricao").value;
    const images = document.getElementsByName("image");
    let imageSelect = '';
    for (let i = 0; i < images.length; i++) {
        if (images[i].checked) {
            imageSelect = images[i].value;
            break;
        }       
    }

    // Criar os elementos com o conteúdo HTML
    const mostrarFormDiv = document.getElementById("mostrarform");
    mostrarFormDiv.innerHTML = '';

    const mostrarFormTitulo = document.createElement('h1');
    mostrarFormTitulo.textContent = titulo;

    const mostrarFormDescricao = document.createElement('p');
    mostrarFormDescricao.textContent = descricao;

    const mostrarFormImg = document.createElement('img');
    mostrarFormImg.src = imageSelect;
    mostrarFormImg.style.width = '50px';

    // Adicionar o conteúdo HTML à página
    mostrarFormDiv.appendChild(mostrarFormTitulo);
    mostrarFormDiv.appendChild(mostrarFormDescricao);
    mostrarFormDiv.appendChild(mostrarFormImg);

    // Limpar os campos do formulário
    document.getElementById("titulo").value = '';
    document.getElementById("descricao").value = '';
    for (let i = 0; i < images.length; i++) {
        images[i].checked = false;
    }
});
