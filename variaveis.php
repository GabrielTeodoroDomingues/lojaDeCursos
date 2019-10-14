<?php
    $nomeDeSistema = [];
    $nomearquivo = 'produto.json';
    $produtos = json_decode(file_get_contents($nomearquivo), true);
    //$produtos=[
        //["nome"=>"Curso Fullstack", "preco"=>'R$1200.00', "duracao"=>"5 meses", "img"=>"o.img/android.png"],
        //["nome"=>"Curso Marketing", "preco"=>'R$1000.00', "duracao"=>"4 meses", "img"=>"o.img/android.png"]
    //];
    $categorias = ['Cursos', 'Palestras', 'Artigos'];
    ?>