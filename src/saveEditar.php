<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['editar_agend']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        
        $result = mysqli_query($conexao, "INSERT INTO data_horario(data_agend, horario) 
        VALUES ('$data','$horario')");
        $sqlInsert = "UPDATE agendamentos 
        SET nome_agend='$nome', email='$email', data_agend='$data', horario='$horario'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: consulta.php');

?>