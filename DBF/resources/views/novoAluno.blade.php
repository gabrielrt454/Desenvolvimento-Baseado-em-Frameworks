
<!-- Primeiro a decorar -->
<html>
<h2>Adicionar Aluno</h2>
<!-- daqui -->
<form method="POST" action="{{route('alunos.salvar')}}"> <!-- //importante para prova -->
@csrf <!-- token de segurança e perde ponto se não colocar -->

<div>
    
    <input name="nome" ><!-- o name vem do controle após o igual ou seja 
desta parte $request->data_nascimento
-->
    <!-- só precisa disso pra prova -->
</div>

<!-- Até aqui é o mais importante -->   
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