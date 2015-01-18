


<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

<?php


$id=$_GET['id_aluno'];
$idnovo = $id;

   $inscricao = new c_evento();

		if(isset($_POST['cadastrar'])):

			$id_aluno = $_POST['id_aluno'];
			$inscricao->setId_aluno($id_aluno);

            $id_eve  = $_POST['id_eve'];
			$inscricao->setId_eve($id_eve);

            

            

			# Insert
			if($inscricao->insert()){
				echo "Inserido com sucesso!";
			}

		endif;



echo "<form name = \"formOs\" method=\"POST\" action=\"\">";



echo ("<h3>Codido do cliente</h3> </br>");
                       echo "<input type =\"text\" name=\"id_aluno\" id=\"id_form\"value=".$idnovo.">                             
	                     
						 
						
                
                <select name=\"id_eve\">
                    <option value=\"\">Selecione os Dias de Sua Preferencia</option>
                    <option value=\"1\">1 dia 3 palestras R$10,00 10 horas</option>
                    <option value=\"2\">2 dias 3 palestras R$10,00 10 horas</option>
                    <option value=\"3\">3 dias 3 palestras R$10,00 10 horas</option>
                </select>
            
						
						<input type=\"submit\" name=\"cadastrar\" value=\"Enviar\"></input>
					    <input type=\"reset\" name=\"limpar\" value=\"Limpar\"></input>
				        <a href=\"PagCliente.php\">Voltar </a>

                           




</form>";




?>



































        <form action="form-action.php" method="post">
           
			
			
        </form>

    




