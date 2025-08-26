<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
   
    $sql = "SELECT * FROM agendamentos ORDER BY data_agend ASC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Agendamento de Laboratório de Informática</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #005FA4; 
            color: #fff; 
            text-align: center;
            padding: 95px 0 10px; 
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: calc(80vh - 100px); 
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            margin-top: -10px; 
        }

        h1 {
            color: #fff; 
            font-size: 24px; 
            margin-top: 30px; 
        }

        .button-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            background-color: #005FA4;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .buttonup {
            text-decoration: none;
            color:#ffffff;
            padding: 8px 16px;
            background-color: #FF0000;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            position:fixed;
            top: 5px;
            left: 5px;
            text-decoration: none;
      }
        
    </style>
</head>
<body>
    <header>
        <img src="images/baixados.jpg"/>
        <h1>SISTEMA DE AGENDAMENTO PARA O LABORATÓRIO DE INFORMÁTICA</h1>
    </header>
    <div class="container">
        <div class="button-container">
            <a href="consulta.php" class="button">Consultar Agendamento</a>
            <a href="agendamento.php" class="button">Realizar Agendamento</a>
            <a href="encerrarsessao.php" class= "buttonup"> Encerrar Sessão</a>
        </div>
    </div>
</body>
</html>







