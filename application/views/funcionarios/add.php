<div id="main" class="container-fluid">
  
  <h3 class="page-header">Adicionar Funcionário</h3>
  
  <form action="<?= base_url('add')?>" method="post">
  	<div class="row">
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
  	  	<input type="text" class="form-control" id="nome" placeholder="Nome">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="entrada">Entrada</label>
                <input type="text" class="form-control" id="entrada" placeholder="Entrada">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
                <input type="number" class="form-control" id="telefone" placeholder="Telefone">
  	  </div>
            
	</div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Salvar</button>
		<a href="<?= base_url('funcionarios')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
