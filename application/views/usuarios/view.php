<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="body">
                    <div class="row">
                        <div class="col title">
                            <h1>Perfil</h1>
                        </div>
                    </div>
                    <form action="">
                        <div class="form-group mt-3">
                            <label for="valor">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo $usuario['nome'] ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label for="valor">Telefone</label>
                            <input class="form-control" type="telefone" placeholder="Telefone" value="<?php echo $usuario['telefone'] ?>"/>
                        </div>
                        <div class="form-group mt-3">
                            <label for="detalhes">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?php echo $usuario['email'] ?>">
                        </div>
                        <button type="submit" class="btnGeral btn float-right px-5 py-1">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
