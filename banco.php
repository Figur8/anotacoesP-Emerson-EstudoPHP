<?php
//TODO - CONECTAR COM UM BANCO NO LINUX
include 'conexao.php';
//o metodo de conexão php irá funcionar em DEpartamentoDAO pq este include garante que os dois tem conexão
//funciona como a classe.main da maioria das linguagens 
//TODO - Pesquisar booas práticas disto.
include 'DepartamentoDAO.php';


$nome = $_request["nome"];
$setor = $_request["setor"];
$andar = $_request["andar"];

$dpt = new Departamento($nome,$setor,$andar);
//$dpt->salvar();
echo($dpt->lista());
echo "<script>window.history.back();</script>;";

//salvarDepartamento($nome, $setor, $andar);

// function salvarDepartamento($nome, $setor, $andar){
//     conexao();

//     $sql = "insert into departamento".
//             "(nome, setor, andar)".
//             "values ('$nome', '$setor', $andar)";

//     mysqli_query(conexao(), $sql);
// }

// Class Departamento{

// 	public $nome = "Sizenando";
// 	protected $setor = "TI";
// 	private $andar = 2;

// 	function __construct($nome, $setor){
// 		$this->nome = $nome;
// 		$this->setor = $setor;

// 	}

// 	function __destruct(){

// 	}


// }

class Departamento2 extends Departamento
{

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {

        return $this->nome;
    }

    function teste()
    {
        echo $this->nome;
        echo $this->setor;
    }
}

// $dpt = new Departamento("Juca","Conta","2");
// echo $dpt->nome;

// $dpt2 = new Departamento2("Maria","Finanças");
// $dpt2->teste();

// echo $dpt2->nome;
// $dpt2->setNome("Jose da Silva");

// echo $dpt2->getNome();



/* METODO ANTIGO PARA CONECÇÃO
$host = "localhost"; // Endereço do Servidor
$user = "root"; // Usuario do Banco
$senha = ""; // Senha do Banco
$banco = "aulaphp"; // Banco de dados a ser acessado

$con = mysql_connect($host, $user, $senha);
mysql_select_db($banco);

$sql = "insert into departamento".
		"(nome, setor, andar)".
		"values ('Maria','Finanças', 2)";

		mysql_query($sql);
*/



// METODO NOVO PARA CONECÇÃO
$host = "localhost"; // Endereço do Servidor
$user = "root"; // Usuario do Banco
$senha = ""; // Senha do Banco
$banco = "aulaphp"; // Banco de dados a ser acessado

$con2 = mysqli_connect($host, $user, $senha, $banco);

$sql = "insert into departamento" .
    "(nome, setor, andar)" .
    "values ('Maria','Finanças', 2)";

mysqli_query($con2, $sql);
?>