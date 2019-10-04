<?php
    $nomeSistema = "Cursos Ai!";
    $usuario = ['nome'=>'Gabriel'];
    $produtos=[
        ["nome"=>"Curso Fullstack", "preco"=>'R$1200.00', "duracao"=>"5 meses", "img"=>"o.img/android.png"],
        ["nome"=>"Curso Marketing", "preco"=>'R$1000.00', "duracao"=>"4 meses", "img"=>"o.img/android.png"]
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
        <div class='nav bg-dark text-white justify-countent-between p-4'>
                <ul class='nav text-white'>
                <?php foreach($categorias as $categoria) { ?>
                    <li class='nav-item'><a class='nav-link text white' href='#'><?php echo $categoria; ?></a></li>
                </ul>
                <?php } ?>
            </div>
    </header>
    <main>
        <section>
            <div class='row'>
                <div class='col-12'>
                    <h1>Carrinho de compras</h1>
                </div>
                <div class='col-12'>
                    <div class='row card'>
                        <div class='col-12'>
                            <h3>Você está comprando o <?php echo $_GET['nomeProduto']; ?></h3>
                        </div>
                        <div class='col-lg-6 col-md-6'>
                            <form class='d-flex flex-column p-3' method='post' action='sucesso.php'>
                                <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
                                <input type="text" name="cpf" placeholder="Digite seu cpf">
                                <input type="text" name="cartao" placeholder="Digite o número do seu cartão">
                                <input type="date" name="validadeCartao" placeholder="Digite a data de validade">
                                <input type="passworld" name="codigoCartao" placeholder="Digite o CV">
                                <button class= 'btn btn-success' type="submit">Finalizar compra</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>    
</body>
</html>