function dadosDisplay(){
    let form = document.getElementById('form_1');

    let nome = form.elements['nome'].value;
    let contacto = form.elements['contacto'].value;
    let dt_envio = form.elements['dt_envio'].value;
    let refeicao = form.elements['refeicao'].value;


    document.getElementById('nome_display').textContent = nome;
    document.getElementById('contacto_display').textContent = contacto;
    document.getElementById('dt_display').textContent = dt_envio;
    document.getElementById('reficao_display').textContent = refeicao;
}