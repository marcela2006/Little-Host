<?php
//import da classe banco
require_once("Conexao.php");

class Ficha_Animal extends Conexao {

    //Declaração das Variáveis
    //Usuário
    private $cod;
    private $cod_tutor;
    private $nome;
    private $especie;
    private $raca;
    private $sexo;
    private $idade;
    private $peso;
    private $tamanho;
    private $caracteristicas;
    private $comportamento;
    private $historico_medico;
    private $instrucoes_especiais;


    //Funções Gerais:
	public function create($ficha, $cod_tutor) {
		try {
			$stmt = $this->mysqli->prepare("INSERT INTO ficha_animal (`cod_tutor`, `nome`, `especie`, `raca`, `sexo`, `idade`, `peso`, `tamanho`, `caracteristicas`, `comportamento`, `historico_medico`, `instrucoes_especiais`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);");
			$stmt->bind_param("isssssssssss", $cod_tutor, $ficha->nome, $ficha->especie, $ficha->raca, $ficha->sexo, $ficha->idade, $ficha->peso, $ficha->tamanho, $ficha->caracteristicas, $ficha->comportamento, $ficha->historico_medico, $ficha->instrucoes_especiais);
	
			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (Exception $e) {
			echo "Ocorreu um erro ao realizar o cadastro do Animal: " . $e;
		}
	}
	


	public function read($cod_animal) {
		try {
			$stmt = $this->mysqli->query("SELECT * FROM ficha_animal WHERE cod_animal = " . $cod_animal . ";");
			$total = mysqli_num_rows($stmt);
	
			if ($total > 0) {
				$lista = $stmt->fetch_all(MYSQLI_ASSOC);
				$ficha = array();
	
				foreach ($lista as $l) {
					$ficha['cod_animal'] = $l['cod_animal']; // Atualize os nomes das colunas
					$ficha['cod_tutor'] = $l['cod_tutor'];
					$ficha['nome'] = $l['nome'];
					$ficha['especie'] = $l['especie'];
					$ficha['raca'] = $l['raca'];
					$ficha['sexo'] = $l['sexo'];
					$ficha['idade'] = $l['idade'];
					$ficha['peso'] = $l['peso'];
					$ficha['tamanho'] = $l['tamanho'];
					$ficha['caracteristicas'] = $l['caracteristicas'];
					$ficha['comportamento'] = $l['comportamento'];
					$ficha['historico_medico'] = $l['historico_medico'];
					$ficha['instrucoes_especiais'] = $l['instrucoes_especiais'];
				}
	
				return $ficha;
			} else {
				return 0;
			}
		} catch (Exception $e) {
			echo "<script>alert('Ocorreu um erro ao tentar buscar a ficha do animal: " . $e . "')</script>";
			return 0;
		}
	}
	
	public function update($cod_animal){
		try {
			$stmt = $this->mysqli->prepare("UPDATE ficha_animal SET nome=?, especie=?, raca=?, sexo=?, idade=?, peso=?, tamanho=?, caracteristicas=?, comportamento=?, historico_medico=?, instrucoes_especiais=? WHERE cod_animal = ?");
			$stmt->bind_param("sssssssssssi", $this->nome, $this->especie, $this->raca, $this->sexo, $this->idade, $this->peso, $this->tamanho, $this->caracteristicas, $this->comportamento, $this->historico_medico, $this->instrucoes_especiais, $cod_animal);
	
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





	public function editar(){
		return $this->updateficha($this->getId(),$this->getNome(),$this->getEspecie(),$this->getRaca(),$this->getSexo(),$this->getIdade(),$this->getPeso(),$this->getComplemento(),$this->getTamanho(),$this->getCaracteristicas(),$this->getComportamento(),$this->getHistorico_medico(),$this->getInstrucoes_especiais());

	}

	public function listarAnimaisPorTutor($tutorCod) {
		$animals = array();
		
		try {
			$stmt = $this->mysqli->prepare("SELECT cod_animal, nome, especie, raca, sexo, idade, peso, tamanho, caracteristicas, comportamento, historico_medico, instrucoes_especiais FROM ficha_animal WHERE cod_tutor = ?");
			$stmt->bind_param("i", $tutorCod);
			$stmt->execute();
			$result = $stmt->get_result();
			
			while ($row = $result->fetch_assoc()) {
				$animals[] = $row;
			}
		} catch (Exception $e) {
			echo "<script>alert('Ocorreu um erro ao buscar os animais: " . $e . "')</script>";
		} finally {
			if ($stmt !== null) {
				$stmt->close();
			}
		}
		
		return $animals;
	}
	
	



	public function delete($cod_animal) {
		try {
			$stmt = $this->mysqli->prepare("DELETE FROM ficha_animal WHERE cod_animal = ?");
			$stmt->bind_param("i", $cod_animal);
			
			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (Exception $e) {
			error_log("Ocorreu um erro ao excluir o animal: " . $e);
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
	 * @param mixed $cod_animal 
	 * @return self
	 */
	public function setCod($cod_animal): self {
		$this->cod = $cod;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCod_tutor() {
		return $this->cod_tutor;
	}
	
	/**
	 * @param mixed $cod_tutor 
	 * @return self
	 */
	public function setCod_tutor($cod_tutor): self {
		$this->cod_tutor = $cod_tutor;
		return $this;
	}
	
	
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome_animal 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEspecie() {
		return $this->especie;
	}
	
	/**
	 * @param mixed $especie 
	 * @return self
	 */
	public function setEspecie($especie): self {
		$this->especie = $especie;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getRaca() {
		return $this->raca;
	}
	
	/**
	 * @param mixed $raca 
	 * @return self
	 */
	public function setRaca($raca): self {
		$this->raca = $raca;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSexo() {
		return $this->sexo;
	}
	
	/**
	 * @param mixed $sexo 
	 * @return self
	 */
	public function setSexo($sexo): self {
		$this->sexo = $sexo;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdade() {
		return $this->idade;
	}
	
	/**
	 * @param mixed $idade 
	 * @return self
	 */
	public function setIdade($idade): self {
		$this->idade = $idade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getPeso() {
		return $this->peso;
	}
	
	/**
	 * @param mixed $peso 
	 * @return self
	 */
	public function setPeso($peso): self {
		$this->peso = $peso;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTamanho() {
		return $this->tamanho;
	}
	
	/**
	 * @param mixed $tamanho 
	 * @return self
	 */
	public function setTamanho($tamanho): self {
		$this->tamanho = $tamanho;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCaracteristicas() {
		return $this->caracteristicas;
	}
	
	/**
	 * @param mixed $caracteristicas 
	 * @return self
	 */
	public function setCaracteristicas($caracteristicas): self {
		$this->caracteristicas = $caracteristicas;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getComportamento() {
		return $this->comportamento;
	}
	
	/**
	 * @param mixed $comportamento 
	 * @return self
	 */
	public function setComportamento($comportamento): self {
		$this->comportamento = $comportamento;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getHistorico_medico() {
		return $this->historico_medico;
	}
	
	/**
	 * @param mixed $historico_medico 
	 * @return self
	 */
	public function setHistorico_medico($historico_medico): self {
		$this->historico_medico = $historico_medico;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getInstrucoes_especiais() {
		return $this->instrucoes_especiais;
	}
	
	/**
	 * @param mixed $instrucoes_especiais 
	 * @return self
	 */
	public function setInstrucoes_especiais($instrucoes_especiais): self {
		$this->instrucoes_especiais = $instrucoes_especiais;
		return $this;
	}
}
?>