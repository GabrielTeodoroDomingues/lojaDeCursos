
<?php
    include_once('config/variaveis.php');

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $nomeSistema; ?></title>
</head>
<body>
   <?php include_once('header.php');?>
    <main>
        <div class='countainer mt-4'>
            <div class='row justify-content-around'>
            <?php if(isset($produtos) && $produtos != []){ 
                foreach($produtos as $produto){
                ?>

                <div class='col-lg-3 card text-center'>
                    <h5><?php echo $produto['nome']; ?></h5>
                    <img src='<?php echo $produto['imagem']?>' class='card-img-top'>
                    <div class='card-body'>
                        <p><?php echo $produto['preco']; ?></p>
                        <a href='carrinho.php?nomeProduto=<?php echo $produto['nome']?>'; class='btn btn-primary'>Comprar</a>
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