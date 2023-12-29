<?php
require_once("Conexao.php");

class Anfitriao extends Conexao {
    // Propriedades
    private $nome;
    private $telefone;
    private $endereco;
    private $cidade;
    private $bairro;
    private $num_casa;
    private $complemento;
    private $cep;
    private $cpf;
    private $genero;
    private $dt_nasc;
    private $email;
    private $senha;
    private $imagem;
    private $valor_hora;
	private $preferencias;

    // Métodos


	public function listarDadosAnfitriaoLogado($anfitriao_cod) {
		try {
			$stmt = $this->mysqli->query("SELECT * FROM anfitriao WHERE cod = " . $anfitriao_cod . ";");
			$total = mysqli_num_rows($stmt);
	
			if ($total > 0) {
				$dados = $stmt->fetch_assoc(); // Use fetch_assoc() para obter um array associativo
				return [$dados]; // Coloque os dados em um array para permitir a iteração
			} else {
				return null;
			}
		} catch (Exception $e) {
			echo "<script>alert('Ocorreu um erro ao tentar buscar os dados do anfitrião: " . $e . "')</script>";
			return null;
		}
	}
	



    public function create($anfitriao)
    {
        try {
            $stmt = $this->mysqli->prepare("INSERT INTO anfitriao (`nome`, `telefone`, `endereco`, `cidade`, `bairro`, `num_casa`, `complemento`, `cep`, `cpf`, `genero`, `dt_nasc`, `email`, `senha`,  `valor_hora`,  `preferencias`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssssss", $anfitriao->nome, $anfitriao->telefone, $anfitriao->endereco, $anfitriao->cidade, $anfitriao->bairro, $anfitriao->num_casa, $anfitriao->complemento, $anfitriao->cep, $anfitriao->cpf, $anfitriao->genero, $anfitriao->dt_nasc, $anfitriao->email, $anfitriao->senha,  $anfitriao->valor_hora, $anfitriao->preferencias);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Ocorreu um erro ao realizar o cadastro: " . $e->getMessage();
        }
    }


	
	public function read($id) {
		try {
            $stmt = $this->mysqli->query("SELECT * FROM anfitriao WHERE cod = " . $id . ";");
            $total = mysqli_num_rows($stmt); 

            if($total > 0){
				$lista = $stmt->fetch_all(MYSQLI_ASSOC);
				$anfitriao = array();

				foreach ($lista as $l) {
					$anfitriao['cod'] = $l['cod'];
					$anfitriao['nome'] = $l['nome'];
					$anfitriao['telefone'] = $l['telefone'];
					$anfitriao['endereco'] = $l['endereco'];
					$anfitriao['cidade'] = $l['cidade'];
					$anfitriao['bairro'] = $l['bairro'];
					$anfitriao['num_casa'] = $l['num_casa'];
					$anfitriao['complemento'] = $l['complemento'];
					$anfitriao['cep'] = $l['cep'];
					$anfitriao['cpf'] = $l['cpf'];
					$anfitriao['genero'] = $l['genero'];
					$anfitriao['dt_nasc'] = $l['dt_nasc'];
					$anfitriao['email'] = $l['email'];
					$anfitriao['senha'] = $l['senha'];
					$anfitriao['valor_hora'] = $l['valor_hora'];
					$anfitriao['preferencias'] = $l['preferencias'];
				}

                return $anfitriao;
            }else{
                return 0;
            }
			
        } catch (Exception $e) {
            echo "<script>alert('Ocorreu um erro ao tentar buscar os anfitrioes: " . $e . "')</script>";
            return 0;
        }
    }


	public function readanf($anfitriao_cod) {
		try {
			$stmt = $this->mysqli->query("SELECT * FROM anfitriao WHERE cod = " . $anfitriaoCod . ";");
			$total = mysqli_num_rows($stmt);
	
			if($total > 0){
				$lista = $stmt->fetch_all(MYSQLI_ASSOC);
				$listar = array();
	
				foreach ($lista as $l) {
					$listar['cod'] = $l['cod'];
					$listar['nome'] = $l['nome'];
					$listar['telefone'] = $l['telefone'];
					$listar['endereco'] = $l['endereco'];
					$listar['cidade'] = $l['cidade'];
					$listar['bairro'] = $l['bairro'];
					$listar['num_casa'] = $l['num_casa'];
					$listar['complemento'] = $l['complemento'];
					$listar['cep'] = $l['cep'];
					$listar['cpf'] = $l['cpf'];
					$listar['genero'] = $l['genero'];
					$listar['dt_nasc'] = $l['dt_nasc'];
					$listar['email'] = $l['email'];
					$listar['senha'] = $l['senha'];
					$listar['preferencias'] = $l['preferencias'];
					$listar['valor_hora'] = $l['valor_hora'];
					
				}
	
				return $listar;
			} else {
				return 0;
			}
		} catch (Exception $e) {
			echo "<script>alert('Ocorreu um erro ao tentar buscar os anfitriões: " . $e . "')</script>";
			return 0;
		}
	}
	




