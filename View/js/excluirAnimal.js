function excluirAnimal(cod_animal) {
    var confirmacao = confirm("Tem certeza de que deseja excluir este animal?");
    
    if (confirmacao) {
        // Redirecione para o URL de exclusão com o código do animal
        window.location.href = "../Controllers/FichaController.php?funcao=delete&id=" + cod_animal;
    }
}
