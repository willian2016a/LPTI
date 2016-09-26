<?php
    require_once 'init.php';
    //abre a conexão
    $PDO = db_connect();
    //SQL para selecionar os registros
    $sql = "SELECT idTurma, nomeTurma FROM Turma ORDER BY nomeTurma ASC";
    // seleciona os registros
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
?> 
<!DOCTYPE HTML>
<head>
    <title>Imperium</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/mainScreen.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Content -->
<div id="content">
    <div class="inner">

        <!-- Post -->
        <article class="box post post-excerpt">
            <header>
                <!--
                    Note: Titles and subtitles will wrap automatically when necessary, so don't worry
                    if they get too long. You can also remove the <p> entirely if you don't
                    need a subtitle.
                -->
                <h2><a href="#">Bem Vindo ao Imperium</a></h2>
                <p>Seu Gerenciador Pessoal Acadêmico</p>
            </header>
            <table class="table table-bordered">
                <caption><strong><h3>Atividades Próximas</h3></strong></caption>
                <thead>
                </thead>
                <tfoot>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                <tr>
                    <td><strong>Hoje</strong></td>
                    <td><strong>Amanhã</strong></td>
                    <td><strong>Essa Semana</strong></td>
                    <td><strong>Esse Mês</strong></td>
					<td><strong>Daqui a um Tempo</strong></td>
                </tr>
                <tr>
                    <td>Avaliação - 3INFO - 10:40</td>
                    <td>Pintar o Cabelo - 19:30</td>
                    <td>Fazer Compras - 19/03</td>
                    <td>Assistir Friends mais uma vez - 22/03</td>
					<td>Tirar Férias<td>
                </tr>
                <tr>
					<td>Avaliação - 3MECA - 10:40</td>
                    <td>Comprar Tinta pra Cabelo</td>
                    <td>Limpar a Casa - 19/03</td>
                    <td>Conselho de Classe - 22/03</td>
					<td>Viagem pra Munique<td>
                </tr>
                <tr>         
                </tr>
                <tr>
                </tr>
                </tbody>
                </tfoot>
            </table>

        </article>
    </div>
</div>

<!-- Sidebar -->
<div id="sidebar">

    <!-- Logo -->
    <h1 id="logo"><a href="#">Imperium</a></h1>


    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="index.html">Principal</a></li>
            <li><a href="alunoRegistro.php">Registro de Alunos</a></li>
            <li class="current"><a href="calendario.html">Agenda</a></li>
            <li><a href="relatorios.html">Atividades</a></li>
        </ul>
    </nav>
    <!-- Copyright -->
    <ul id="copyright">
        <li>&copy; CEFET-MG Unidade Varginha.</li><li>Design: Edgard Alexandre, Larissa Rodrigues, Pedro Barbosa, Willian Alves</a></li>
    </ul>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/utilScreen.js"></script>
<script src="assets/js/mainScreen.js"></script>


</body>
</html>
