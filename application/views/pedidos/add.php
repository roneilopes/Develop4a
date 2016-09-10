<div id="main" class="container-fluid">
    <h3 class="page-header">Adicionar Pedidos'</h3>
    <form action="<?= base_url('pedidos/add') ?>" method="post">
        <div class="row">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="funcionario">Funcionário</label>
                    <select name="funcionario_id" id="funcionario" class="form-control" placeholder="Selecione" autofocus="">
                        <option disabled selected> Selecione Funcionário</option>
                        <?php
                        $i = 0;
                        while ($i < count($dadosFun)) {
                            try {
                                echo "<option value='" . $dadosFun[$i]['id'] . "'> Nome: {$dadosFun[$i]['nome']} - Fone: {$dadosFun[$i]['telefone']} </option>";
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
                    <label for="cliente">Cliente</label>
                    <select name="cliente_id" id="funcionario" class="form-control" placeholder="Selecione">
                        <option disabled selected> Selecione Cliente</option>
                        <?php
                        $i = 0;
                        while ($i < count($dadosCli)) {
                            try {
                                echo "<option value='" . $dadosCli[$i]['id'] . "'> Nome: {$dadosCli[$i]['nome']} - Fone: {$dadosCli[$i]['telefone']} </option>";
                                $i++;
                            } catch (Exception $ex) {
                                return $ex->getMessage();
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('pedidos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
</div>


