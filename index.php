<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="banco.php" method="request">
        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome"/><td>
            <tr>
            <tr>
                <td>Setor</td>
                <td><input type="text" name="setor"/><td>
            <tr>
            <tr>
                <td>Andar</td>
                <td><input type="text" name="andar"/><td>
            <tr>
            <tr>
                <td>Salvar</td>
                <td><input type="submit" name="Salvar"/><td>
            <tr>
        </table>
    </form>
    <?php
        include('conexao.php');
        include('DepartamentoDao.php');
        //TODO - FAZER O ATUALIZAR 
        //TODO - Criar outro construtor
        $dpt = new DepartamentoDAO('','','');
        print($dpt->lista());
    ?>
</body>
</html>