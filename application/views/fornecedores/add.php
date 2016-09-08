<div id="main" class="container-fluid">
  
  <h3 class="page-header">Adicionar Fornecedor</h3>
  
  <form action="<?= base_url('fornecedores/edit')?>" method="post">
  	<div class="row">
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cnpj">CNPJ</label>
                <input type="number" class="form-control"  name="cnpj" id="cnpj" placeholder="cnpj">
  	  </div>
          
            <div class="row">
            <div class="form-group col-md-4">
                <label for="endereco">Endereco</label>
                <select name="endereco" id="endereco" class="form-control">
                    <option> Selecione</option>
                    <option value="" >Rua JJJJ</option>
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

