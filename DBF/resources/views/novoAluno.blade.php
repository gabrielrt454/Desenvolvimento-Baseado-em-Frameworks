<html>
<h2>Adicionar Aluno</h2>
<form method="POST" action="{{route('alunos.salvar')}}">
@csrf
<div>
    <label for="nome">Nome</label>
    <input type="text" name="nome" required>
</div>
<div>
    <label for="data_nascimento">Data de nascimento</label>
    <input type="date" name="data_nascimento" required>
</div>
<div>
    <label for="email">email</label>
    <input type="text" name="email" required>
</div>
<div>
    <label for="curso">Curso</label>
    <input type="text" name="cursso" required>
</div>
<button type="submit" class="btn btn-primary">Adicionar</button>
</form>
</html>