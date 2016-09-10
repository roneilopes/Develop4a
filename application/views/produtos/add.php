<div id="main" class="container-fluid">
    <h3 class="page-header">Adicionar Produtos</h3>
    <form action="<?= base_url('produtos/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição" autofocus="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="fornecedor">Fornecedor</label>
                <select name="fornecedor_id" id="fornecedor" class="form-control" placeholder="Selecione">
                    <option disabled selected> Selecione Fornecedor</option>
                    <?php
                    $i = 0;
                    while ($i < count($dadosFor)) {
                        try {
                            echo "<option value='" . $dadosFor[$i]['id'] . "'> Nome: {$dadosFor[$i]['nome']} - Fone: {$dadosFor[$i]['telefone']} </option>";
                            $i++;
                        } catch (Exception $ex) {
                            return $ex->getMessage();
                        }
                    }
                    ?>
                </select>
            </div>
            
            <div class="form-group col-md-4">
                <label for="categoria">Categoria</label>
                <select name="categoria_id" id="categoria" class="form-control" placeholder="Selecione">
                    <option disabled selected> Selecione Categoria</option>
                    <?php
                    $i = 0;
                    while ($i < count($dadosCat)) {
                        try {
                            echo "<option value='" . $dadosCat[$i]['id'] . "'> Nome: {$dadosCat[$i]['nome']} </option>";
                            $i++;
                        } catch (Exception $ex) {
                            return $ex->getMessage();
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade">
            </div>
            <div class="form-group col-md-4">
                <label for="telefone">Valor</label>
                <input type="number" class="form-control" name="valor" id="valor" placeholder="Valor">
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>