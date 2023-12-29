<?php
//import da classe banco
require_once("../Models/Conexao.php");

class Tutor extends Conexao {

    //Declaração das Variáveis
    //Usuário
    private $cod;
    private $nome;
    private $email;
    private $senha;


    //Funções Gerais:
    public function create($tutor)
	{
        try {
            $stmt = $this->mysqli->prepare("INSERT INTO tutor (`nome`, `email`, `senha`) VALUES (?,?,?);");
			$stmt->bind_param("sss",$tutor->nome, $tutor->email, $tutor->senha);

            if( $stmt->execute())
			{
				return true ;
			}else{
				return false;
			}
        } catch (Exception $e) {
            echo "Ocorreu um erro realizar cadastro" . $e;
        }
    }




	public function read($id) {
		try {
            $stmt = $this->mysqli->query("SELECT * FROM tutor WHERE cod = " . $id . ";");
            $total = mysqli_num_rows($stmt); 

            if($total > 0){
				$lista = $stmt->fetch_all(MYSQLI_ASSOC);
				$tutor = array();

				foreach ($lista as $l) {
					$tutor['nome'] = $l['nome'];
					$tutor['email'] = $l['email'];
					$tutor['senha'] = $l['senha'];
				}

                return $tutor;
            }else{
                return 0;
            }
			
        } catch (Exception $e) {
            echo "<script>alert('Ocorreu um erro ao tentar buscar os tutores: " . $e . "')</script>";
            return 0;
        }
    }


	public function editar(){
		return $this->updateTutor($this->getId(),$this->getNome(),$this->getEmail(),$this->getSenha());

	}


	public function listar()
	{
        try {
            $stmt = $this->mysqli->query("SELECT * FROM tutor");
            $total = mysqli_num_rows($stmt); 

            if($total > 0){
				$lista = $stmt->fetch_all(MYSQLI_ASSOC);
				$tutores = array();
				$i = 0;

				foreach ($lista as $l) {
					$tutores[$i]['cod'] = $l['cod'];
					$tutores[$i]['nome'] = $l['nome'];
					$tutores[$i]['email'] = $l['email'];
					$tutores[$i]['senha'] = $l['senha'];
					$tutores[$i]['imagem'] = $l['imagem_perfil'];
					$i++;
				}

                return $tutores;
            }else{
                return 0;
            }
			
        } catch (Exception $e) {
            echo "<script>alert('Ocorreu um erro ao tentar buscar os tutores: " . $e . "')</script>";
            return 0;
        }
    }

    public function update($id)
	{
		try {
			$stmt = $this->mysqli->prepare("UPDATE tutor SET nome=?,  email=?, senha=? WHERE cod=?");
			$stmt->bind_param("sssi", $this->nome,  $this->email, $this->senha,  $id);
	
			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (Exception $e) {
			echo "Ocorreu um erro ao realizar a atualização: " . $e->getMessage();
			return false;
		}
    }

    public function delete($id)
	{
		try {
            $stmt = $this->mysqli->query("DELETE FROM tutor WHERE `cod` =  " . $id . ";");

			if( $stmt > 0){
				return true;
			}else{
				return false;
			}
			
        } catch (Exception $e) {
            echo "<script>alert('Ocorreu um erro ao tentar excluir o tutor: " . $e . "')</script>";
            return false;
        }
    }

	public function login($user, $password){
        try {
            $stmt = $this->mysqli->query("SELECT * FROM tutor WHERE email = '" . $user . "' AND senha = '" . $password . "';");

            $total = mysqli_num_rows($stmt); 
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            
            foreach ($lista as $l) {
                $id = $l['id'];
            }

            if( $total > 0){
                session_start();
                $_SESSION['loggedin'] = true;
				$_SESSION['ID'] = $id;
                return 1;
            }else{
                return 0;
            }
        } catch (Exception $e) {
            echo "<script>alert('Ocorreu um erro ao tentar fazer login: " . $e . "')</script>";
            return 0;
        }
    }

	public function AnimaisCadastrados($tutor_cod) {
		$query = "SELECT COUNT(*) as total FROM ficha_animal WHERE cod_tutor = ?";
		
		// Prepare a statement
		$stmt = $this->mysqli->prepare($query);
		
		if (!$stmt) {
			die("Preparação da consulta falhou: " . $this->mysqli->error);
		}
	
		// Bind the parameter
		$stmt->bind_param("i", $tutor_cod);
		
		// Execute the statement
		if ($stmt->execute()) {
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();
			$stmt->close(); // Fechar a declaração após o uso
			return ($row['total'] > 0);
		} else {
			return false;
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