<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("../Models/Tutor.php");

class TutorController{

    private $tutor;

    public function __construct()
    {
        $this->tutor = new Tutor();

        if(isset($_GET['funcao']) && $_GET['funcao'] == "create")
        {
            $this->create();
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "read")
        {
            $this->read($_GET['id']);
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "update")
        {
            $this->update($_GET['id']);
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "delete")
        {
            $this->delete($_GET['id']);
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "login")
        {
            $this->login();
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "listar")
        {
            $this->listar();
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "verificarAnimaisCadastrados")
        {
            $this->verificarAnimaisCadastrados();
        }
    }


    private function create()
    {
        $this->tutor->setNome($_POST['Nome']);
        $this->tutor->setEmail($_POST['Email']);
        $this->tutor->setSenha($_POST['Senha']);

        $result = $this->tutor->create($this->tutor);
        if($result == 1){
            echo "<script>alert('Tutor incluído com sucesso!');document.location='../View/login-cadastro.php'</script>";
        }else if($result == 2){
            echo "<script>alert('Já existe um Tutor com este nome!');document.location='../View/login-cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar o Tutor! Cheque as informações!');document.location='../View/login-cadastro.php'</script>";
        }
    }

    public function read($id)
    {
        $result = $this->tutor->read($id);

        if($result > 0){
            return $result;
        }else{
            echo "<script>alert('Erro ao buscar usuário!');</script>";
        }
    }

public function editar($id){
    $this->anfitriao->setNome($_POST['Nome']);
    $this->anfitriao->setEmail($_POST['Email']);
    $this->anfitriao->setSenha($_POST['Senha']);

    $result = $this->cadastro->editar();
    if($result >= 1){
        echo "<script>alert('Registro alterado com sucesso!');document.location='../editarAnf.php'</script>";
    }else{
        echo "<script>alert('Erro ao alterar o registro!');</script>";
    }
}

    public function listar()
    {
        $result = $this->tutor->listar();
        if($result > 0){
            return $result;
        }else{
            echo "<script>alert('Erro ao buscar os Tutores');</script>";
            return null;
        }
    }


    private function update($id)
    {

    // Verifique se o parâmetro 'id' está definido no POST
    if (isset($_POST['id'])) {
    $id = $_POST['id'];

        $this->tutor->setNome($_POST['Nome']);
        $this->tutor->setEmail($_POST['Email']);
        $this->tutor->setSenha($_POST['Senha']);

        $result = $this->tutor->update($id);
        if ($result) {
            echo "<script>alert('Tutor atualizado com sucesso!');document.location='../View/tela-adm.php'</script>";
        } else {
            echo "<script>alert('Erro ao atualizar o Tutor!');</script>";
        }
    } else {
        echo "ID não foi fornecido no POST.";
        // Você pode tratar esse caso de erro aqui, como redirecionar para outra página ou mostrar uma mensagem de erro.
        // Por exemplo, header("Location: pagina_de_erro.php");
    }
}


    public function delete($id)
    {
        $result = $this->tutor->delete($id);
        if($result > 0){
            echo "<script>alert('Tutor excluído com sucesso!');document.location='../View/tela-adm.php'</script>";
        }else{
            echo "<script>alert('Erro ao excluir o Tutor!');document.location='../View/tela-adm.php'</script>";
        }
    }


    private function login()
    {
        $result = $this->tutor->login($_POST['Email'], $_POST['Senha']);
        if($result > 0){
            echo "<script>document.location='../View/home.php';</script>";
        }else{
            echo "<script>alert('E-mail e/ou senha incorretos! Tente Novamente!');document.location='../View/login-cadastro.php'</script>";
        }
    }




    public function verificarAnimaisCadastrados() {
        require_once("../Models/Tutor.php");
        $tutor = new Tutor();
    
        // Certifique-se de que a sessão 'tutor_cod' está definida
        if (isset($_SESSION['tutor_cod'])) {
            $tutor_cod = $_SESSION['tutor_cod'];
            $temAnimaisCadastrados = $tutor->AnimaisCadastrados($tutor_cod);
            return $temAnimaisCadastrados;
        } else {
            // Lida com a situação em que a sessão 'tutor_cod' não está definida
            // Pode retornar false ou lançar um erro, dependendo do seu caso
            return false;
        }
    }


}
new TutorController();
?>

