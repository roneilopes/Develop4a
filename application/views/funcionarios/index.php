 <div id="main" class="container-fluid" style="margin-top: 50px">
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Funcionários</h2>
		</div>
            
                <!-- pesquisa -->
		<div class="col-sm-6">
			<div class="input-group h2">
				<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar funcionarios">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</div>
                <!-- pesquisa -->
                
		<div class="col-sm-3">
			<a href="<?= base_url('funcionarios/add')?>" class="btn btn-primary pull-right h2">Novo Funcionario</a>
		</div>
	</div> <!-- /#top -->


 	<hr />
 	<div id="list" class="row">

	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
                                        <th>Entrada</th>
					<th>Telefone</th>
                                        <th>Cargo</th>
					<th>Endereço</th>
               
                                        <th class="actions">Ações</th>
                                        
					
				</tr>
			</thead>
			<tbody>
				 <?php
                                        $i=0;
                                        while ($i <= $valores[$i]['id']){
                                            try {
                                                echo "<tr><td>{$valores[$i]['id']}</td>";
                                                echo "<td>{$valores[$i]['nome']}</td>";
                                                echo "<td>{$valores[$i]['entrada']}</td>";
                                                echo "<td>{$valores[$i]['telefone']}</td>";
                                                echo "<td>{$dadosCargo[$i]['cargo_id']}</td>";
                                                echo "<td>{$dadosEnd[$i]['endereco_id']}</td>"
                                                        . "<td class='actions'>
                                                        <a class='btn btn-warning btn-xs' href=". base_url('funcionarios/edit').">Editar</a>
                                                        <a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal'>Excluir</a></td>"
                                                        . "</tr>";
                                                $i++;
                                            } catch (Exception $ex) {
                                                return base_url('funcionarios');
                                            }
                                        }
                                        ?>
				
			</tbody>
		</table>
	</div>

	</div> <!-- /#list -->

	<div id="bottom" class="row">
	