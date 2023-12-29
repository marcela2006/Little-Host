<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/projetos/webTcc/Models/Administrador.php");

class AdministradorController{

    private $adm;

    public function __construct()
    {
        $this->adm = new Adminstrador();

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
            $this->update();
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "delete")
        {
            $this->delete($_GET['id']);
        }
    }


    private function create()
    {
        $this->adm->setCod_anf($_POST['txtCod_anf']);
        $this->adm->setCod_form($_POST['txtCod_form']);
        $this->adm->setNome($_POST['txtNome']);
        $this->adm->setEmail($_POST['txtEmail']);
        $this->adm->setSenha($_POST['txtSenha']);

        $result = $this->adm->create($this->adm);
        if($result == 1){
            echo "<script>alert('adm incluído com sucesso!');document.location='../cadastro_adm.php'</script>";
        }else if($result == 2){
            echo "<script>alert('Já existe um adm com este nome!');document.location='../cadastro_adm.php'</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar o adm! Cheque as informações e as imagens!');document.location='../cadastro_adm.php'</script>";
        }
    }


    public function read($id)
    {
        $adm = $this->adm->read($id);
        if($adm->getCod() >= 1){
            return $adm;
        }else{
            echo "<script>alert('Não conseguimos buscar as informações do adm...');document.location='adms.php';</script>";
        }
        
    }



    private function update()
    {
        $this->adm->setCod_anf($_POST['txtCod_anf']);
        $this->adm->setCod_form($_POST['txtCod_form']);
        $this->adm->setNome($_POST['txtNome']);
        $this->adm->setEmail($_POST['txtEmail']);
        $this->adm->setSenha($_POST['txtSenha']);

        $result = $this->adm->update();
        if($result == 1){
            echo "<script>alert('adm atualizado com sucesso!');document.location='../catalogo_editavel.php'</script>";
        }else if($result == 2){
            echo "<script>alert('Já existe um adm com este nome!');document.location='../catalogo_editavel.php'</script>";
        }else{
            echo "<script>alert('Erro ao editar o adm! Cheque as informações e as imagens!');document.location='../catalogo_editavel.php'</script>";
        }
    }


    public function delete($id)
    {
        $result = $this->adm->excluirProd($id);
        if($result >= 1){
            echo "<script>alert('adm excluido com sucesso!');document.location='../catalogo_editavel.php'</script>";
        }else{
            echo "<script>alert('Erro ao excluir o adm!');document.location='../catalogo_editavel.php'</script>";
        }
    }


    private function login()
    {
        $result = $this->adm->login($_POST['txtUser'], $_POST['txtSenha']);
        if($result >= 1){
            echo "<script>document.location='../index.php';alert('Login Efetuado com sucesso!');</script>";
        }else{
            echo "<script>alert('E-mail e/ou senha incorretos! Tente Novamente!');document.location='../login.php'</script>";
        }
    }
}
new AdministradorController();
?>
