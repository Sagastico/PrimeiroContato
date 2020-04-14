<?php
include ('conecta.php');
$id= isset($_POST['id']) ? $_POST['id'] : '';;
$nome= isset($_POST['nome']) ? $_POST['nome'] : '';
$idade= isset($_POST['idade']) ? $_POST['idade'] : '';
$cpf= isset($_POST['cpf']) ? $_POST['cpf'] : '';
$pai= isset($_POST['pai']) ? $_POST['pai'] : '';
$mae= isset($_POST['mae']) ? $_POST['mae'] : '';
$curso= isset($_POST['curso']) ? $_POST['curso'] : '';

$insere="INSERT INTO alunos(id, nome, idade, cpf, pai, mae, curso) VALUES('$id', '$nome', '$idade', '$cpf', '$pai', '$mae', '$curso')";
$inseree=mysqli_query($mysqli, $insere);
if ($inseree>0)
{
echo "<script>
alert('Dados inseridos com sucesso!');
</script>";
}
else
{
echo 'Erro';
}


?>