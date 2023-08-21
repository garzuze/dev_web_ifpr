<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                echo "Nome: $name <br>";
            } else {
                echo "É necessário preencher o campo de nome!";
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                echo "Email: $email <br>";
            } else {
                echo "É necessário preencher o campo de email!";
            }
            if (isset($_POST['aval_geral'])) {
                $aval_geral = $_POST['aval_geral'];
                echo "Avaliação geral: $aval_geral <br>";
            } else {
                echo "É necessário preencher o campo de avaliação geral!";
            }
            if (isset($_POST['aval_filiais'])) {
                $aval_filiais = $_POST['aval_filiais'];
                echo "Avaliação das filiais: $aval_filiais <br>";
            } else {
                echo "É necessário preencher o campo de avaliação das filiais!";
            }
            if (isset($_POST['aval_problema'])) {
                $aval_problema = $_POST['aval_problema'];
                echo "Avaliação de problemas: <br>";
                $problemas = ['Anúncios e/ou ofertas', 'Preços', 'Entrega e/ou frete', 'Produtos', 'Atendimento e/ou suporte'];
                foreach($aval_problema as &$aval){
                    foreach($problemas as $problema) {
                        echo "$problema: $aval <br>";
                    }
                }
            }
            if (isset($_POST['comentario'])) {
                $comentario = $_POST['comentario'];
                echo "<br>  Comentário: $comentario";
            } else {
                echo "É necessário preencher o campo de comentário!";
            }
        } else {
            echo "É necessário preencher o formulário antes!!";
        }
        ?>
    </div>
</body>

</html>