<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="body">
                    <div class="row">
                        <div class="col title">
                            <h1>Cadastrar produto</h1>
                        </div>
                    </div>
                    <?php echo form_open('produtos/cadastrar'); ?>
                        <label for="">Imagem</label>
                        <div class="form-group mt-3">
                            <div class="upload-btn-wrapper">
                                <button class="btn-upload">escolher o arquivo</button>
                                <input type="file" name="imagem" id="imagem" accept="image/png, image/jpeg" required />
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="valor">Valor</label>
                            <input type="text" class="form-control" name="valor" id="valor" placeholder="Valor">
                        </div>
                        <div class="form-group mt-3">
                            <label for="detalhes">Detalhes</label>
                            <input type="text" class="form-control" name="detalhes" id="detalhes"
                                placeholder="Detalhes">
                        </div>
                        <div class="form-group mt-3">
                            <label for="estado">Estado do produto</label>
                            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="1">Selecionar</option>
                                <option value="2">Livros</option>
                                <option value="3">Xerox</option>
                                <option value="4">Anotações</option>
                                <option value="5">Trabalhos</option>
                                <option value="6">Provas</option>
                            </select>
                        </div>
                        <button type="submit" class="btnGeral btn float-right px-5 py-1">Salvar</button>
                    </form>
				</div>
				<?php echo validation_errors(); ?>
            </div>
        </div>
    </div>
