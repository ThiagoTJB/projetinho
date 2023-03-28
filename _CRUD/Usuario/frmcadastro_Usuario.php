<?php include_once('pesquisa_Usuario.php')?>
<link rel="stylesheet" href="../bootstrap.css">
<form action="" class="form-control" method="post">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Formulário da Disgraça</h1>
            </div>
        <hr>
        <div class="row">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario">
        </div>
        <div class="col-sm-6"></div>


        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data Cadastro" value="<?=$cadastro_usuario?>">
        </div>
    
    </div>
        <div class="row mt-4">
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Insira o Nome" value="<?=$nome_usuario?>">
        </div>
        
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário" value="<?=$login_usuario?>">
        </div>


        </div>
        
        <div class="row mt-4">
        <div class="col-sm-3">
            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a senha">
        </div>
        </div>
        <div class="row mt-3">
    <div class="col-sm-3"> 

    <select name="txtStatus" id="txtStatus" class="form-control">
        <option  value="" <?=($status_usuario=="" ? 'selected' : '')?>> --- escolha na sorte ---</option>
        <option  value="" <?=($status_usuario=="ativo" ? 'selected' : '')?>>ativo</option>
        <option  value="" <?=($status_usuario=="Inativo" ? 'selected' : '')?>>Inativo </option>
</select>


            </div> 
    </div>
        </div>

        <div class="row mt-4">
        <div class="col-sm-12">
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"><?=$obs_usuario?></textarea>
        </div>
    </div>
 

    <div class="row mt-4 mb-4">
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-primary" formaction="frmcadastro_Usuario.php">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success" formaction="cadastrar_usuario.php">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning" formaction="alterar_Usuario.php">Alterar</button>
            <a name="btoLimpar" class="btn btn-dark" href="frmcadastro_Usuario.php">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger" formaction="Excluir_Usuario.php">Excluir</button>

        </div>
    </div>
</form>


