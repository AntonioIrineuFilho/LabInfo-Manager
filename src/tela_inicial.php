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
        
            
    </style>
</head>
<body>
    <header>
        <img src="images/baixados.jpg"/>
        <h1>SISTEMA DE AGENDAMENTO PARA O LABORATÓRIO DE INFORMÁTICA</h1>
    </header>
    <div class="container">
        <div class="button-container">
            <a href="cadastro.php" class="button">Realizar Cadastro</a>
            <a href="login.php" class="button">Realizar Login</a>
        </div>
    </div>
</body>
</html>
  