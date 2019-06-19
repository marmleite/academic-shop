<section>
		<div class="container">
			<div class="row">
				<div class="padding-right detalhes">
					<div class="features_items">
						<!--features_items-->
						<h2 class="title text-center">Detalhes do produto</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url() ?>public/images1/caderno.jpg" alt="" />
									</div>
								</div>
							</div>
                        </div>
                        <div class="col-sm-4 productinfo text-center">
                            <h5><?php echo $produto['detalhes'] ?></h5>
                            <p><?php echo $produto['valor'] ?></p>
                            <p><?php echo $produto['estado'] ?></p>
                            <p><?php echo $produto['descricao'] ?></p>
                            <p><?php echo $produto['email'] ?></p>
                            <p><?php echo $produto['telefone'] ?></p>
                        </div>
					</div>
					<!--features_items-->
				</div>
			</div>
	</section>
