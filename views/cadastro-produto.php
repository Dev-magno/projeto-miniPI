<?php require_once './header.php' ?>

        <section id="cd-produto">
            <h1>Cadastro de Produto</h1>
            <!-- <p>Detalhes do produto</p> -->
            <div class="desc-produto">
                <div id="div-arquivo">
                    <div class="quadro" id="quadro">
                        <img id="imagemExibida" src="" alt="Sua Imagem" style="display: none;">
                        <label for="imagemInput" class="custom-file-upload">Adicionar Imagem</label>
                        <input type="file" id="imagemInput" accept="image/*">
                    </div>
                </div>
                <div id="desc-itens">
                    <form action="adicionar_vestido.php" method="POST" enctype="multipart/form-data">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="nome do produto">

                        <label for="cor">Cor</label>
                        <input type="text" name="cor" id="cor" placeholder="cor">

                        <label for="tamanho">Tamanho</label>
                        <input type="text" name="tamanho" id="tamanho" placeholder="tamanho">

                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" placeholder="descrição do produto"> 

                        <label for="caracteristica">Característica</label>
                        <textarea name="caracteristica" id="caracteristica" placeholder="Característica, marca, tecido" maxlength="" rows="5" cols="50"></textarea>
                        <input type="submit" id="submit" value="Adicionar">
                        <input type="submit" id="submit-input" value="Listar">
                    </form> 
                </div>
            </div>
        </section>   
   <?php require_once './footer.php'?>