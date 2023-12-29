<?php
//import da classe banco
require_once("Conexao.php");

class Adminstrador extends Conexao {
	
	//Declaração das Variáveis
    //Usuário
    private $cod;
    private $nome;
    private $email;
    private $senha;


    //Funções Gerais:
    public function create(){
        //
    }

    public function read(){
        //
    }

    public function update($id){
        //
    }

    public function editar(){
        //
    }

    public function delete(){
        //
    }

	public function login($user, $password){
        try {
            $stmt = $this->mysqli->query("SELECT * FROM tbl_cliente WHERE email = '" . $user . "' AND senha = '" . $password . "';");

            $total = mysqli_num_rows($stmt); 
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            
            foreach ($lista as $l) {
                $id = $l['id'];
            }

            if( $total > 0){
                session_start();
                $_SESSION['loggedin'] = $id;
                return $id;
            }else{
                return 0;
            }
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar buscar seus dados!" . $e;
        }
    }

	/**
	 * @return mixed
	 */
	public function getCod() {
		return $this->cod;
	}
	
	/**
	 * @param mixed $cod 
	 * @return self
	 */
	public function setCod($cod): self {
		$this->cod = $cod;
		return $this;
	}
	
	
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSenha() {
		return $this->senha;
	}
	
	/**
	 * @param mixed $senha 
	 * @return self
	 */
	public function setSenha($senha): self {
		$this->senha = $senha;
		return $this;
	}
}
?>