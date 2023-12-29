function excluirAnfitriao(cod) {
    var confirmacao = confirm("Tem certeza de que deseja excluir este Anfitrião?");
    
    if (confirmacao) {
        // Redirecione para o URL de exclusão com o código do anfitrião
        window.location.href = "../Controllers/AnfitriaoController.php?funcao=delete&id=" + cod;
    }
}

function excluirTutor(cod) {
    var confirmacao = confirm("Tem certeza de que deseja excluir este Tutor?");
    
    if (confirmacao) {
        // Redirecione para o URL de exclusão com o código do anfitrião
        window.location.href = "../Controllers/TutorController.php?funcao=delete&id=" + cod;
    }
}