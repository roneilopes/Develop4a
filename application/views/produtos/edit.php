<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Funcionários'</h3>
  
  <form action="<?= base_url('produtos/edit')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="number" class="form-control" name="id" id="id" placeholder="Id">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Categoria">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="telefone">Valor</label>
                <input type="number" class="form-control" name="valor" id="valor" placeholder="Valor">
  	  </div>
	</div>
      
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-control">
                        <option value=""></option>
                      
                    </select>
                </div>
            </div>
      
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="fornecedor">Fornecedor</label>
                    <select name="fornecedor" id="fornecedor" class="form-control">
                        <option value=""> </option>
                        
                    </select>
                </div>
            </div>
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Atualizar</button>
		<a href="<?= base_url('produtos')?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>



