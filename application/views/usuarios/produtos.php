<div class="row">
            <div class="col-12">
                <div class="body">
                    <div class="row">
                        <div class="col title">
                            <h1>Seus anúncios</h1>
                        </div>
                    </div>
                    <?php if (sizeof($produtos) > 0): ?>
						<?php foreach ($produtos as $produto): ?>
							<div class="row">
								<div class="col-3">
									<div class="produto shadow">
										<img src="img/caderno.jpg" alt="">
										<p class="valor"><?php echo $produto['valor']; ?></p>
										<p class="detalhes"><?php echo $produto['detalhes']; ?></p>
										<button class="btnGeral">Editar</button>
										<button class="btnGeral">Deletar</button>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
