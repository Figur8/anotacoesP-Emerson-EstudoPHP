<?php
    include('conexao.php');
    include('DepartamentoDao.php');

    $id = $_REQUEST["id"];
    //TODO - Criar outro construtor
    $dpt = new DepartamentoDAO('','','');
    $dpt->excluir($id);

    header("Location: index.php");
?>