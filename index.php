<?php include "cabeçalho.php" ?>
<body>
    <header>
        <div class="img-wrapper">
            <img src="imagens/pexels-pixabay-274937.jpg" alt="">
        </div>            
        <div class="titulo">
            <h1>Igorcine</h1>
        </div>
        <div class="menu">
            <div class="galeria"><a class="active" href="index.php">Galeria</a></div>
            <div class="cadastro"><a href="cadastrar.php">Cadastro</a></div>
        </div>
    </header>
    <section id="procurar">
        <div class="todos"><a class="active" href="#todos">Todos</a></div>
        <div class="assistidos"><a href="#assistidos">Assistidos</a></div>
        <div class="favoritos"><a href="#favoritos">Favoritos</a></div>
    </section>
    <section class="cards">
        <div class="card">
            <div class="img-wrapper">
                <img src="https://www.themoviedb.org/t/p/original/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg" alt="">
                <i class="far fa-heart"></i>
            </div>
            <div class="sinopse">
                <div class="nota">
                    <i class="fas fa-star"></i>
                    <div class="numero-nota">9.6</div>
                </div>
                <div class="nome">Coringa</div>
            </div>
        </div>
        <div class="card">
            <div class="img-wrapper">
                <img src="https://www.themoviedb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg" alt="">
                <i class="far fa-heart"></i>
            </div>
            <div class="sinopse">
                <div class="nota">
                    <i class="fas fa-star"></i>
                    <div class="numero-nota">9.6</div>
                </div>
                <div class="nome">Avengers</div>
            </div>
        </div>
        <div class="card">
            <div class="img-wrapper">
                <img src="https://www.themoviedb.org/t/p/original/qnw9610ojLT0jU3lMSZOAFttt1e.jpg" alt="">
                <i class="far fa-heart"></i>
            </div>
            <div class="sinopse">
                <div class="nota">
                    <i class="fas fa-star"></i>
                    <div class="numero-nota">9.6</div>
                </div>
                <div class="nome">Harry Potter</div>
            </div>
        </div>
        <div class="card">
            <div class="img-wrapper">
                <img src="https://www.themoviedb.org/t/p/original/igw938inb6Fy0YVcwIyxQ7Lu5FO.jpg" alt="">
                <i class="far fa-heart"></i>
            </div>
            <div class="sinopse">
                <div class="nota">
                    <i class="fas fa-star"></i>
                    <div class="numero-nota">9.6</div>
                </div>
                <div class="nome">Parasita</div>
            </div>
        </div>
    </section>
</body>
</html>