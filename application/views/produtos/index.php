
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorias</h2>
						<div class="panel-group category-products" id="accordian">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url() ?>index.php/produtos/categorias/1">Livros</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url() ?>index.php/produtos/categorias/2">Xerox</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url() ?>index.php/produtos/categorias/3">Anotações</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url() ?>index.php/produtos/categorias/4">Trabalhos</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url() ?>index.php/produtos/categorias/5">Provas</a></h4>
								</div>
							</div>
						</div>
						<!--/category-products-->
						
					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<!--features_items-->
						<h2 class="title text-center">Itens em destaque</h2>
						
						<?php if (sizeof($produtos) > 0): ?>
							<?php foreach ($produtos as $produto): ?>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url() ?>public/images1/caderno.jpg" alt="" />
												<h2>R$ <?php echo $produto['valor'] ?></h2>
												<p><?php echo $produto['detalhes'] ?></p>
												<a href="<?php echo base_url() ?>index.php/produtos/<?php echo $produto['id'] ?>" class="btn btn-outline-warning mb-4"><i class=""></i>Detalhes</a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						<?php else: ?>
							<p>Não existem produtos cadastrados
						<?php endif; ?>
					</div>
					<!--features_items-->
				</div>
			</div>
	</section>
