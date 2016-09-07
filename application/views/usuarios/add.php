<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Usuario</h3>

    <form action="<?= base_url('usuario/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Senha</label>
                <input type="text" nome="password"class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Campo Quatro</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <intput type="hidden" name="submit"/>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?=base_url('usuarios')?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>