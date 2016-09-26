<?php
	require 'init.php';
	//pega o ID da URL
	$PDO = db_connect();
	$aux = $_GET["id"];
	$aux2 = $_GET["idSupremo"];
	$sql = "SELECT idAluno, nomeAluno, matricula, frequencia FROM Aluno WHERE idAluno = :idAluno ORDER BY nomeAluno ASC";
	$stmt = $PDO->prepare($sql);
	$stmt->execute(array(':idAluno' => $aux));
	$Aluno = $stmt->fetch(PDO::FETCH_ASSOC);
	 
	 // SQL para selecionar os registros
    
	//$sql2 = "SELECT idTurma, nomeTurma FROM Turma WHERE idTurma = :idTurma ORDER BY nomeTurma ASC";
    // conta o total de registros
   	//$stmt_count = $PDO->prepare($sql_count);
    //$stmt_count->execute();
    //$total = $stmt_count->fetchColumn();
    // seleciona os registros
   
	//$stmt2 = $PDO->prepare($sql2);
	
 //}
 // busca os dados do usuário a ser editado
 //$PDO = db_connect();
 //$sql = "SELECT idAluno,nomeAluno,matricula,frequencia FROM Aluno WHERE idTurmaAluno = :idTurma";
 //$stmt = $PDO->prepare($sql);
 //$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 //$stmt->execute();
 
 ?>
 <!DOCTYPE html>
  <html>
   <form method ="post" name="formCadastro" action ="editAluno.php?idTurmaAluno=<?php $Aluno['idTurmaAluno']?>" enctype="multipart/form-data">
   <input type="hidden" value="editAluno.php?id=<?php $aux2?>;">
        <h2>Alterando informações do Aluno</h2>
            <table width="100%">
                    <th width="18%">Nome do Aluno</th>
                    <td width="82%"><input type="text" name="txtNome" value="<?php echo $Aluno['nomeAluno']?>"></td>
                 </tr>
                <tr>
                    <th>Matrícula</th>
                    <td><input type="text" id="matricula" name="txtMatricula" value="<?php echo $Aluno['matricula']?>"></td>
                </tr>
                 <tr>
                    <th>Frequência</th>
                    <td><input type="number" id="frequencia" name="txtFrequencia" value="<?php echo $Aluno['frequencia']?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" id="IdAluno" name="txtIdAluno" value="<?php echo $Aluno['idAluno']?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnEnviar" value="Salvar"></td>
                    <td><input type="reset" name="btnLimpar" value="Limpar"></td>
                </tr>
            </table>
        </form>
  </html>
  
