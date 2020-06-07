<?php
$submit = filter_input(INPUT_POST, 'submit');
$sauce = filter_input(INPUT_POST, 'sauce');
$dough = filter_input(INPUT_POST, 'dough');
$ingredients = $_POST['ingredients'];
var_dump($ingredients);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP1-15</title>
</head>
<body>
    <form action="pizza.php" method="post">

    <?php
if (isset($submit)) { ?>
    <p>Potvrzení objednávky</p>
    <p>Děkujeme za vaší objednávku</p>
    <p>Objednal jste si pizzu s :</p>
    <p>Těsto : <?= $dough ?></p>
    <p>Omáčka : <?= $sauce ?></p>
    <h3>Ingredience</h3> 
<?php 
foreach ($ingredients as $item) { ?>
    <li><?= $item; ?></li>
<?php }
?>
   <?php } 
   else {  ?>


<h2>typ těsta</h2>
<label for="gluten-free">Bezlepkové</label>
<input type="radio" name="dough" id="gluten-free" value="bez lepku">

<label for="normal">Normální těsto</label>
<input type="radio" name="dough" id="normal" value="normalní">

<h2>typ omáčky</h2>
<label for="tomato">Rájská omáčka</label>
<input type="radio" name="sauce" id="tomato" value="Rájská">
<label for="weird_orange_sauce">Divná oranžová kyselá omáčka</label>
<input type="radio" name="sauce" id="weird_orange_sauce" value="Divná Oranžová">
<br>
<h2>Ingredience</h2>
<label for="Ham">Šunka</label>
<input type="checkbox" name="ingredients[]" id="Ham" value="šunka">
<label for="cheese">Sýr</label>
<input type="checkbox" name="ingredients[]" id="cheese" value="sýr">
<label for="sardines">Sardinky</label>
<input type="checkbox" name="ingredients[]" id="sardines" value="sardinky">
<label for="Lentilky">Lentilky</label>
<input type="checkbox" name="ingredients[]" id="Lentilky" value="Lentilky">
<label for="chocolate">Čokoláda</label>
<input type="checkbox" name="ingredients[]" id="chocolate" value="čokoláda">
<label for="mushrooms">Houbičky</label>
<input type="checkbox" name="ingredients[]" id="mushrooms" value="houby">
<label for="slanina">Slanina</label>
<input type="checkbox" name="ingredients[]" id="slanina" value="slanina">
<label for="salam">Salám</label>
<input type="checkbox" name="ingredients[]" id="salam" value="salam">
<label for="annanas">Ananas</label>
<input type="checkbox" name="ingredients[]" id="annanas" value="annanas">
<label for="Mocarella">Mocarella mama mia !</label>
<input type="checkbox" name="ingredients[]" id="Mocarella" value="Mocarella">
<br>
<br>

<br>
<input type="submit" name="submit" value="objednat pizzu">
<?php } ?>
</form>
</body>
</html>