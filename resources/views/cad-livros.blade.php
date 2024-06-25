<?php
    if(isset($_POST['submit'])) {
        print_r($_POST['nome']);
        print_r($_POST['volume']);
        print_r($_POST['gênero']);
        print_r($_POST['descricao']);
        print_r($_POST['preco']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="display: flex; align-items: center; justify-content: center;">
    <div style="display: flex; flex-direction:column; width: 600px; height: 80vh; background-color: darkslateblue; margin-top: 100px; ">
        <form action='/cad-livros' style="display: flex; flex-direction:column;" method="POST">
            @csrf
            <label for="">Nome</label>
            <input type="text" placeholder="Nome do Anime" name="Nome">
            
            <label for="">Número</label>
            <input type="text" placeholder="N° do Volume" name="Numero">
            
            <label for="">Gênero</label>
            <input type="text" placeholder="Gênero" name="Genero">
            
            <label for="">Descricâo</label>
            <textarea id="" cols="30" rows="10" placeholder="Descricao" name="Desc"></textarea>
            
            <label for="">Preço</label>
            <input type="text" placeholder="Preço em R$" name="Preco">
        
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>

