<?php require_once './header.php' ?>

        <section id="perfil">
            <div id="pefil-menu">

                <div>
                    <img src="../image/conta-person.png" alt="icon pessoa">
                    <a href="../views/perfil.php">Minha Conta</a>
                </div>
                
                <div>
                    <img src="../image/coracao.png" alt="icon coraçao">
                    <a href="../views/lista-de-desejo.php">Lista de Desejos</a>
                </div>
                

                <div>
                    <img src="../image/menu.png" alt="icon menu">
                    <a href="../views/categorias.php">Categorias</a>
                </div>

                <div>
                    <img src="../image/caixa-de-entrega.png" alt="icon menu">
                    <a href="cadastro-produto.php">Produtos</a>
                </div>
                
            </div>

            <div class="form-perfil">
                <div>
                    <h1>Meu Perfil</h1>
                    <p>Gerenciar e proteger sua conta</p>
                </div>
                <div class="div-usuario">

                    <form action="">
                        <div class="label-itens">
                            <label for="usuario">Usuário:</label>
                            <input type="text" name="usuario" id="input-item">
                        </div>

                        <div class="label-itens">
                            <label for="">Nome:</label>
                            <input type="text" name="nome" id="input-item">
                        </div>

                        <div class="label-itens">
                            <label for="">E-mail</label>
                            <input type="email" name="email" id="input-item">
                            <a href="">Editar</a>
                        </div>

                        <div class="label-itens">
                            <label for="">Telefone</label>
                            <input type="tel" name="telefone" id="input-item">
                            <a href="">Editar</a>
                        </div>

                        <div class="label-itens">
                            <label for="">Sexo:</label>
                            <label for="">Masculino</label>
                            <input type="radio" name="masc" id="masc">
                            <label for="">Feminino</label>
                            <input type="radio" name="fem" id="fem">
                            <label for="">Outro</label>
                            <input type="radio" name="outro" id="outro">
                        </div>

                        <div class="label-itens">
                            <label for="">CPF</label>
                            <input type="text" name="cpf" id="input-item">
                            <a href="">Editar</a>
                        </div>

                        <div class="label-itens">
                            <label for="">Data de Nascimento</label>
                            <input type="date" name="nasc" id="input-item">
                        </div>
                    </form>

                    <button id="btn-salvar">Salvar</button>

                </div> 
            </div>          
        </section>          
    <?php require_once './footer.php'?>