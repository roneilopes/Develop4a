<div id="main" class="container-fluid">
  
  <h3 class="page-header">Adicionar Funcionário</h3>
  
  <form action="<?= base_url('funcionarios/add')?>" method="post">
  	<div class="row">
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
  	  	<input type="text" class="form-control" name="nome" placeholder="Nome">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="entrada">Entrada</label>
                <input type="text" class="form-control" name="entrada" placeholder="Entrada">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
                <input type="number" class="form-control" name="telefone" placeholder="Telefone">
  	  </div>
          </div>
      
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="cargo">Cargo</label>
                        <select name="cargo" id="cargo" class="form-control">
                            <option value="" disabled selected>Selecione o cargo</option>
                            <?php
                                $i = 0;
                                while ($i <= ($dadosCargo[$i]['id'])) {
                                    try {
                                        $idCargo = $dadosCargo[$i]['id'];
                                        echo "<option value='$idCargo'> Descrição: {$dadosCargo[$i]['descricao']}</option>";
                                        $i++;
                                    } catch (Exception $ex) {
                                        return $ex->getMessage();
                                    }
                                }
                                ?>   
                        </select>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="endereco">Endereço</label>
                        <select name="endereco_id" id="endereco" class="form-control">
                            <option value="" disabled selected>Selecione o endereço</option>
                            <?php
                                $i = 0;
                                while ($i <= ($dadosEnd[$i]['id'])) {
                                    try {
                                        $idEnd = $dadosEnd[$i]['id'];
                                        echo "<option value='$idEnd'> Bairro: {$dadosEnd[$i]['bairro']} - CEP: {$dadosEnd[$i]['cep']} </option>";
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
		<a href="<?= base_url('funcionarios')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>
         
        </div>

  </form>
 </div>
