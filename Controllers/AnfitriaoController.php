<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("../Models/Anfitriao.php");

class AnfitriaoController{

    private $anfitriao;

    public function __construct()
    {
        $this->anfitriao = new Anfitriao();

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
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "updatelogado")
        {
            $this->updatelogado();
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "delete")
        {
            $this->delete($_GET['id']);
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "login")
        {
            $this->login();
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "listarDadosAnfitriaoLogado")
        {
            $this->listarDadosAnfitriaoLogado();
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "readanf")
        {
            $this->readanf();
        }
    }


    public function create()
    {
        $this->anfitriao->setNome($_POST['Nome']);
        $this->anfitriao->setTelefone($_POST['Telefone']);
        $this->anfitriao->setEndereco($_POST['Endereco']);
        $this->anfitriao->setCidade($_POST['Cidade']);
        $this->anfitriao->setBairro($_POST['Bairro']);
        $this->anfitriao->setNum_casa($_POST['Numero_Casa']);
        $this->anfitriao->setComplemento($_POST['Complemento']);
        $this->anfitriao->setCEP($_POST['CEP']);
        $this->anfitriao->setCPF($_POST['CPF']);
        $this->anfitriao->setGenero($_POST['Genero']);
        $this->anfitriao->setDt_nasc($_POST['Dt_nasc']);
        $this->anfitriao->setEmail($_POST['Email']);
        $this->anfitriao->setSenha($_POST['Senha']);
        $this->anfitriao->setValor_hora($_POST['VlH']);
        $this->anfitriao->setPreferencias($_POST['Preferencias']);

        $result = $this->anfitriao->create($this->anfitriao);
        if ($result) {
            echo "<script>alert('Anfitrião incluído com sucesso!');document.location='../View/login-cadastro.php'</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar o Anfitrião!');</script>";
        }
    }


    public function listarDadosAnfitriaoLogado($anfitriao_cod) {
        $dadosAnfitriao = $this->anfitriao->listarDadosAnfitriaoLogado($anfitriao_cod);
        return $dadosAnfitriao;
    }
    



    public function read($id)
    {
        $result = $this->anfitriao->read($id);

        if($result > 0){
            return $result;
        }else{
            echo "<script>alert('Erro ao buscar usuário!');</script>";
        }
    }


    



    public function editar(){
        $this->anfitriao->setNome($_POST['Nome_Anf']);
        $this->anfitriao->setTelefone($_POST['Telefone']);
        $this->anfitriao->setEndereco($_POST['Endereco']);
        $this->anfitriao->setCidade($_POST['Cidade']);
        $this->anfitriao->setBairro($_POST['Bairro']);
        $this->anfitriao->setNum_casa($_POST['Numero_Casa']);
        $this->anfitriao->setComplemento($_POST['Complemento']);
        $this->anfitriao->setCEP($_POST['CEP']);
        $this->anfitriao->setCPF($_POST['CPF']);
        $this->anfitriao->setGenero($_POST['Genero']);
        $this->anfitriao->setDt_nasc($_POST['Dt_nasc']);
        $this->anfitriao->setEmail($_POST['Email']);
        $this->anfitriao->setSenha($_POST['Senha']);
        $this->anfitriao->setValor_hora($_POST['VlH']);

        $result = $this->cadastro->editar();
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='../editarAnf.php'</script>";
        }else{
            echo "<script>alert('Erro ao alterar o registro!');</script>";
        }
    }


    public function listar()
    {
        $result = $this->anfitriao->listar();
        if($result > 0){
            return $result;
        }else{
            echo "<script>alert('Erro ao buscar os anfitrioes');</script>";
            return null;
        }
    }

    
    public function update()
{
    // Verifique se o parâmetro 'id' está definido no POST
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $this->anfitriao->setNome($_POST['Name']);
        $this->anfitriao->setTelefone($_POST['Telefone']);
        $this->anfitriao->setEndereco($_POST['Endereco']);
        $this->anfitriao->setCidade($_POST['Cidade']);
        $this->anfitriao->setBairro($_POST['Bairro']);
        $this->anfitriao->setNum_casa($_POST['Numero_Casa']);
        $this->anfitriao->setComplemento($_POST['Complemento']);
        $this->anfitriao->setCEP($_POST['CEP']);
        $this->anfitriao->setCPF($_POST['CPF']);
        $this->anfitriao->setGenero($_POST['Genero']);
        $this->anfitriao->setDt_nasc($_POST['Dt_nasc']);
        $this->anfitriao->setEmail($_POST['Email']);
        $this->anfitriao->setSenha($_POST['Senha']);
        $this->anfitriao->setValor_hora($_POST['VlH']);
    
        $result = $this->anfitriao->update($id);
        if ($result) {
            echo "<script>alert('Anfitrião atualizado com sucesso!');document.location='../View/tela-adm2.php'</script>";
        } else {
            echo "<script>alert('Erro ao atualizar o Anfitrião!');</script>";
        }
    } else {
        echo "ID não foi fornecido no POST.";

    }
}


public function updatelogado()
{
    // Verifique se o parâmetro 'id' está definido no POST
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $this->anfitriao->setNome($_POST['Name']);
        $this->anfitriao->setTelefone($_POST['Telefone']);
        $this->anfitriao->setEndereco($_POST['Endereco']);
        $this->anfitriao->setCidade($_POST['Cidade']);
        $this->anfitriao->setBairro($_POST['Bairro']);
        $this->anfitriao->setNum_casa($_POST['Numero_Casa']);
        $this->anfitriao->setComplemento($_POST['Complemento']);
        $this->anfitriao->setCEP($_POST['CEP']);
        $this->anfitriao->setCPF($_POST['CPF']);
        $this->anfitriao->setGenero($_POST['Genero']);
        $this->anfitriao->setDt_nasc($_POST['Dt_nasc']);
        $this->anfitriao->setEmail($_POST['Email']);
        $this->anfitriao->setSenha($_POST['Senha']);
        $this->anfitriao->setPreferencias($_POST['Preferencias']);
        $this->anfitriao->setValor_hora($_POST['VlH']);
    
        $result = $this->anfitriao->update($id);
        if ($result) {
            echo "<script>alert('Anfitrião atualizado com sucesso!');'</script>";
        } else {
            echo "<script>alert('Erro ao atualizar o Anfitrião!');</script>";
        }
    } else {
        echo "ID não foi fornecido no POST.";

    }
}
    

    public function delete($id)
    {
        $result = $this->anfitriao->delete($id);
        if($result > 0){
            echo "<script>alert('Anfitrião excluído com sucesso!');document.location='../View/tela-adm2.php'</script>";
        }else{
            echo "<script>alert('Erro ao excluir o Anfitrião!');document.location='../View/tela-adm2.php'</script>";
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
}
new AnfitriaoController();
?>

