<div id="main" class="container-fluid">
  
  <h3 class="page-header">Adicionar Fornecedor</h3>
  
  <form action="<?= base_url('fornecedores/add')?>" method="post">
  	<div class="row">
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cnpj">CNPJ</label>
                <input type="number" class="form-control"  name="cnpj" id="cnpj" placeholder="cnpj">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
                <input type="tel"  class="form-control"  name="telefone" id="cnpj" placeholder="(69)98766-9821">
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
          
	</div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Adicionar</button>
		<a href="<?= base_url('fornecedores')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>

