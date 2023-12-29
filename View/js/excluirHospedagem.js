function excluirHospedagem(cod_hospedagem) {
    var confirmacao = confirm("Tem certeza de que deseja excluir esta hospedagem?");
    
    if (confirmacao) {
        // Redirecione para o URL do controlador com o código da hospedagem
        window.location.href = "../Controllers/HospedagemController.php?funcao=delete&cod_hospedagem=" + cod_hospedagem;
    }
}
