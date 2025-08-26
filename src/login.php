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
            <h2>Digite os seus dados para realizar login:</h2>
            <form action ="testLogin.php" method ="POST">
                <label for="email"><h4>Digite seu email:</h4></label>
                <input type="text" id="email" name="email" required>
                <label for="senha"><h4>Digite sua senha:</h4></label>
                <input type="password" id="senha" name="senha" required>
                    <div class="g">
                <input type="submit" name="enviar_dados_login" value="Realizar Login">
                    </div>
            </form>
        </div>
    </div>
</body>
</html>
