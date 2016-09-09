<div id="main" class="container-fluid">
  
  <h3 class="page-header">Adicionar Cliente</h3>
  
  <form action="<?= base_url('clientes/add')?>" method="post">
  	<div class="row">
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
  	  	<input type="text" class="form-control" name="nome" placeholder="Nome">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cpf">CPF</label>
                <input type="number" class="form-control" name="cpf" placeholder="CPF">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
                <input type="number" class="form-control" name="telefone" placeholder="Telefone">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="renda">Renda</label>
                <input type="number" class="form-control" name="renda" placeholder="Renda">
  	  </div>
          <div class="row">
            <div class="form-group col-md-4">
                <label for="endereco">Endereco</label>
                <select name="endereco_id" id="endereco" class="form-control" placeholder="Selecione">
                    <option> Selecione</option>
                    <?php
                    //$_POST['data_cadastro'] =  strtotime(date('d/m/Y'));
                    $i = 0;
                    while ($i <= ($dadosEnd[$i]['id'])) {
                        try {
                            echo "<option value='".$dadosEnd[$i]['id']."'> Bairro: {$dadosEnd[$i]['bairro']} - CEP: {$dadosEnd[$i]['cep']} </option>";
                            $i++;
                        } catch (Exception $ex) {
                            return $ex->getMessage();
                        }
                    }
                    ?>
                </select>
            </div>
          </div>
          <!-- **Perguntar**data cadastro e endereço_id -->
	</div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Salvar</button>
		<a href="<?= base_url('clientes')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
