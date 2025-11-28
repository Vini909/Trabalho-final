<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete Git</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../JS/menu.js"></script>
    
</head>
<body>
    <header>
        <nav id="navbar">
            <img class="logo" src="../imgs/ctrl.png" alt="Imagem Principal da Loja">
            <ul id="nav_list">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="cadastro.php" class="nav-link">Login</a>
                </li>
            </ul>
        </nav> 
        <button class="mobile-btn">
            <i class="fa-solid fa-bars"></i>
        </button> 
        <div class="mobile-menu">
            <ul class="mobile-nav-list">
                <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#Produtos">Produtos</a></li>
            </ul>
        </div>      
    </header>

    <main class="content">
        <section class="home" id="home">
            <div class="cta">
                <h1 class="title">
                    Um mundo novo ao seu <span>controle.</span>
                </h1>
                <p class="descricao">
                    Venha experimentar uma realidade nova onde o limite e a sua imaginação.
                </p>
                
            </div>
            <div class="banner">
                <img src="../imgs/ps5.png" alt="Imagem Principal da Loja">
            </div>
        </section>
    </main>
    <section class="Produtos" id="Produtos">
        <h3 class="section-subtitle">Produtos</h3>
        <div class="area-cards">
            
            
            
            <div class="card">
                <div class="card-basket">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <img src="../imgs/ps3.png" alt="Imagem do Produto" class="card-imagem">
                <h3 class="card-title">Playstation 3</h3>
                <span class="card-descricao">
                    Um console que traz frnquias como The Last of Us, Infamous e God of War.
                </span>
                <div class="card-price">
                    <h4>R$900,00</h4>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-basket">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <img src="../imgs/3ds.png" alt="Imagem do Produto" class="card-imagem">
                <h3 class="card-title">Nintendo 3ds</h3>
                <span class="card-descricao">
                    Um console que traz classicos como pokemon, Maro 3d World e Super Smash Bros.
                </span>
                <div class="card-price">
                    <h4>R$800,00</h4>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-basket">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <img src="../imgs/ps2.png" alt="Imagem do Produto" class="card-imagem">
                <h3 class="card-title">Playsation 2</h3>
                <span class="card-descricao">
                    Um console que marcou gerações, trazendo nostalgia.
                </span>
                <div class="card-price">
                    <h4>R$500,00</h4>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-basket">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <img src="../imgs/xbox.png" alt="Imagem do Produto" class="card-imagem">
                <h3 class="card-title">Xbox Series S</h3>
                <span class="card-descricao">
                    Um console mais atual juntamente de um grande catalogo de jogos.
                </span>
                <div class="card-price">
                    <h4>R$2000,00</h4>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-basket">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <img src="../imgs/ps4.png" alt="Imagem do Produto" class="card-imagem">
                <h3 class="card-title">Playstation 4</h3>
                <span class="card-descricao">
                    Um console mais atual que traz remakes de classicos e novos games como red dead 2
                </span>
                <div class="card-price">
                    <h4>R$1200,00</h4>
                    
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-itens">
            <span class="copyright">
                &copy Elionai2025
            </span>
            <div class="social-media-buttons">
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>