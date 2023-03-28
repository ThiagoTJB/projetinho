<?php

include_once('../conexao.php');



if ($_POST)
{
    $id_Usuario = $_POST ['txtID'];    
    $nome_usuario = $_POST['txtNome'];
    $login_usuario = $_POST['txtLogin'];
    $senha_usuario = $_POST['txtSenha'];
    $status_usuario = $_POST['txtStatus'];
    $obs_usuario = $_POST['txtObs'];

    try {
    $sql = $conn->prepare(
        'Update Usuario set
         nome_usuario = :nome_usuario,
         login_usuario = :login_usuario,
         senha_usuario = :senha_usuario,
         status_usuario = :status_usuario,
         obs_usuario = :obs_usuario 
         where id_Usuario  =:id_Usuario' 
        );

        $sql->execute(array(
            ':id_Usuario' => $id_Usuario,
            ':nome_usuario' =>$nome_usuario,
            ':login_usuario' =>$login_usuario,
            ':senha_usuario' =>$senha_usuario,
            ':status_usuario'=>$status_usuario,
            ':obs_usuario'=> $obs_usuario


        ));
        
        if($sql->rowCount() > 0)
        {
            echo "<p>Dados alterados com sucesso</p>";
            echo '<a href="index.php">Voltar</a>';
        };

    }
    catch (PDOException $ex)
    {
    echo $ex->getMessage();
    }


}


?>