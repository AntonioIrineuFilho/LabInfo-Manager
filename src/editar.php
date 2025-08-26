<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM agendamentos WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome_agend'];
                $email = $user_data['email'];
                $data = $user_data['data_agend'];
                $horario = $user_data['horario'];
            }
        }
        else
        {
            header('Location: menu.php');
        }
    }
    else
    {
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
            <h2>Preencha esses dados para editar seu agendamento:</h2>
            <form action ="saveEditar.php" method = "post">
                <label for="nome"><h4>Nome:</h4></label>
                <input type="text" id="nome" name="nome" value=<?php echo $nome;?> required>
                <label for="email"><h4>Email:</h4></label>
                <input type="text" id="email" name="email" value=<?php echo $email;?> required>
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" value=<?php echo $data;?> required>
                <label for="horario">Horário:</label>
                <select id="horario" name="horario" required>
                    <option value="07:30" <?php echo ($horario == '07:30') ? 'checked' : '';?>>07:30</option>
                    <option value="08:20" <?php echo ($horario == '08:20') ? 'checked' : '';?>>08:20</option>
                    <option value="09:30" <?php echo ($horario == '09:30') ? 'checked' : '';?>>09:30</option>
                    <option value="10:20" <?php echo ($horario == '10:20') ? 'checked' : '';?>>10:20</option>
                    <option value="11:10" <?php echo ($horario == '11:10') ? 'checked' : '';?>>11:10</option>
                    <option value="13:20" <?php echo ($horario == '13:20') ? 'checked' : '';?>>13:20</option>
                    <option value="14:10" <?php echo ($horario == '14:10') ? 'checked' : '';?>>14:10</option>
                    <option value="15:20" <?php echo ($horario == '15:20') ? 'checked' : '';?>>15:20</option>
                    <option value="16:10" <?php echo ($horario == '16:10') ? 'checked' : '';?>>16:10</option>
                </select>
                    <div class="g">
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="editar_agend" value="Editar Agendamento">
                    </div>
            </form>
        </div>
    </div>
</body>
</html>

