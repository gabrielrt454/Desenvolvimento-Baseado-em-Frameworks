<html>
<body>
<div>
    <h1>Detalhes do Aluno</h1>
    <h2>Adicionar Aluno</h2>
    <form method="POST" action="{{ route('alunos.atualizar') }}">
        @csrf
        <div>
            <label for="nome">ID:</label>
            <input type="number" name="id" value="{{$aluno->id}}" readonly required>
        </div>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{$aluno->nome}}" required>
        </div>
        <div>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" value="{{$aluno->data_nascimento}}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{$aluno->email}}" required>
        </div>
        <div>
            <label for="curso">Curso:</label>
            <input type="text" name="curso_id" value="{{$aluno->curso}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
</body>
</html>
