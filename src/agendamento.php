<?php
    require_once 'config.php';

    if(isset($_POST['enviar_dados_agend'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];

        $result = mysqli_query($conexao, "INSERT INTO data_horario(data_agend, horario) 
        VALUES ('$data','$horario')");
        
        $result = mysqli_query($conexao, "INSERT INTO agendamentos(nome_agend, email, data_agend, horario) 
        VALUES ('$nome','$email','$data','$horario')");

        header('Location: menu.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; 
            padding: 0; 
        }

        header {
            background-color: #005FA4; 
            color: #fff;
            text-align: center;
            padding: 5%
        }

        .container {
            max-width: 850px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label, input, select {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
        padding: 10px 20px;
        background-color: #005FA4;
        color: #fff;
        border: none;
        border-radius: 60px;
        cursor: pointer;
      }

      .container .g {
        display: flex;
        justify-content: center;
        align-items: center;
      }
       
    </style>
</head>
<body>
    <header>
      <img src="images/baixados.jpg"/>
    </header>
    <div class="container">
        <div>
            <h2>Preencha esses dados para seguir com o agendamento:</h2>
            <form action ="" method = "post">
                <label for="nome"><h4>Nome:</h4></label>
                <input type="text" id="nome" name="nome" required>
                <label for="email"><h4>Email:</h4></label>
                <input type="text" id="email" name="email" required>
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required>
                <label for="horario">Horário:</label>
                <select id="horario" name="horario" required>
                    <option value="07:30">07:30</option>
                    <option value="08:20">08:20</option>
                    <option value="09:30">09:30</option>
                    <option value="10:20">10:20</option>
                    <option value="11:10">11:10</option>
                    <option value="13:20">13:20</option>
                    <option value="14:10">14:10</option>
                    <option value="15:20">15:20</option>
                    <option value="16:10">16:10</option>
                </select>
                    <div class="g">
                <input type="submit" name="enviar_dados_agend" value="Realizar Agendamento">
                    </div>
            </form>
        </div>
    </div>
</body>
</html>

