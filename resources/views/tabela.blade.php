<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: black;
        }
        
        tr {
            display: flex;
            flex-direction: row;
        }
        
        td {
            width: 100px;
            display: flex;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body style="display: flex; flex-direction:column; justify-content:center; align-items:center">
    <h2 style="color:white">Livros</h2>
    <div style="background-color: aqua">
        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Volume</td>
                    <td>Genero</td>
                    <td>Descricao</td>
                    <td>Preco</td>
                </tr>
            </thead>
            
        </table>
        
        
        
        
        
        
        <table id="livros">
            <tbody>
                @foreach ($books as $book)
                
                    <tr>
                        <td>{{ $book->nome}}</td>
                        <td>{{ $book->volume}}</td>
                        <td>{{ $book->gênero}}</td>
                        <td>{{ $book->descricao}}</td>
                        <td>{{ $book->preco}}</td>
                        <td><a href="">Edit</a></td>
                        <td><a href="">Delete</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>