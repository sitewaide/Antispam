<style>
.green{color: green;}
.red{color: red;}
.num_hide_css{display: none;}
</style>

<?php
class Antispam{
	function AntispamResult(){
		// Traitement des données
		if(!empty($_POST)){ 
			extract($_POST);
			$result = $a+$b;
			
			if($antispam == $result){
				echo '<span class="green">Mail envoyé</span>';
			}
			else{
				echo '<span class="red">Erreur ! </span>';
			}
			
		}// if(!empty($_POST))
		}// Fin fonction

	function AntispamShow($action_page, $value_form){
		$a = mt_rand(1, 10);
		$b = mt_rand(1, 10);
		$c = mt_rand(1, 100);
			
		echo $a."+".$b."<span class=\"num_hide_css\">-".$c."</span>";
		?><form method="post" action=<?php echo $action_page; ?>>
		<input type="hidden" value=<?php echo $a; ?> name="a" />
		<input type="hidden" value=<?php echo $b; ?> name="b" />
		<label for="AS">Résultat : </label><input type="text" name="antispam" id="AS" />
		<input type="submit" value=<?php echo $value_form; ?> />
		</form>
<?php } 
}?>

<?php //http://site-waide.fr/repo/antispam ?>