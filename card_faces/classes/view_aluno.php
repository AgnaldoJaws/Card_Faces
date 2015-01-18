<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>






<?php include 'model_login.php';?>
<?php include 'Usuarios.php';?>





<?php
session_start();


if (isset ($_GET['logout'])):

			if ($_GET['logout'] == 'ok'):
				$l = new model_login;
				$l->deslogar();


			endif;
	

endif;




if(isset($_SESSION['logado'])):

?>
  Bem vindo <?php echo $_SESSION ['administrador'];?>
  <a href="../index.php?logout=ok"> Sair </a>



<?php
else:

echo "LOGADO sqn Voce nao tem permissao";
endif;


?>

		<?php $usuario = new Usuarios(); ?>
	
	
	<table border=1>
			
			
				<tr>
					<th>Nome do aluno</th>
					
					
					
				</tr>
		
			<?php
		 $id_aluno = $_SESSION ['administrador'];
         $r = $usuario->find($id_aluno);
         
		
		
		      ?>
			

			
				<tr>
					<td><?php echo $r->id_aluno; ?></td><br><br>
					
					
					
					<td>
						<?php echo "<a href='cad_evento.php?id_aluno=" . $r->id_aluno . "'>Editar</a>"; ?><br>
						<?php echo "<a href='pag_aluno.php?acao=deletar&id_aluno=" . $r->id_aluno . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
					</td>
				</tr>
			

			

		</table>
	
	
	
	

	
	
	
<table class="table table-hover">
			
			<thead>
				<tr>
					<th>id ins </th>
					<th>id eve </th>
					<th>id aluno </th>
					<th>Nome:</th>
					
					
				</tr>
			</thead>
			
			<?php   $ra = $_SESSION ['ra']; echo "$ra";    ?>
			<?php foreach($usuario->findAll($ra) as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id_ins; ?></td>
					<td><?php echo $value->id_eve; ?></td>
					<td><?php echo $value->id_aluno; ?></td>
					<td><?php echo $value->nome_aluno; ?></td>
					
					
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>

	