<?php
//file: view/games/promote.php

require_once(__DIR__."/../../core/ViewManager.php");
$view = ViewManager::getInstance();
?>
<div class="formulario">
	<h1><?= i18n("Promotion")?></h1>
	<form action="index.php?controller=games&amp;action=promote" method="POST">
	<select name="date">
            <?php 
                for ($day=0; $day < 7; $day++){
                    $actualDate = new DateTime();
                    $date = $actualDate->add(new DateInterval("P".$day."D"));
                    ?>
                    <option value="<?php echo $date->format('Y-m-d')?>"><?php echo $date->format('Y-m-d')?></option>
                    <?php
                }
            ?>
		</select>
		<select name="hour">
			<option value="08:00:00">08:00</option>
			<option value="09:30:00">09:30</option>
			<option value="11:00:00">11:00</option>
			<option value="12:30:00">12:30</option>
			<option value="14:00:00">14:00</option>
			<option value="15:30:00">15:30</option>
			<option value="17:00:00">17:00</option>
			<option value="18:30:00">18:30</option>
		</select>
		<input class="submit-btn fas fa-user-plus" type="submit" value="<?= i18n("Promote")?>">
	</form>
</div>