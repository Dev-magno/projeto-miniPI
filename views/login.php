<?php require_once './header.php' ?>

        <section id="login">
            <div id="formulario">
                <h1>Login</h1>

                <form action="">
                    <div class="campo">
                        <label for="ilogin">E-mail</label>
                        <input type="email" name="login" id="ilogin" placeholder="seu email" required maxlength="30">
                    </div>

                    <div class="campo">
                        <label for="isenha">Senha</label>
                        <input type="password" name="senha" id="isenha" placeholder="sua senha" required minlength="8" maxlength="20">
                    </div>
                    <button id="entrar">Entrar</button>

                    <div class="login-cadastro">
                        <a href=""><img src="../image/google.png" alt="logo google de cadastro" width="30px"></a>

                        <a href="cadastro.php">Cadastrar</a>
                        <a href="ajuda.php">Precisa de Ajuda?</a>
                    </div>
                </form>

            </div>
        </section>          
    <?php require_once './footer.php'?>