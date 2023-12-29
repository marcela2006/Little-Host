<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("../Models/Ficha_Animal.php");

class FichaController{

    private $ficha;

    public function __construct()
    {
        $this->ficha = new Ficha_Animal();

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
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "login")
        {
            $this->login();
        }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "listar")
        {
            $this->listar();
        }
    }


    private function create() {
        session_start();
        // Obtenha o código do tutor da sessão
        $cod_tutor = $_SESSION["tutor_cod"];
    
        $this->ficha->setNome($_POST['Nome']);
        $this->ficha->setEspecie($_POST['Especie']);
        $this->ficha->setRaca($_POST['Raca']);
        $this->ficha->setIdade($_POST['Idade']);
        $this->ficha->setSexo($_POST['Sexo']);
        $this->ficha->setPeso($_POST['Peso']);
        $this->ficha->setTamanho($_POST['Tamanho']);
        $this->ficha->setCaracteristicas($_POST['Caracteristicas']);
        $this->ficha->setComportamento($_POST['Comportamento']);
        $this->ficha->setHistorico_medico($_POST['HistoricoMedico']);
        $this->ficha->setInstrucoes_especiais($_POST['Instrucoes']);
    
        $result = $this->ficha->create($this->ficha, $cod_tutor);
    
        if ($result) {
            echo "<script>alert('Animal incluído com sucesso!');document.location='../View/login-cadastro.php'</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar o Animal!');</script>";
        }
    }
    
    public function read($cod_animal) {

        $result = $this->ficha->read($cod_animal);

        if($result > 0){
            return $result;
        }else{
            echo "<script>alert('Erro ao buscar usuário!');</script>";
        }
    }


    public function update()
    {
        // Verifique se o parâmetro 'id' está definido no POST
        if (isset($_GET['cod_animal'])) {
            $cod_animal = $_GET['cod_animal'];// Obtenha o ID do animal a ser atualizado
            
            $this->ficha->setNome($_POST['Name']);
            $this->ficha->setEspecie($_POST['inputEspecie']);
            $this->ficha->setRaca($_POST['Raca']);
            $this->ficha->setIdade($_POST['Idade']);
            $this->ficha->setSexo($_POST['inputSexo']);
            $this->ficha->setPeso($_POST['Peso']);
            $this->ficha->setTamanho($_POST['Tamanho']);
            $this->ficha->setCaracteristicas($_POST['Caracteristicas']);
            $this->ficha->setComportamento($_POST['Comportamento']);
            $this->ficha->setHistorico_medico($_POST['Historico_Medico']);
            $this->ficha->setInstrucoes_especiais($_POST['Instrucoes_especiais']);
        
            $result = $this->ficha->update($cod_animal);
            if ($result) {
                echo "<script>alert('Anumal atualizado com sucesso!');document.location='../View/ficha.php'</script>";
            } else {
                echo "<script>alert('Erro ao atualizar o Animal!');</script>";
            }
        } else {
            echo "ID não foi fornecido na URL.";
        }
    }



    public function editar() {
        if (isset($_POST['Name'])) {
            $this->ficha->setNome($_POST['Name']);
            $this->ficha->setEspecie($_POST['inputEspecie']);
            $this->ficha->setRaca($_POST['Raca']);
            $this->ficha->setIdade($_POST['Idade']);
            $this->ficha->setSexo($_POST['inputSexo']);
            $this->ficha->setPeso($_POST['Peso']);
            $this->ficha->setTamanho($_POST['Tamanho']);
            $this->ficha->setCaracteristicas($_POST['Caractisticas']);
            $this->ficha->setComportamento($_POST['Comportamento']);
            $this->ficha->setHistorico_medico($_POST['Historico_Medico']);
            $this->ficha->setInstrucoes_especiais($_POST['Instrucoes_especiais']);
    
            $id = $_GET['id']; // Obtenha o ID do animal a ser atualizado
    
            $result = $this->ficha->update($id);
    
            if ($result) {
                echo "<script>alert('Animal atualizado com sucesso!');document.location='../View/sua_view.php'</script>";
            } else {
                echo "<script>alert('Erro ao atualizar o Animal!');</script>";
            }
        }
    }


    public function listarAnimaisPorTutor($tutorCod) {
        return $this->ficha->listarAnimaisPorTutor($tutorCod);
    }

    



    public function delete($cod_animal) {
        session_start();
        $tutorCod = $_SESSION['tutor_cod'];
        
        $deleted = $this->ficha->delete($cod_animal); // Corrigido para chamar o método "delete"
    
        if ($deleted) {
            echo "<script>alert('Animal excluído com sucesso!');document.location='../View/ficha.php'</script>";
        } else {
            echo "<script>alert('Erro ao excluir o animal!');document.location='../View/ficha.php'</script>";
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
new FichaController();
?>

