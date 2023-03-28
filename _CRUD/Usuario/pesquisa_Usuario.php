<?php 

include_once('../conexao.php');

$id_usuario='';
$nome_usuario='';
$login_usuario='';
$senha_usuario='';
$cadastro_usuario='';
$status_usuario='';
$obs_usuario='';

if($_POST)
{
    $id_usuario = $_POST['txtID'];
    try
    {
        $sql = $conn->query('select * from usuario where id_usuario='.$id_usuario);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_usuario=$linha[0];
                $nome_usuario=$linha[1];
                $login_usuario=$linha[2];
                $senha_usuario=$linha[3];
                $cadastro_usuario=$linha[4];
                $status_usuario=$linha[5];
                $obs_usuario=$linha[6];

     
            }
        }
        else
        {
            echo "<p>Erro, dados não encontrado</p>";
           
        }

    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>