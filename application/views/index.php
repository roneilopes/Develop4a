<div id="main" class="container-fluid">

     <!-- CARROUSSEL -->
     
                <div id="slider" class="carousel slide" data-ride="carousel">
                    
                      <!-- INDICADORES -->
                      <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                      </ol>

                      <!-- CONTEUDO -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="<?=base_assets()?>img/imagem_01.jpg" alt="Melhore o desempenho da sua empresa">
                        </div>

                        <div class="item">
                          <img src="<?=base_assets()?>img/imagem_02.jpg" alt="Conecte sua equipe">
                        </div>
                      </div>

                      <!-- CONTROLES DO SLIDER :) -->
                      <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
        
                <!-- CARROUSSEL -->

                <!-- JUMBOTRON -->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <hr>

                            <div class="jumbotron">

                                <h1>Bem-vindo ao Projeto MVC!</h1>

                                <p>Gerencie sua empresa e melhore seu desempenho no mercado!</p>  

                                <p><a class="btn btn-warning btn-lg" href="<?=base_url('usuarios/add')?>" >Novo usuário</a></p>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- JUMBOTRON -->
</div>