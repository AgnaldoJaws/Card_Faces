
<?php include "Usuarios.php"; ?>


<?php
	
		   $usuario = new Usuarios();

			if(isset($_POST['cadastrar'])):

            $bairro  = $_POST['bairro'];
			$usuario->setBairro($bairro);
            


			if($usuario->insert()){
				echo "Inserido com sucesso!";
			}

		endif;


		?>