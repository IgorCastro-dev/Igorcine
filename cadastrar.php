<?php include "cabeçalho.php" ?>  
<body>
    <header>
        <div class="img-wrapper">
            <img src="imagens/pexels-pixabay-274937.jpg" alt="">
        </div>            
        <div class="titulo">
            <h1>Igorcine</h1>
            <p>Cadastro de filmes</p>
        </div>
        <div class="menu">
            <div class="galeria"><a href="index.php">Galeria</a></div>
            <div class="cadastro"><a class="active" href="cadastrar.php">Cadastro</a></div>
        </div>
    </header>
    <section id="procurar">
        <div class="todos"><a class="active" href="#todos">Todos</a></div>
        <div class="assistidos"><a href="#assistidos">Assistidos</a></div>
        <div class="favoritos"><a href="#favoritos">Favoritos</a></div>
    </section>
    <section class="cadastrar">
        <form action="">
            <div class="input-group">
                <label for="nome" class="field-label">Título do filme</label>
                <input type="text" class="field" id="nome">
                
            </div>
            <div class="input-group">
                <textarea name="sinopse" id="sinopse" class="field"></textarea>
                <label for="sinopse" class="field-label">sinopse</label>
            </div>
            <div class="input-group">
                <label for="nota" class="field-label" class="menor">nota</label>
                <input type="number" class="field" min="0" max="10" step="0.1" name="nota" id="nota">
            </div>
            <div class="input-group capa">
                <label for="capa">Capa: </label>
                <input type="file" name="capa" id="capa">
                <div class="box-capa"></div>
            </div>
            <div class="btn-cadastro">
                <button type="submit" class="btn btn-submit">Cancelar</button>
                <button type="submit" class="btn btn-submit">cadastrar</button>
            </div>
        </form>
    </section>
</body>
</html>