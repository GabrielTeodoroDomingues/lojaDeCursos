<?php 
    $nomeSistema = "Cursos Ai!";
    $usuario = ['nome'=>'Gabriel'];
    $produtos=[
        ["nome"=>"Curso Fullstack", "preco"=>'R$1200.00', "duracao"=>"5 meses", "img"=>"o.img/android.png"],
        ["nome"=>"Curso Marketing", "preco"=>'R$1000.00', "duracao"=>"4 meses", "img"=>"o.img/android.png"]
    ];
    $categorias = ['Cursos', 'Palestras', 'Artigos'];
    function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
        $nomearquivo='produto.json';

        if(file_exists($nomearquivo)){
            //Abriendo e pegando informações do arquivo.
            $arquivo = file_get_contents($nomearquivo);
            //Transformar json em array.
            $produtos = json_decode($arquivo, true);
            //Adicionando um novo produto na array que estava dentro do arquivo.
            $produtos[] = ['nome' =>$nomeProduto, 'preco' =>$precoProduto, 'desc' =>$descProduto, 'imagem' =>$imgProduto];
            $json = json_encode($produtos);
            $deuCerto = file_put_contents($nomearquivo, $json);

            if($deuCerto){
                return "Produto cadastrado!!!";
            }else {
                return "Produto não cadastrado!!!";
            }


            var_dump($produtos);
        } else{
            $produtos = [];
            $produtos[] = ['nome' =>$nomeProduto, 'preco' =>$precoProduto, 'desc' =>$descProduto, 'imagem' =>$imgProduto];
            //Transformando array em json.
            $json = json_encode($produtos);
            //Salvando o json dentro de um arquivo.
            $deuCerto = file_put_contents($nomearquivo, $json);

            if($deuCerto){
                return "Produto cadastrado!!!";
            }else {
                return "Produto não cadastrado!!!";
            }
            }
        }

if($_POST){
    //Salvando arquivo.
    $nomeImg = $_FILES['imgProduto']['name'];
    $localTmp = $_FILES['imgProduto']['tmp_name'];
    $dataAtual = date('d-m-y');
    $caminhoSalvo = 'o.img/'.$dataAtual.$nomeImg;
    $deucerto = move_uploaded_file($localTmp, $caminhoSalvo);
    echo cadastrarProduto($_POST['nomeProduto'], $_POST['descProduto'], $caminhoSalvo, $_POST['precoProduto']);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro Produtos</title>
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
                    <li class='nav-item'><a class='nav-link text white' href='#'><?php echo $categoria; ?></a></li>
                </ul>
                <?php } ?>
            </div>
    </header>
    <main class='container'>
        <div class='row'>
            <div class='col-12'>
                <h1>Cadastro Produtos</h1>
            </div>
            <div class='col-12'>
                <form action'' method='post' enctype='multipart/form-data'>
                    <div class='form-group'>
                        <input type="text" class='form-control' name='nomeProduto' placeholder='Nome do produto'/>
                    </div>
                    <div class='form-group'>
                        <input type="text" class='form-control' name='descProduto' placeholder='Informação do produto'/>
                    </div>
                    <div class='form-group'>
                        <input type="file" class='form-control' name='imgProduto' placeholder='Imagem do produto'/>
                    </div>
                    <div class='form-group'>
                        <input type="number" class='form-control' name='precoProduto' placeholder='Preço do produto'/>
                    </div>
                    <button class='btn btn-success'>Cadastrar Produto </button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>