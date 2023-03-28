<?php

include_once('../conexao.php');



if ($_POST)
{
    $id_Usuario = $_POST ['txtID'];    
 

    try {
    $sql = $conn->prepare(
        'Delete from Usuario where id_Usuario =:id_Usuario' 
        );

        $sql->execute(array(
            ':id_Usuario' => $id_Usuario,
        

        ));
        
        if($sql->rowCount() ==1)
        {
            echo "<p>Dados Excluidos com sucesso</p>";
            echo '<a href="index.php">Voltar</a>';
        };

    }
    catch (PDOException $ex)
    {
    echo $ex->getMessage();
    }


}


?>