<h1><?php if($typ < 3){ tsl('Wähle Beruf','Choose Profession','Выбери профессию'); } else { tsl('Wähle Tradition','Choose Tradition','Выбери традицию'); }?></h1>
<input type="hidden" name="step" value="3" />
<input type="hidden" name="vorname" value="<?php echo $heroname;?>" />
<input type="hidden" name="tsatag" value="<?php echo $tsa_tag;?>" />
<input type="hidden" name="tsamond" value="<?php echo $tsa_mond;?>" />
<input type="hidden" name="tsajahr" value="<?php echo $tsa_jahr;?>" />
<input type="hidden" name="exp" value="<?php echo $exp;?>" />
<input type="hidden" name="geschlecht" value="<?php echo $geschlecht;?>" />
<input type="hidden" name="spezies" value="<?php echo $spezies;?>" />
<input type="hidden" name="typ" value="<?php echo $typ;?>" />
<input type="hidden" name="proname" value="1" />
<?php if($typ < 3){ //if profane ?>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/99530017.png" alt="DSA5 Barbar" height="150" /><br />
<input type="radio" name="profession" value="3" required="required" />
<b><?php tsl('Barbar','Barbarian','Варвар');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/18438060.png" alt="DSA5 Krieger" height="150" /><br />
<input type="radio" name="profession" value="1" required="required" />
<b><?php tsl('Krieger','Warrior','Воин');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/32320942.png" alt="DSA5 Amazone" height="150" /><br />
<input type="radio" name="profession" value="2" required="required" />
<b><?php tsl('Amazone','Amazon','Амазонка');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/19436838.png" alt="DSA5 Söldner" height="150" /><br />
<input type="radio" name="profession" value="4" required="required" />
<b><?php tsl('Söldner','Mercenary','Наёмник');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/63085466.png" alt="DSA5 Matrose/Pirat" height="150" /><br />
<input type="radio" name="profession" value="5" required="required" />
<b><?php tsl('Matrose/Pirat','Sailor/Pirate','Моряк/Пират');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/58398533.png" alt="DSA5 Phexkind" height="150" /><br />
<input type="radio" name="profession" value="6" required="required" />
<b><?php tsl('Phexkind','Rogue','Жулик');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/57944424.png" alt="DSA5 Gelehrte" height="150" /><br />
<input type="radio" name="profession" value="7" required="required" />
<b><?php tsl('Gelehrte','Scholar','Ученый');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/80367117.png" alt="DSA5 Handwerker" height="150" /><br />
<input type="radio" name="profession" value="8" required="required" />
<b><?php tsl('Handwerker','Craftsman','Ремесленник');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/54060224.png" alt="DSA5 Adlige" height="150" /><br />
<input type="radio" name="profession" value="9" required="required" />
<b><?php tsl('Adlige','Nobleman','Аристократ');?></b>
</label>
<?php } //end profane
if ($typ==3){ //if mage ?>
<?php if($spezies < 3){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/25761057.png" alt="DSA5 Gildenmagier" style="max-height:235px; margin-top:15px;" height="150" /><br />
<input type="radio" name="profession" value="31" required="required" />
<b><?php tsl('Gildenmagier','Guid Mage','Маг гильдии');?></b>
</label><?php }?>

<?php if($spezies==1){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/31629258.png" alt="DSA5 Hexe" height="150" /><br />
<input type="radio" name="profession" value="32" required="required" />
<b><?php tsl('Hexe','Witch','Ведьма');?></b>
</label><?php }?>

<?php if($spezies==2 || $spezies==3){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/83270515.png" alt="DSA5 Elf" height="150" /><br />
<input type="radio" name="profession" value="33" required="required" />
<b><?php tsl('Elf','Elf','Эльф');?></b>
</label><?php }?>

<?php if($spezies==1){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/19066020.png" alt="DSA5 Druide" height="150" /><br />
<input type="radio" name="profession" value="34" required="required" />
<b><?php tsl('Druide','Druid','Друид');?></b>
</label><?php }?>

<?php if($spezies==4 && $geschlecht==0){?><label class="hero-img">
<img src="http://dsa.d20light.moy.su/_pu/0/80265569.png" alt="DSA5 Geode" height="150" /><br />
<input type="radio" name="profession" value="35" required="required" />
<b><?php tsl('Geode','Geode','Геод');?></b>
</label><?php }?>

<?php if($spezies==3 || $spezies==9){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/64809678.png" alt="DSA5 Nachtalb" height="150" /><br />
<input type="radio" name="profession" value="36" required="required" />
<b><?php tsl('Shakagra','Shakagra','Шакагра');?></b>
</label><?php }?>

<?php if($spezies==1 || $spezies>4){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/30718612.png" alt="DSA5 Schamane" height="150" /><br />
<input type="radio" name="profession" value="37" required="required" />
<b><?php tsl('Schamane','Shaman','Шаман');?></b>
</label><?php }?>

<?php if($spezies < 3){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/43515545.png" alt="DSA5 Scharlatan" height="150" /><br />
<input type="radio" name="profession" value="38" required="required" />
<b><?php tsl('Scharlatan','Charlatan','Шарлатан');?></b>
</label><?php }?>

<?php if($spezies==1 || $spezies==4){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/00212793.png" alt="DSA5 Schelm" height="150" /><br />
<input type="radio" name="profession" value="39" required="required" />
<b><?php tsl('Schelm','Shelm','Шельм');?></b>
</label><?php }?>

<?php if($spezies==8){?><label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/93590542.png" alt="DSA5 Kristallomant" height="150" /><br />
<input type="radio" name="profession" value="40" required="required" />
<b><?php tsl('Kristallomant','Kristallomant','Кристалломант');?></b>
</label><?php }?>

<?php if($spezies==1){?><label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/10153649.png" alt="DSA5 Qabalya" height="150" /><br />
<input type="radio" name="profession" value="41" required="required" />
<b><?php tsl('Qabalya','Qabalya','Кабалья');?></b>
</label>

<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/59571563.png" alt="DSA5 Zibilja" style="max-height:200px; margin-top:50px;" height="150" /><br />
<input type="radio" name="profession" value="42" required="required" />
<b><?php tsl('Zibilja','Zibilja','Цибилья');?></b>
</label><?php }?>

<?php if($spezies==1){?><label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/45669335.png" alt="DSA5 Zauberbarde" height="150" /><br />
<input type="radio" name="profession" value="43" required="required" />
<b><?php tsl('Zauberbarde','Bard-Mage','Маг-бард');?></b>
</label>

<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/21806433.png" alt="DSA5 Zaubertänzer" height="150" /><br />
<input type="radio" name="profession" value="44" required="required" />
<b><?php tsl('Zaubertänzer','Dancer-Mage','Маг-танцор');?></b>
</label><?php }?>

<?php if($spezies==2 || $spezies==3){}else{?><label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/89102187.png" alt="DSA5 Magie-Dilettant" height="150" /><br />
<input type="radio" name="profession" value="45" required="required" />
<b><?php tsl('Magiedilettant','Dilettante','Маг-дилетант');?></b>
</label><?php }?>
<?php } //endif mage
if ($typ == 4){ //if priest ?>
<?php if($spezies < 3){ //if human ?>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/97849646.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="71" required="required" />
<b><?php tsl('Praios-Geweihter','Blessed by Praios','Жрец Прайоса');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/56068410.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="72" required="required" />
<b><?php tsl('Rondra-Geweihter','Blessed by Rondra','Жрец Рондры');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/39658700.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="73" required="required" />
<b><?php tsl('Efferd-Geweihter','Blessed by Efferd','Жрец Эфферда');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/24164508.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="74" required="required" />
<b><?php tsl('Travia-Geweihter','Blessed by Travia','Жрец Травии');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/82902515.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="75" required="required" />
<b><?php tsl('Boron-Geweihter','Blessed by Boron','Жрец Борона');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/61487248.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="76" required="required" />
<b><?php tsl('Hesinde-Geweihter','Blessed by Hesinde','Жрец Хезинды');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/06046697.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="77" required="required" />
<b><?php tsl('Firun-Geweihter','Blessed by Firun','Жрец Фируна');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/21661304.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="78" required="required" />
<b><?php tsl('Tsa-Geweihter','Blessed by Tsa','Жрец Тсы');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/83123983.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="79" required="required" />
<b><?php tsl('Phex-Geweihter','Blessed by Phex','Жрец Фекса');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/08254998.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="80" required="required" />
<b><?php tsl('Peraine-Geweihter','Blessed by Peraine','Жрец Перайны');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/82261156.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="81" required="required" />
<b><?php tsl('Ingerimm-Geweihter','Blessed by Ingerimm','Жрец Ингеримма');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/95776147.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="82" required="required" />
<b><?php tsl('Rahja-Geweihter','Blessed by Rahja','Жрец Райи');?></b>
</label>
<?php } //endif human?>
<?php if($spezies==4){//if dwarf ?>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/82261156.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="81" required="required" />
<b><?php tsl('Angrosch-Geweihter','Blessed by Angrosch','Жрец Ангроша');?></b>
</label><?php } //endif dwarf?>
<?php if($spezies==5){ //if goblin?>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/45341934.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="77" required="required" />
<b><?php tsl('Fir-Uunla-Geweihter','Blessed by Fir-Uunla','Жрец Фир-Уунлы');?></b>
</label><?php } //endif goblin?>
<?php if($spezies==6 || $spezies==7){ //if ork ?>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/57978336.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="75" required="required" />
<b><?php tsl('Tairach-Priester','Blessed by Tairach','Жрец Тайраха');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/13901927.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="81" required="required" />
<b><?php tsl('Gravesh-Priester','Blessed by Gravesh','Жрец Гравеша');?></b>
</label>
<label class="hero-img">
<img src="#" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="80" required="required" />
<b><?php tsl('Rikai-Priester','Blessed by Rikai','Жрец Рикай');?></b>
</label>
<?php } //endif ork?>
<?php if($spezies == 8){ //if achaz ?>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/45341934.png" alt="DSA5 Charyptoroth" height="150" /><br />
<input type="radio" name="profession" value="73" required="required" />
<b><?php tsl('Charyptoroth-Priester','Blessed by Charyptoroth','Жрец Харипторот');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/45341934.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="76" required="required" />
<b><?php tsl('H’Szint-Priester','Blessed by H’Szint','Жрец Х’Сцинт');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/45341934.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="" required="required" />
<b><?php tsl('Ssad’Navv-Priester','Blessed by Ssad’Navv','Жрец Ссад-Нава');?></b>
</label>
<label class="hero-img">
<img src="http://dsa.d20rpg.net/_pu/0/45341934.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="profession" value="78" required="required" />
<b><?php tsl('Zsahh-Priester','Blessed by Zsahh','Жрец Ццахх');?></b>
</label>
<?php } } //endif achaz?>