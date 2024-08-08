<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LudoFashion</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<body>

    <header>
        <a href="index.php"><img src="../image/logo.png" alt="logo do site" width="60px"></a>
        <!-- campo de pesquisa -->
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="Buscar...">
            <button type="submit" id="btn-buscar"><img src="../image/search.png" alt=""  width="30px"></button>
        </form>
            
           
        <a href="login.php" class="icon-link">
            <img src="../image/person.png" alt="acessar a página de login" width="40px">
            Cadastro
        </a>

        <a href="ajuda.php" class="icon-link">
            <img src="../image/ajuda.png" alt="acessar a página de dúvidas" width="40px">
            Dúvidas
        </a>
              
    </header>
    
    <nav>
        <a href="catalogo.php">Catálogo</a>
        <a href="sobrenos.php">Sobre a Loja</a>
    </nav>
    
    <section id="banner">

        <div id="txt-banner">
            <p>PROMOÇÃO</p>
            <p>50%</p>
            <p>OFF</p>
            <p>Desconto em toda coleção de verão</p>

        </div>
    </section>

    <main>

        <section class="conteudo">
            <h1>PREÇOS QUE CABEM NO SEU BOLSO</h1>
            <P>Sua compra a um clique</P>
            <div class="card-container">

                <div class="card">

                    <div class="card-img">
                        <img src="../image/blusa.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Blusa Rosa</p>
                        <p>R$ 100,00</p>
                    </div>
                </div>

                <div class="card">

                    <div class="card-img">
                        <img src="../image/biquini.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Biquine</p>
                        <p>R$ 50,00</p>
                    </div>
                </div>

                <div class="card">

                    <div class="card-img">
                        <img src="../image/saia-blusa.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Conjunto saia e blusa</p>
                        <p>R$ 89,90</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="../image/blusa-fusion.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Blusa Fúcsia Manga Bufante</p>
                        <p>R$ 190,50</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="../image/base.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Base facial Cor4 35 ml</p>
                        <p>R$ 120,00</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="../image/kit.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Kit Rotina Anti Idade</p>
                        <p>R$ 450,00</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="../image/hidratante.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Kit Hidratante</p>
                        <p>R$ 110,00</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="../image/bolsa.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Bolsa Feminina de Couro Legítimo</p>
                        <p>R$ 299,80</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="../image/roupao.png" alt="">
                    </div>
                    <div class="card-content">
                        <p>Roupão De Banho Microfibra</p>
                        <p>R$ 65,50</p>
                    </div>
                </div>
            </div>
            
        </section>
        
    </main>

    <footer>
        <div class="footer-container">
            <div class="link-menu">
                <h2>LINK</h2>
                <ul>
                    <li><a href="../views/index.php">Home</a></li>
                    <li><a href="../views/perfil.php">Perfil</a></li>
                    <li><a href="../views/catalogo.php">Catálogo</a></li>
                    <li><a href="../views/ajuda.php">Dúvidas</a></li>
                    <li><a href="../views/sobrenos.php">Sobre</a></li>
                    <li><a href="../views/categorias.php">Categoria</a></li>
                    <li><a href="../views/lista-de-desejo.php">Lista de desejos</a></li>
                    <li><a href="../views/blusa.php">Blusa</a></li>
                </ul>
            </div>

            <div class="categoria">
                <h2>Categorias</h2>
                <ul>
                    <li><a href="">Casual</a></li>
                    <li><a href="">Esportivo</a></li>
                    <li><a href="">Lingeries</a></li>
                    <li><a href="">Social</a></li>
                    <li><a href="">Bolsas</a></li>
                    <li><a href="">Calcinhas</a></li>
                    <li><a href="">Maquiagem</a></li>
                    <li><a href="">Banho</a></li>
                    <li><a href="">Moda Praia</a></li>
                </ul>
            </div>

            <div class="suporte">
                <h2>Suporte e Atendimento</h2>
                <ul>
                    <li><a href="../views/ajuda.html">FAQ</a></li>
                    <li><a href="#">Canais de Atendimento</a></li>
                    <li><a href="#">Formas de Pagamento</a></li>
                    <li><a href="#">Prazo de entrega</a></li>
                    <li><a href="#">Promoções</a></li>
                </ul>
                
            </div>

            <div class="endereco">
                <h2>Endereço</h2>
                <!-- <address>
                    Rua São Pantaleão, 150, <br>Centro, São Luis - Ma
                </address> -->

                    <a href="#"><img src="../image/whatsapp.png" alt="whatsapp" class="icon-rodape">WhatsAPP</a>
                    <a href=""><img src="../image/instagram.png" alt="instagram" class="icon-rodape">Instagram</a>
                    <a href=""><img src="../image/facebook.png" alt="facebook" class="icon-rodape">Facebook</a>
                    <a href=""><img src="../image/tiktok.png" alt="tiktok" class="icon-rodape">Tiktok</a>

                    <a href=""><img src="../image/email.png" alt="email" class="icon-rodape">ludofashion@gmail.com</a>
                    <a href=""><img src="../image/local.png" alt="localização" class="icon-rodape">Nossa localização</a>

            </div>

        </div>
        <p class="rodape-direito">&copy; 2024 LudoFashion. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
