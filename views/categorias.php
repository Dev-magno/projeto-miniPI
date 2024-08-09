<?php require_once './header.php' ?>
        <section class="categoria">
          <h1>Gerenciar Categorias</h1>

        <div class="pag-categoria">
            <div class="item">
            <h2>Adicionar Categoria</h2>
                <form class="intem-input" action="categorias.php" method="post">
                    <input type="hidden" name="action" value="insert">
                    <input type="text" name="nome" placeholder="Nome da Categoria" required>
                    <button type="submit">Adicionar</button>
                </form>
            </div>

          
            <div class="item">
            <h2>Atualizar Categoria</h2>
                <form class="intem-input" action="categorias.php" method="post">
                    <input type="hidden" name="action" value="update">
                    <input type="number" name="id" placeholder="ID da Categoria" required>
                    <input type="text" name="nome" placeholder="Novo Nome da Categoria" required>
                    <button type="submit">Atualizar</button>
                </form>
            </div>
           
            <div class="item">
            <h2>Deletar Categoria</h2>
                <form class="intem-input" action="categorias.php" method="post">
                    <input type="hidden" name="action" value="delete">
                    <input type="number" name="id" placeholder="ID da Categoria" required>
                    <button type="submit">Deletar</button>
                </form>
            </div>

            <div class="item">
            <h2>Listar Categoria</h2>
                <form class="intem-input" action="categorias.php" method="post">
                    <input type="hidden" name="action" value="delete">
                    <input type="number" name="id" placeholder="ID da Categoria" required>
                    <button type="submit">Listar</button>
                </form>
            </div>
            
        </div>
        </section>          
    <?php require_once './footer.php'?>