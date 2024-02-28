<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listar aluns</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <TH>NOME</TH>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
            <tr>
                <td>{{$aluno->id}}</td>
                <td>{{$aluno->nome}}</td>

            @endforeach
            </tr>
        </tbody>
    </table>
</body>
</html>