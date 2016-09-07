<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Usuario</h3>

    <form action="<?= base_url('usuarios') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Digite o Nome">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" id="exampleInputEmail1" placeholder="Digite o Sobrenome">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" name="login"class="form-control" id="exampleInputEmail1" placeholder="Digite o Login">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputEmail1" placeholder="Digite a Senha">
            </div>
        </div>

         <div class="row">
            <div class="form-group col-md-4">
                <label for="grupo">Grupo</label>
                <select name="grupo" id="grupo" class="form-control" placeholder="Selecione">
                    <option> Selecione</option>
                    <option value="gerente" > Gerencia</option>
                    <option value="financa" > Financeiro</option>
                    <option value="diretor" > Diretoria</option>
                    <option value="ti" > Informática</option>
                </select>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <intput type="hidden" name="submit"/>
                <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?=base_url('usuarios')?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>