<?php
    require_once 'init.php';
    // abre a conexão
    $PDO = db_connect();
    $aux = $_GET["id"];
	$aux2 = $_GET["idTurmaAluno"];
	//$aux2 = $_GET["idTurmaAluno"];
    // SQL para selecionar os registros
    $sql = "SELECT idAluno, nomeAluno, matricula, frequencia, idTurmaAluno FROM Aluno WHERE idTurmaAluno = :idTurma ORDER BY nomeAluno ASC";
    // seleciona os registros
    $stmt = $PDO->prepare($sql);
    //0$stmt->execute(array(':idTurmaAluno' => $aux2));
    $stmt->execute(array(':idTurma' => $aux));
    $stmt->execute(array(':idTurmaAluno' => $aux2));
    
	
	include_once 'Aluno.class.php';
   // $dadosOK = true;

       $nomeAluno = isset($_POST['txtNome']) ? $_POST['txtNome'] : null;
       $matricula = isset($_POST['txtMatricula']) ? $_POST['txtMatricula'] : null;
       $frequencia = isset($_POST['txtFrequencia']) ? $_POST['txtFrequencia'] : null;
       $idTurmaAluno = isset($_POST[$aux2]) ? $_POST[$aux2] : null;
       
        $Alunos = new Aluno($nomeAluno ,$matricula ,$frequencia, $idTurmaAluno);

        $PDO = db_connect();
        
        $sql ="UPDATE Aluno SET nomeAluno = :nomeAluno, matricula = :matricula, frequencia = :frequencia, idTurmaAluno = :idTurmaAluno WHERE idTurmaAluno = $aux && idAluno = $id";
        $stmt = $PDO ->prepare($sql);
        $stmt ->bindParam(':nomeAluno', $Alunos->getNomeAluno());
        $stmt ->bindParam(':matricula', $Alunos->getMatricula());
        $stmt ->bindParam(':frequencia', $Alunos->getFrequencia());
        $stmt ->bindParam(':idTurmaAluno', $Alunos->getIdTurmaAluno());

        $stmt->execute();
            header('Location: alunoLista.php');
       // }else{
        //    echo"Erro ao  alterar";
           // print_r($stmt ->errorInfo());
       // }

       // echo $id;
   // endwhile;

    //header('Location: turmaRegistro.php');

?>
