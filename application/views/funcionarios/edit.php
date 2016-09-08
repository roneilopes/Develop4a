<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Funcionários'</h3>
  
  <form action="<?= base_url('funcionarios/edit')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="number" class="form-control" id="id" placeholder="Id">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="entrada">Entrada</label>
                <input type="text" class="form-control" id="entrada" placeholder="CPF">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
                <input type="number" class="form-control" id="telefone" placeholder="Telefone">
  	  </div>
	</div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="cargo">Cargo</label>
                    <select name="cargo" id="grupo" class="form-control">
                        <option value="gerente"> Gerencia</option>
                        <option value="financa"> Financeiro</option>
                        <option value="diretor"> Diretoria</option>
                        <option value="ti"> Informática</option>
                    </select>
                </div>
            </div>
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Atualizar</button>
		<a href="<?= base_url('funcionarios')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>


