
<?php
    $nomeSistema = "Cursos Ai!";
    $usuario = ['nome'=>'Gabriel'];
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
    <header class='navbar'>
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
    </header>
    <main>
        <div class='countainer mt-4'>
            <div class='row justify-content-around'>
                
                <div class='col-lg-3 card text-center'>
                    <h5>Curso Android</h5>
                    <img src='o.img/android.png' class='card-img-top'
                    <div class='card-body'>
                        <p>Custo: R$100,00</p>
                        <a href='#' class='btn btn-primary'>Comprar</a>
                    </div>
                    
                    <div class='col-lg-3 card text-center'>
                    <h5>Curso Android</h5>
                    <img src='o.img/android.png' class='card-img-top'
                    <div class='card-body'>
                        <p>Custo: R$100,00</p>
                        <a href='#' class='btn btn-primary'>Comprar</a>
                    </div>
                    
                    <div class='col-lg-3 card text-center'>
                    <h5>Curso Android</h5>
                    <img src='o.img/android.png' class='card-img-top'
                    <div class='card-body'>
                        <p>Custo: R$100,00</p>
                        <a href='#' class='btn btn-primary'>Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    ?>
</body>
</html>