	public function editar(){
		return $this->updateAnfitriao($this->getId(),$this->getNome(),$this->getTelefon(),$this->getEndereco(),$this->getCidade(),$this->getBairro(),$this->getNumero_Casa(),$this->getComplemento(),$this->getCep(),$this->getCpf(),$this->getGenero(),$this->getDt_Nasc(),$this->getEmail(),$this->getEmail(),$this->getSenha(),$this->getValorHora());

	}

	public function listar(){
		try {
            $stmt = $this->mysqli->query("SELECT * FROM anfitriao");
            $total = mysqli_num_rows($stmt); 

            if($total > 0){
				$lista = $stmt->fetch_all(MYSQLI_ASSOC);
				$anfitrioes = array();
				$i = 0;

				foreach ($lista as $l) {
					$anfitrioes[$i]['cod'] = $l['cod'];
					$anfitrioes[$i]['nome'] = $l['nome'];
					$anfitrioes[$i]['email'] = $l['email'];
					$anfitrioes[$i]['senha'] = $l['senha'];
					$anfitrioes[$i]['imagem'] = $l['imagem_perfil'];
					$i++;
				}

                return $anfitrioes;
            }else{
                return 0;
            }
			
        } catch (Exception $e) {
            echo "<script>alert('Ocorreu um erro ao tentar buscar os anfitrioes: " . $e . "')</script>";
            return 0;
        }
	}

	public function update($id){
		try {
			$stmt = $this->mysqli->prepare("UPDATE anfitriao SET nome=?, telefone=?, endereco=?, cidade=?, bairro=?, num_casa=?, complemento=?, cep=?, cpf=?, genero=?, dt_nasc=?, email=?, senha=?, valor_hora=?, preferencias=? WHERE cod=?");
			$stmt->bind_param("sssssssssssssssi", $this->nome, $this->telefone, $this->endereco, $this->cidade, $this->bairro, $this->num_casa, $this->complemento, $this->cep, $this->cpf, $this->genero, $this->dt_nasc, $this->email, $this->senha, $this->valor_hora, $this->preferencias, $id);
	
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
            $stmt = $this->mysqli->query("DELETE FROM anfitriao WHERE `cod` =  " . $id . ";");

			if( $stmt > 0){
				return true;
			}else{
				return false;
			}
			
        } catch (Exception $e) {
            echo "<script>alert('Ocorreu um erro ao tentar excluir o Anfitriao: " . $e . "')</script>";
            return false;
        }
    }


// Declaracao dos metodos Get e Set

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
	 * @param mixed $nome_anf 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return self
	 */
	public function setTelefone($telefone): self {
		$this->telefone = $telefone;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}
	
	/**
	 * @param mixed $endereco 
	 * @return self
	 */
	public function setEndereco($endereco): self {
		$this->endereco = $endereco;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCidade() {
		return $this->cidade;
	}
	
	/**
	 * @param mixed $cidade 
	 * @return self
	 */
	public function setCidade($cidade): self {
		$this->cidade = $cidade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getBairro() {
		return $this->bairro;
	}
	
	/**
	 * @param mixed $bairro 
	 * @return self
	 */
	public function setBairro($bairro): self {
		$this->bairro = $bairro;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNum_Casa() {
		return $this->num_casa;
	}
	
	/**
	 * @param mixed $numero_casa 
	 * @return self
	 */
	public function setNum_Casa($num_casa): self {
		$this->num_casa = $num_casa;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getComplemento() {
		return $this->complemento;
	}
	
	/**
	 * @param mixed $complemento 
	 * @return self
	 */
	public function setComplemento($complemento): self {
		$this->complemento = $complemento;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCep() {
		return $this->cep;
	}
	
	/**
	 * @param mixed $cep 
	 * @return self
	 */
	public function setCep($cep): self {
		$this->cep = $cep;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCpf() {
		return $this->cpf;
	}
	
	/**
	 * @param mixed $cpf 
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getGenero() {
		return $this->genero;
	}
	
	/**
	 * @param mixed $genero 
	 * @return self
	 */
	public function setGenero($genero): self {
		$this->genero = $genero;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getBirthday() {
		return $this->birthday;
	}
	
	/**
	 * @param mixed $birthday 
	 * @return self
	 */
	public function setDt_nasc($dt_nasc) {
		$this->dt_nasc = $dt_nasc;
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

	
	public function getPreferencias() {
		return $this->preferencias;
	}
	
	/**
	 * @param mixed $senha 
	 * @return self
	 */
	public function setPreferencias($preferencias): self {
		$this->preferencias = $preferencias;
		return $this;
	}
	/**
	 * @param mixed $senha 
	 * @return self
	 */


	 public function getValor_hora() {
		return $this->valor_hora;
	}
	
	/**
	 * @param mixed $senha 
	 * @return self
	 */

	public function setValor_hora($valor_hora) {
        $this->valor_hora = $valor_hora;
		return $this;
    }
}
?>