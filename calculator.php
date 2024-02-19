<?php include_once('header.php');
include_once('functions.php');
echo '<h1>Калькулятор</h1>';
if (isset($_POST['CR'])){
	$arr = array();
	foreach($_POST as $k => $v){ $arr[$k] = intval($v); }
	$hero = calculate($arr); var_dump($hero);
	$_POST = array();
} else {?>
<p class="p10">Для подсчета навыков и производных значений введите текущие значения атрибутов.</p>
<form method="post" action="" class="start_form" enctype="multipart/form-data">
<fieldset class="ib w300 l p10">
<label class="ib full"><select class="fr" name="race"><?php $i = 0; while($i < 5){ $i++; echo '<option value="'.$i.'">'.get_species($i).'</option>'; }?></select><span class="ib p10">Раса</span></label>
<p>&nbsp;</p>
<label class="ib full"><input type="number" min="8" max="30" class="w75 fr" value="8" name="CR" onkeydown="return false" /><span class="ib p10">Храбрость</span></label>
<label class="ib full"><input type="number" min="8" max="30" class="w75 fr" value="8" name="WD" onkeydown="return false" /><span class="ib p10">Мудрость</span></label>
<label class="ib full"><input type="number" min="8" max="30" class="w75 fr" value="8" name="IN" onkeydown="return false" /><span class="ib p10">Интуиция</span></label>
<label class="ib full"><input type="number" min="8" max="30" class="w75 fr" value="8" name="CH" onkeydown="return false" /><span class="ib p10">Обаяние</span></label>
</fieldset>
<fieldset class="ib w300 l p10">
<label class="ib full"><input type="number" min="8" max="30" class="w75 fr" value="8" name="DX" onkeydown="return false" /><span class="ib p10">Ловкость рук</span></label>
<label class="ib full"><input type="number" min="8" max="30" class="w75 fr" value="8" name="AG" onkeydown="return false" /><span class="ib p10">Ловкость</span></label>
<label class="ib full"><input type="number" min="8" max="30" class="w75 fr" value="8" name="CO" onkeydown="return false" /><span class="ib p10">Телосложение</span></label>
<label class="ib full"><input type="number" min="8" max="30" class="w75 fr" value="8" name="ST" onkeydown="return false" /><span class="ib p10">Сила</span></label>
</fieldset>
<div class="full c p10"><input type="submit" value="Считать" class="btn" /></div>
</form>
<?php } include_once('footer.php');?>