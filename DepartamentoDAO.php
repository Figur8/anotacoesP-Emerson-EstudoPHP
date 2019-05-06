<?php
class DepartamentoDAO
{

    private $nome;
    private $setor;
    private $andar;

    function __construct($nome, $setor,$andar)
    {
        // $this->nome = $nome;
        // $this->setor = $setor;
        // $this->andar = $andar;
    }

    function excluir(){
        $sql = "delete from departamento where id=$id";
        mysqli_query(conexao(), $sql);
    }

    function lista()
    {
        
        $sql = "select * from departamento";
        $resultado = mysqli_query(conexao(), $sql);
        if ($resultado) {
            while ($registro = mysqli_fetch_array(
                $resultado,
                MYSQLI_ASSOC
                
            )) {
                $tabela .="<table>".
                 "  <tr>" .
                 "      <td> <a href='excluir.php?id=$registro[id]'> XXX </a></td>".
                 "      <td> Nome </td>".
                 "      <td> Setor </td>".
                 "      <td> Andar </td>".
                 "  </tr>";
        //        print($registro[0] . "<br/>".
        //        $registro["setor"]);
            }
            $tabela = "<table>";
            return $tabela;
        }
        //Para quando os dados entrarem não dar um erro de html
        

        function salvar()
        {
            conexao();

            $sql = "insert into departamento" .
                "(nome, setor, andar)" .
                "values ('$this->nome', '$this->setor', $this->andar)";
            mysqli_query(conexao(), $sql);
        }
    }
}
?>