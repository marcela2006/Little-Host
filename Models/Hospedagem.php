<?php
//import da classe banco
require_once("Conexao.php");

class Hospedagem extends Conexao {

    //Declaração das Variáveis
    //Usuário
    private $cod;
    private $cod_tutor;
    private $cod_anf;
	private $cod_animal;
    private $plano_hosp;
    private $dia_hosp;
    private $dia_busca;
	private $valo_total;
    private $nome_animal;
	


    //Funções Gerais:
	public function create(){
		try {
            $stmt = $this->getConexao()->prepare("INSERT INTO hospedagem (`cod_tutor`, `cod_anfitriao`, `data_hosp`, `data_busca`) VALUES (?, ?, ?, ?);");

			if ($stmt === false) {
				die("Erro na preparação da consulta: " . $this->getConexao()->error);
			}

			$stmt->bind_param("iiss", $this->cod_tutor, $this->cod_anf, $this->dia_hosp, $this->dia_busca);

            if( $stmt->execute())
			{
				return true ;
			}else{
				return false;
			}
        } catch (Exception $e) {
            echo "Ocorreu um erro realizar ao hospedagem" . $e;
        }
    }


	
	public function listarHospedagensPorTutor($tutorCod) {
		$hospedagens = array();
		$stmt = null; // Inicialize a variável $stmt
	
		try {
			$stmt = $this->mysqli->prepare("SELECT cod, cod_anfitriao, data_hosp, data_busca FROM hospedagem WHERE cod_tutor = ?");
			$stmt->bind_param("i", $tutorCod);
			$stmt->execute();
			$result = $stmt->get_result();
	
			while ($row = $result->fetch_assoc()) {
				$hospedagens[] = $row;
			}
		} catch (Exception $e) {
			echo "<script>alert('Ocorreu um erro ao buscar as hospedagens: " . $e . "')</script>";
		} finally {
			if ($stmt !== null) {
				$stmt->close();
			}
		}
	
		return $hospedagens;
	}
	
	
	public function listarHospedagensPorAnfitriao($anfitriaoCod) {
		$hospedagens = array();
		$stmt = null;
	
		try {
			$stmt = $this->mysqli->prepare("SELECT cod, cod_tutor, data_hosp, data_busca FROM hospedagem WHERE cod_anfitriao = ?");
			$stmt->bind_param("i", $anfitriaoCod);
			$stmt->execute();
			$result = $stmt->get_result();
	
			while ($row = $result->fetch_assoc()) {
				$hospedagens[] = $row;
			}
		} catch (Exception $e) {
			echo "<script>alert('Ocorreu um erro ao buscar as hospedagens: " . $e . "')</script>";
		} finally {
			if ($stmt !== null) {
				$stmt->close();
			}
		}
	
		return $hospedagens;
	}
	
	
	

	public function read($id) {
		try {
            $stmt = $this->mysqli->query("SELECT * FROM hospedagem WHERE cod = " . $id . ";");
            $total = mysqli_num_rows($stmt); 

            if($total > 0){
				$lista = $stmt->fetch_all(MYSQLI_ASSOC);
				$hospedagem = array();

				foreach ($lista as $l) {
					$hospedagem['cod'] = $l['cod'];
					$hospedagem['dia_hosp'] = $l['dia_hosp'];
					$hospedagem['dia_busca'] = $l['dia_busca'];
					$hospedagem['valor_total'] = $l['valor_total'];
				}

                return $anfitriao;
            }else{
                return 0;
            }
			
        } catch (Exception $e) {
            echo "<script>alert('Ocorreu um erro ao tentar buscar a hospedagem: " . $e . "')</script>";
            return 0;
        }
    }

	public function editar(){
		return $this->updateHospedagem($this->getId(),$this->getDia_hosp(),$this->getDia_busca(),$this->getValor_total());

	}
    

    public function update($id){
        //
    }

	

	public function delete($cod_hospedagem) {
		try {
			$stmt = $this->mysqli->prepare("DELETE FROM hospedagem WHERE cod = ?");
			$stmt->bind_param("i", $cod_hospedagem);
			
			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (Exception $e) {
			error_log("Ocorreu um erro ao excluir a hospedagem: " . $e);
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
	public function getCod_anf() {
		return $this->cod_anf;
	}
	
	/**
	 * @param mixed $cod_anf 
	 * @return self
	 */
	public function setCod_anf($cod_anf): self {
		$this->cod_anf = $cod_anf;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getPlano_hosp() {
		return $this->plano_hosp;
	}
	
	/**
	 * @param mixed $plano_hosp 
	 * @return self
	 */
	public function setPlano_hosp($plano_hosp): self {
		$this->plano_hosp = $plano_hosp;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDia_hosp() {
		return $this->dia_hosp;
	}
	
	/**
	 * @param mixed $dia_hosp 
	 * @return self
	 */
	public function setDia_hosp($dia_hosp): self {
		$this->dia_hosp = $dia_hosp;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDia_busca() {
		return $this->dia_busca;
	}
	
	/**
	 * @param mixed $dia_busca 
	 * @return self
	 */
	public function setDia_busca($dia_busca): self {
		$this->dia_busca = $dia_busca;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCod_animal() {
		return $this->cod_animal;
	}
	
	/**
	 * @param mixed $cod_animal 
	 * @return self
	 */
	public function setCod_animal($cod_animal): self {
		$this->cod_animal = $cod_animal;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNome_animal() {
		return $this->nome_animal;
	}
	
	/**
	 * @param mixed $nome_animal 
	 * @return self
	 */
	public function setNome_animal($nome_animal): self {
		$this->nome_animal = $nome_animal;
		return $this;
	}
}
?>