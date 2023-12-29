<?php
require_once("../Models/Conexao.php");
$conexao = new Conexao();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    $email = $_POST["Email"];
    $senha = $_POST["Senha"];

    // Verifique se o usuário é um administrador
    $sql = "SELECT * FROM administrador WHERE email = ? AND senha = ?";
    $stmt = $conexao->getConexao()->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["cod"] = $row["cod"];
        $_SESSION["nome"] = $row["nome"];
        $_SESSION['logado'] = true;
        header("Location: ../View/tela-adm.php");
        exit();
    }


        // Verifique se o usuário é um tutor
        $sql = "SELECT * FROM tutor WHERE email = ? AND senha = ?";
        $stmt = $conexao->getConexao()->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION["tutor_cod"] = $row["cod"];
            $_SESSION["tutor_nome"] = $row["nome"];
            $_SESSION['logado'] = true;
            header("Location: ../View/agenda-tutor.php");
            exit();
        }
    
        // Verifique se o usuário é um anfitrião
        $sql = "SELECT * FROM anfitriao WHERE email = ? AND senha = ?";
        $stmt = $conexao->getConexao()->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION["anfitriao_cod"] = $row["cod"];
            $_SESSION["anfitriao_nome"] = $row["nome"];
            $_SESSION['logado'] = true;
            header("Location: ../View/anfitriao.php");
            exit();
        }
    
        // Credenciais inválidas
        echo "Email ou senha incorretos. Tente novamente.";
        $_SESSION['logado'] = false;
    }
    ?>
    