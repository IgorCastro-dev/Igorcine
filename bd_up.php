<?php
$dsn = "mysql:host=localhost;dbname=igorcine";
$usuario = "root";
$senha = "";
try {
    $conexao = new PDO($dsn,$usuario,$senha);
    $sql = "drop table if exists filmes ";
    if($conexao->exec($sql)) {
        echo "tabela de filmes apagada ";
    }
    $sql = "CREATE TABLE filmes(
            id int not null primary key auto_increment,
            titulo varchar(200),
            poster varchar(200),
            sinopse text,
            nota decimal(2,1)
        )";
    if($conexao->exec($sql)) {
        echo "erro ao criar tabela filmes ";
    }else {
        echo "tabela criada ";
    }

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) values (
            0,
            'Coringa',
            'https://www.themoviedb.org/t/p/original/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg',
            'Arthur Fleck trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais.',
            9.7
        )";
    if($conexao->exec($sql)) {
        echo "filmes inseridos com sucesso ";
    }else {
        echo "erro ao inserir filmes ";
    }
    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) values (
        0,
        'Harry Potter e a pedra Filosofal',
        'https://www.themoviedb.org/t/p/original/qnw9610ojLT0jU3lMSZOAFttt1e.jpg',
        'Harry Potter é um garoto órfão que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, Harry é impedido de ler a carta por seu tio, mas logo recebe a visita de Hagrid, o guarda-caça de Hogwarts, que chega para levá-lo até a escola. Harry adentra um mundo mágico que jamais imaginara, vivendo diversas aventuras com seus novos amigos, Rony Weasley e Hermione Granger.',
        10
    )";
if($conexao->exec($sql)) {
    echo "filmes inseridos com sucesso ";
}else {
    echo "erro ao inserir filmes ";
}
} catch (PDOException $erro) {
    echo "Erro:".$erro->getCode()." Menssagem:".$erro->getMessage();
}


?>