<?php require_once './header.php' ?>
        <section id="section-cadastro">
            <div id="div-form">
                <h1>Cadastrar</h1>
                <form action="processar_cadastro.php" class="action" method="POST">
                    <div class="div-inputs">
                        <div  class="dados">
                            <div class="campo">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" placeholder="seu email" required maxlength="30">
                            </div>

                            <div class="campo">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="iemail" placeholder="sua senha" required minlength="8" maxlength="20">
                            </div>

                            <div class="campo">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" placeholder="sua CPF" required minlength="11" maxlength="11">
                            </div>
                        </div>

                        <div class="dados">
                            <div class="campo">
                                <label for="nomeusuario">Nome de Usuário</label>
                                <input type="text" name="nomeusuario" id="nomeusuario" placeholder="seu nome de Usuário" required maxlength="20">
                            </div>

                            <div class="campo">
                                <label for="telefone">Telefone</label>
                                <input type="tel" name="telefone" id="itelefone" placeholder="seu telefone" required minlength="13" maxlength="13">
                            </div>

                            <div class="campo">
                                <label for="datanasc">Data de Nascimento</label>
                                <input type="date" name="datanasc" id="datanasc" placeholder="sua data de nascimento" required minlength="8" maxlength="8">
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="Entrar">

                    <div class="login-cadastro">
                        <a href=""><img src="../image/google.png" alt="logo google de cadastro" width="30px"></a>

                        <a href="">Salvar</a>
                        <a href="login.php">Já tem conta?</a>
                    </div>
                </form>

            </div>
        </section>        
                 
    <?php require_once './footer.php'?>