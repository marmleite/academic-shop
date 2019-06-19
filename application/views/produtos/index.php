
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorias</h2>
						<div class="panel-group category-products" id="accordian">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Livros</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Xerox</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Anotações</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Trabalhos</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Provas</a></h4>
								</div>
							</div>
						</div>
						<!--/category-products-->
						<div class="price-range">
							<!--price-range-->
							<h2>Preço</h2>
							<div class="well text-center">
								<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
									data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
								<b class="pull-left">R$ 0</b> <b class="pull-right">R$ 600</b>
							</div>
						</div>
						<!--/price-range-->
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
												<h2>R$ <?php echo $produto['preco'] ?></h2>
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
