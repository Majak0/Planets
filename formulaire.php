<!DOCTYPE html>
<html>

<head>
	<title>~ Planètes ~</title>
	<meta charset="utf-8">  
    <link rel="stylesheet" href="style.css">
</head>

<body>

	<?php include('planetes.php'); ?>
	<form method="get">
		<fieldset>
			<select name="planete">
				<option value="invalid">
					~ Choisissez une planète ~
				</option>

				<?php
					foreach ($planetes as $planete=>$value) {
				?>

				<option value="<?php echo $planete ?>" <?php if (isset($_GET['planete']) && $_GET['planete']==$planete) {?>selected="selected"<?php } ?> >
					<?php echo $planete ?>
				</option>
				
				<?php
					}
				?>
			</select>

			<input type="submit" value="Envoyer">
		</fieldset>
	</form>


	<?php 
		 if (
			!empty($_GET)
			&& isset($_GET['planete'])
			&& isset($planetes[$_GET['planete']])
		) {
			echo"<div class='liste'>";
				echo $_GET['planete']." a un diamètre de ".$planetes[$_GET['planete']]['diametre']."km<br>";
				echo $_GET['planete']." a une révolution de ".$planetes[$_GET['planete']]['revolution']."km<br>";
				echo $_GET['planete']." a ".$planetes[$_GET['planete']]['satellites']." satellite(s)<br>";
				echo $_GET['planete']." est à environ ".$planetes[$_GET['planete']]['distance_soleil_moyenne']." millions de kilomètres du soleil";
			echo "</div>";
	?>

			<img src="astronaute.png" class="astronaute">
			<img src="bulle.png" class="bulle">

	<?php
		}
			
	?>

</body>
</html>


