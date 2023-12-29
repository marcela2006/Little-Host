<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("../Models/Hospedagem.php");

class HospedagemController {

    private $hospedagem;

    public function __construct() {
        $this->hospedagem = new Hospedagem();
        if(isset($_GET['funcao']) && $_GET['funcao'] == "create"){
            $this->create();
        } else if (isset($_GET['funcao']) && $_GET['funcao'] == "read") {
            $this->read($_GET['id']);
        } else if (isset($_GET['funcao']) && $_GET['funcao'] == "update") {
            $this->update();
        } else if (isset($_GET['funcao']) && $_GET['funcao'] == "delete") {
            $this->delete($_GET['cod_hospedagem']); 
        } else if (isset($_GET['funcao']) && $_GET['funcao'] == "login") {
            $this->login();
        } else if (isset($_GET['funcao']) && $_GET['funcao'] == "listarHospedagensDoTutor") {
            $this->listarHospedagensDoTutor($_GET['id']);
        } else if (isset($_GET['funcao']) && $_GET['funcao'] == "listarHospedagensDoAnfitriao") {
            $this->listarHospedagensDoAnfitriao($_GET['id']);
        }
    }

    public function listarHospedagensDoTutor($tutorCod) {
        return $this->hospedagem->listarHospedagensPorTutor($tutorCod);
    }

    public function listarHospedagensDoAnfitriao($anfitriaoCod) {
        return $this->hospedagem->listarHospedagensPorAnfitriao($anfitriaoCod);
    }

    public function create()
    {
        $this->hospedagem->setCod_anf($_GET['cod_anfitriao']);
        $this->hospedagem->setCod_tutor($_GET['cod_tutor']);
        $this->hospedagem->setDia_hosp($_POST['dia_hosp']);
        $this->hospedagem->setDia_busca($_POST['dia_busca']);

        $result = $this->hospedagem->create();
        if ($result) {
            echo "<script>alert('Hospedagem incluída com sucesso!');document.location='../View/agenda-tutor.php'</script>";
        } else {
            echo "<script>alert('Erro ao criar a hospedagem!');</script>";
        }
    }

    public function read($id) {
        $result = $this->hospedagem->read($id);

        if ($result > 0) {
            return $result;
        } else {
            echo "<script>alert('Erro ao buscar usuário!');</script>";
        }
    }

    public function editar() {
        $this->hospedagem->setNome($_POST['Dia_hosp']);
        $this->hospedagem->setTelefone($_POST['Dia_busca']);
        $this->hospedagem->setValor_total($_POST['Valor_total']);

        $result = $this->cadastro->editar();
        if ($result >= 1) {
            echo "<script>alert('Registro alterado com sucesso!');document.location='../editarAnf.php'</script>";
        } else {
            echo "<script>alert('Erro ao alterar o registro!');</script>";
        }
    }

    public function listar() {
        $result = $this->anfitriao->listar();
        if ($result > 0) {
            return $result;
        } else {
            echo "<script>alert('Erro ao buscar os tutores');</script>";
            return null;
        }
    }

    private function update($id) {
        $this->tutor->setNome($_POST['txtNome']);
        $this->tutor->setEmail($_POST['txtEmail']);
        $this->tutor->setSenha($_POST['txtSenha']);

        $result = $this->tutor->update();
        if ($result == 1) {
            echo "<script>alert('tutor atualizado com sucesso!');document.location='../catalogo_editavel.php'</script>";
        } else if ($result == 2) {
            echo "<script>alert('Já existe um tutor com este nome!');document.location='../catalogo_editavel.php'</script>";
        } else {
            echo "<script>alert('Erro ao editar o tutor! Cheque as informações e as imagens!');document.location='../catalogo_editavel.php'</script>";
        }
    }

    public function delete($cod_hospedagem) {
        // Verifique as permissões do usuário e a existência da hospedagem, se necessário.

        $deleted = $this->hospedagem->delete($cod_hospedagem);

        if ($deleted) {
            echo "Hospedagem excluída com sucesso!";
        } else {
            echo "Erro ao excluir a hospedagem.";
        }
    }


    

    private function login() {
        $result = $this->tutor->login($_POST['Email'], $_POST['Senha']);
        if ($result > 0) {
            echo "<script>document.location='../View/home.php';</script>";
        } else {
            echo "<script>alert('E-mail e/ou senha incorretos! Tente Novamente!');document.location='../View/login-cadastro.php'</script>";
        }
    }
}

new HospedagemController();
?>
