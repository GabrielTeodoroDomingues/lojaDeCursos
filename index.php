
<?php
    $nomeSistema = "Cursos Ai!";
    $usuario = ['nome'=>'Gabriel'];
    $produtos=[
        ["nome"=>"Curso Fullstack", "preco"=>'R$1200.00', "duracao"=>"5 meses"],
        ["nome"=>"Curso Marketing", "preco"=>'R$1000.00', "duracao"=>"4 meses"]
    ];
    $categorias = ['Cursos', 'Palestras', 'Artigos']
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='o.css/style.css'>
    <title><?php echo $nomeSistema; ?></title>
</head>
<body>
    <header>
        <div class='navbar'>
            <div id = 'logo'>
                <h1 id='logo'>
                    <?php echo $nomeSistema; ?>
                </h1>
            </div>
            <nav>
                <ul class='nav'>
                <?php if(isset($usuario) && $usuario != '') {?>
                    <li class='nav-item'><a class='nav-link' href='#'>Curso</a></li>

                    <li class='nav-item'><a class='nav-link' href='#'>Olá <?php echo $usuario['nome']; ?></a></li>
                <?php }else { ?>
                    <li class='nav-item'><a class='nav-link' href='#'>Login</a></li>

                    <li class='nav-item'><a class='nav-link' href='#'>Cadastro</a></li>
                <?php } ?>
                </ul>
            </nav>
        </div>
        <div class='navbar bg-dark text-white'>
                <ul class='nav'>
                <?php foreach($categorias as $categoria) { ?>
                    <li class='nav-item'><a href'#' class='nav-link text white'><?php echo $categoria; ?></a></li>
                </ul>
                <?php } ?>
            </div>
    </header>
    <main>
        <div class='countainer mt-4'>
            <div class='row justify-content-around'>
            <?php if(isset($produtos) && $produtos != []){ 
                foreach($produtos as $produto){
                ?>

                <div class='col-lg-3 card text-center'>
                    <h5><?php echo $produto['nome']; ?></h5>
                    <img src='o.img/android.png' class='card-img-top'>
                    <div class='card-body'>
                        <p><?php echo $produto['preco']; ?></p>
                        <a href='#' class='btn btn-primary'>Comprar</a>
                    </div>
                </div>
                <?php }  ?>
            <?php } else { ?>
                <h1>Não há produtos cadastrados nesta sessão!</h1>
            <?php } ?>
            </div>
        </div>
    </main>    
</body>
</html>