<?php include "cabeçalho.php" ?>
<?php
$dsn = "mysql:host=localhost;dbname=igorcine";
$usuario = "root";
$senha = "";
try {
    $conexao = new PDO($dsn,$usuario,$senha);
    $sql = "SELECT * FROM filmes";
    $stmt = $conexao->query($sql);
    $filmes = $stmt->fetchAll();
} catch (PDOException $erro) {
   echo 'Erro:'.$erro->getCode().' Mensagem:'.$erro->getMessage();
}
// $filme1 = [
//     "titulo"=>"Coringa",
//     "nota"=>8.6,
//     "sinopse"=>"Arthur Fleck trabalha como palhaço para uma agência 
//     de talentos e, toda semana, precisa comparecer a uma 
//     agente social, devido aos seus conhecidos problemas
//     mentais. Após ser demitido, Fleck reage mal à gozação
//     de três homens em pleno metrô e os mata. Os 
//     assassinatos iniciam um movimento popular contra 
//     a elite de Gotham City, da qual Thomas Wayne é seu 
//     maior representante",
//     "poster"=>"https://www.themoviedb.org/t/p/original/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg"
// ];
// $filme2 = [
//     "titulo"=>"Avengers: Endgame",
//     "nota"=>8.6,
//     "sinopse"=>"Após os eventos devastadores de 'Vingadores: Guerra 
//     Infinita', o universo está em ruínas devido aos esforços
//      do Titã Louco, Thanos. Com a ajuda de aliados
//       remanescentes, os Vingadores devem se reunir mais 
//       uma vez a fim de desfazer as ações de Thanos e 
//       restaurar a ordem no universo de uma vez por todas,
//        não importando as consequências.",
//     "poster"=>"https://www.themoviedb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
// ];
// $filme3 = [
//     "titulo"=>"Harry Potter e a pedra Filosofal",
//     "nota"=>8.6,
//     "sinopse"=>"Harry Potter é um garoto órfão que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, Harry é impedido de ler a carta por seu tio, mas logo recebe a visita de Hagrid, o guarda-caça de Hogwarts, que chega para levá-lo até a escola. Harry adentra um mundo mágico que jamais imaginara, vivendo diversas aventuras com seus novos amigos, Rony Weasley e Hermione Granger.",
//     "poster"=>"https://www.themoviedb.org/t/p/original/qnw9610ojLT0jU3lMSZOAFttt1e.jpg"
// ];
// $filme4 = [
//     "titulo"=>"Parasita",
//     "nota"=>8.6,
//     "sinopse"=>"Toda a família de Ki-taek está desempregada, vivendo num porão sujo e apertado. Uma obra do acaso faz com que o filho adolescente da família comece a dar aulas de inglês à garota de uma família rica. Fascinados com a vida luxuosa destas pessoas, pai, mãe, filho e filha bolam um plano para se infiltrarem também na família burguesa, um a um. No entanto, os segredos e mentiras necessários à ascensão social custarão caro a todos.",
//     "poster"=>"https://www.themoviedb.org/t/p/original/igw938inb6Fy0YVcwIyxQ7Lu5FO.jpg"
// ];
?>
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
<!-- -------------------cards----------------------------------------------- -->
    <section class="cards">
    <?php foreach($filmes as $filme): ?>
        <div class="card">
            <div class="img-wrapper">
                <img src="<?php echo $filme["poster"]?>" alt="">
                <i class="far fa-heart"></i>
            </div>
            <div class="sinopse">
                <div class="nota">
                    <i class="fas fa-star"></i>
                    <div class="numero-nota"><?php echo $filme['nota']?></div>
                </div>
                <div class="nome"><? echo $filme["titulo"]?></div>
                <div class="descricao">
                    <p><?php echo $filme["sinopse"]?></p>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </section>
</body>
</html>