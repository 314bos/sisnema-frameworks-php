<?php

require_once('classes/classe_bancodados.inc');

$bd = new mysql('localhost', 'root', '', 'cake');

$resultado = $bd->find('articles', 'title', 'aluno', true);

$posicao = isset($_GET['posicao']) ? $_GET['posicao'] : 0 ;

if(isset($_GET['posicao'])){

	$resultado = array( $posicao => $bd->navega($posicao));
}

if(isset($_GET['acao']) && $_GET['acao'] == "editar"){

	include('exemplo.2.6.form.php');

	} else if(isset($_GET['acao']) && $_GET['acao'] == "deletar") {


		if($bd->delete('articles', 'id', $resultado[$posicao]['id'] ) ){
			echo "removido";
		} else {
			echo "seja brasileiro e tente outra vez";
		}


} else {


session_start();


if(isset($_SESSION['status'])){
	echo $_SESSION['mensagem'];
}

session_destroy();

?>
<table border=1>
	<thead>
		<tr>
			<td>id</td>
			<td>title</td>
			<td>body</td>
			<td>editar</td>
			<td>deletar</td>
		</tr>
	</thead>
	<tbody>
<?php foreach( $resultado as $pos => $item ){ ?>

		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo  $item['title']; ?></td>
			<td><?php echo  $item['body']; ?></td>
			<td>
				<a href="?posicao=<?php echo  $pos; ?>&acao=editar">editar</a>
			</td>
			<td>
				<a onclick="return confirm('Vc tem certeza?')" href="?posicao=<?php echo  $pos; ?>&acao=deletar">deletar</a>
			</td>
		</tr>

<?php } ?>
	</tbody>
</table>

<?php } ?>