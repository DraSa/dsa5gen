<input type="hidden" name="step" value="4" />
<input type="hidden" name="vorname" value="<?=$heroname;?>" />
<input type="hidden" name="tsatag" value="<?=$tsa_tag;?>" />
<input type="hidden" name="tsamond" value="<?=$tsa_mond;?>" />
<input type="hidden" name="tsajahr" value="<?=$tsa_jahr;?>" />
<input type="hidden" name="exp" value="<?=$exp;?>" />
<input type="hidden" name="geschlecht" value="<?=$geschlecht;?>" />
<input type="hidden" name="spezies" value="<?=$spezies;?>" />
<input type="hidden" name="typ" value="<?=$typ;?>" />
<input type="hidden" name="profession" value="<?=$profession;?>" />
<input type="hidden" name="proname" value="<?=$proname;?>" />
<input type="hidden" name="action" value="new_post" />
<h1><?php tsl('AP Verteilen','Distribute AP','Распределение ОП');?></h1>
<!-- stats -->
<div class="c"><input id="ap" type="number" min="0" max="100" value="100" style="color:#d00; font-size:30px; width:100px;" readonly /></div>
<div class="l p10-0">
<p class="ib w250"><b><?php tsl('Name','Name','Имя');?>:</b> <?=$heroname;?></p>
<p class="ib w200"><b>Пол:</b> <?php if($geschlecht>0){ tsl('Weiblich','female','женский'); }else{ tsl('Männlich','male','мужской'); }?></p>
<p class="ib"><b>Возраст:</b> <?=get_age($tsa_jahr,$tsa_mond,$tsa_tag);?></p>
<p class="ib w250"><b>Раса:</b> <?=$race;?></p>
<p class="ib w250"><b>Профессия:</b> <?=$proname;?></p>
</div>
<fieldset class="ib w300" onchange="steigerung();">
<legend class="c"><?php tsl('Eigenschaften','Attributes','Атрибуты');?></legend>
<label class="ib full">Храбрость (ХР) <input type="number" min="8" max="20" value="11" id="attr_MU" name="mu" data-ap="10" class="w75 fr" onkeydown="return false" /></label>
<label class="ib full">Мудрость (МД) <input type="number" min="8" max="20" value="10" id="attr_KL" name="kl" data-ap="10" class="w75 fr" onkeydown="return false" /></label>
<label class="ib full">Интуиция (ИН) <input type="number" min="8" max="20" value="10" id="attr_IN" name="in" data-ap="10" class="w75 fr" onkeydown="return false" /></label>
<label class="ib full">Обаяние (ОБ) <input type="number" min="8" max="20" value="10" id="attr_CH" name="ch" data-ap="10" class="w75 fr" onkeydown="return false" /></label>
<label class="ib full">Ловкость рук (ЛР) <input type="number" min="8" max="20" value="11" id="attr_FF" name="ff" data-ap="10" class="w75 fr" onkeydown="return false" /></label>
<label class="ib full">Ловкость (ЛВ) <input type="number" min="8" max="20" value="10" id="attr_GE" name="ge" data-ap="10" class="w75 fr" onkeydown="return false" /></label>
<label class="ib full">Телосложение (ТЛ) <input type="number" min="8" max="20" value="10" id="attr_KO" name="ko" data-ap="10" class="w75 fr" onkeydown="return false" /></label>
<label class="ib full">Сила (СЛ) <input type="number" min="8" max="20" value="11" id="attr_KK" name="kk" data-ap="10" class="w75 fr" onkeydown="return false" /></label>
</fieldset><fieldset class="ib w300" onchange="steigerung();">
<legend class="c"><?php tsl('Kampfwerte','Equipment','Снаряжение');?></legend>
<label class="ib full">Броня <select id="armor" class="w150 fr" title="комплект (броня / тяжесть)">
<option value="rs1" data-rs="0" data-be="0" selected>одежда (0/0)</option>
<option value="rs2" data-rs="2" data-be="1">стеганка (2/1)</option>
<option value="rs3" data-rs="3" data-be="1">кожанка (3/1)</option>
<option value="rs5" data-rs="4" data-be="2" disabled>кольчуга (4/2)</option>
<option value="rs6" data-rs="5" data-be="2" disabled>чешуйчатая (5/2)</option>
<option value="rs7" data-rs="6" data-be="3" disabled>латы (6/3)</option>
</select></label>
<label class="ib full">Оружие <select id="weapon1" class="w150 fr" title="оружие (урон, атака / парирование)">
<optgroup label="Легкое оружие (ЛВ)">
<option value="ge0" disabled>нож Фируна (К6+1 0/-2)</option>
<option value="ge1" selected>кинжал (К6+1 0/0)</option>
<option value="ge2">шпага (К6+2 1/0)</option>
<option value="ge3">меч/сабля (К6+4 0/0)</option>
<option value="ge4" disabled>трезубец Борода Эфферда (К6+3 0/1)</option>
<option value="ge5">копьё (К6+4 0/0)</option>
</optgroup>
<optgroup label="Тяжелая оружие (СЛ)">
<option value="kk0">дубина (К6+2 0/-2)</option>
<option value="kk1">булава (К6+3 0/-1)</option>
<option value="kk2" disabled>посох мага (К6+2 0/2)</option>
<option value="kk4" disabled>воронов клюв (К6+4 0/-1)</option>
<option value="kk5" disabled>скипетр солнца (К6+3 0/-1)</option>
<option value="kk6">секира (К6+4 0/-1)</option>
<option value="kk7" disabled>молот Ингеримма (К6+3 0/-2)</option>
<option value="kk8" disabled>полуторный меч (К6+6 0/0)</option>
<option value="kk9" disabled>гребень Рондры (2К6+2 0/-1)</option>
<option value="kk10" disabled>двуручный меч (2К6+4 0/-3)</option>
</optgroup>
<optgroup label="Дистанционное оружие (ЛР)">
<option value="fk0">камень (К6)</option>
<option value="fk1">мет. кинжал (К6+1)</option>
<option value="fk2">мет. топор (К6+3)</option>
<option value="fk3">мет. копье (2К6+2)</option>
<option value="fk4">рогатка (К6)</option>
<option value="fk5">короткий лук (К6+4)</option>
<option value="fk6" disabled>эльф. лук (К6+5)</option>
<option value="fk7">длинный лук (К6+8)</option>
<option value="fk8">легкий арбалет (К6+6)</option>
<option value="fk9" disabled>тяж. арбалет (2К6+6)</option>
</optgroup>
</select></label>
<label class="ib full">Доп. оружие <select id="weapon2" class="w150 fr">
<optgroup label="Защитное">
<option value="ge1">кинжал (К6+1)</option>
<option value="ge3">меч (К6+4)</option>
<option value="pa1">деревянный щит (К6)</option>
<option value="pa2">торвальский щит (К6+1)</option>
<option value="pa3">большой щит (К6+1)</option>
</optgroup>
<optgroup label="Дистанционное">
<option value="fk0">камень (К6)</option>
<option value="fk1" selected>мет. кинжал (К6+1)</option>
<option value="fk2">мет. топор (К6+3)</option>
<option value="fk3">мет. копье (2К6+2)</option>
<option value="fk4">рогатка (К6)</option>
<option value="fk5">короткий лук (К6+4)</option>
<option value="fk6" disabled>эльф. лук (К6+5)</option>
<option value="fk7">длинный лук (К6+8)</option>
<option value="fk8">легкий арбалет (К6+6)</option>
<option value="fk9" disabled>тяж. арбалет (2К6+6)</option>
</optgroup>
</select></label>
<h6 class="l">Инвентарь</h6>
<?php $icost = 2; if($profession == 7 || $profession == 8 || $profession == 45){ $icost = 0; } ?>
<label class="full l"><input type="checkbox" name="inv[]" value="набор рабочих инструментов" data-ap="<?php echo $icost;?>" /> набор инструментов</label>
<label class="full l"><input type="checkbox" name="inv[]" value="набор путешественника" data-ap="1" /> набор путешественника</label>
<label class="full l"><input type="checkbox" name="inv[]" value="музыкальный инструмент" data-ap="2" /> музыкальный инструмент</label>
<label class="full l"><input type="checkbox" name="inv[]" value="снедь для охоты и рыбалки" data-ap="1" /> снедь для охоты и рыбалки</label>
<label class="full l"><input type="checkbox" name="inv[]" value="конь / ездовое животное" data-ap="5" /> конь / ездовое животное</label>
<label class="full l"><input type="checkbox" name="inv[]" value="транспорт (телега / лодка)" data-ap="7" /> транспорт (телега / лодка)</label>
<label class="full l"><input type="checkbox" name="inv[]" value="сумка с травами" data-ap="3" /> сумка с травами</label>
<label class="full l"><input type="checkbox" name="inv[]" value="лечебное зелье (+20 ЖЭ)" data-ap="5" /> лечебное зелье (20 ЖЭ)</label>
<label class="full l"><input type="checkbox" name="inv[]" value="астральное зелье (+20 АЭ)" data-ap="5" /> астральное зелье (20 АЭ)</label>
<?php if($profession == 32){?><select name="inv[]" data-ap="5" class="full"><option selected>фамильяр</option><option>фамильяр: кошка</option><option>фамильяр: жаба</option><option>фамильяр: змея</option><option>фамильяр: паук</option><option>фамильяр: сова</option><option>фамильяр: обезьянка</option></select><?php }?>
<?php if($profession == 38){?><select name="inv[]" class="full"><option disabled selected>аксессуар шарлатана</option><option>хрустальный шар</option><option>волшебная палочка</option><option>волшебная одежда</option></select><?php }?>
</fieldset>
<p class="clr">&nbsp;</p>
<fieldset class="ib w300" onchange="steigerung();">
<legend class="c"><?php tsl('Vorteile','Advantages','Достоинства');?></legend>
<div class="full l"><input type="checkbox" name="adv" id="vt_gabe" value="1" data-ap="10" /> <label for="vt_gabe">Дар:</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/gabe/4-1-0-18" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="vt_magie" value="2" data-ap="10" <?php if($is_mage){ echo 'checked';}?> disabled /> <label for="vt_magie">Магический дар</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/zauberer/4-1-0-19" target="_blank" title="">?</a>]</small></div>
<div class="full l">&nbsp; &nbsp; <input type="checkbox" name="adv" id="vt_aura" value="3" data-ap="5" /> <label for="vt_aura">Скрытая аура</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/verhuellte_aura/4-1-0-20" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="vt_karma" value="4" data-ap="10" <?php if($is_priest){ echo 'checked';}?> disabled /> <label for="vt_karma">Кармический дар</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/geweihte/4-1-0-21" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="vt_spezialisierung" value="5" data-ap="10" /> <label for="vt_spezialisierung">Специализация</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/spezialisierung/4-1-0-17" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="vt_sinn" value="6" data-ap="5" /> <label for="vt_sinn">Обостренное чутье</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/herausragender_sinn/4-1-0-22" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="vt_belastung" value="7" data-ap="5" /> <label for="vt_belastung">Привычка к нагрузке</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/belastungsgewoehnung/4-1-0-23" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="vt_immunitaet" value="8" data-ap="5" /> <label for="vt_immunitaet">Иммунитет к яду/болезни</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/immunitaet/4-1-0-24" target="_blank" title="">?</a>]</small></div>
</fieldset><fieldset class="ib w300" onchange="steigerung();">
<legend class="c"><?php tsl('Nachteile','Disadvantages','Недостатки');?></legend>
<div class="full l"><input type="checkbox" name="adv" id="nt_untugend" value="51" data-ap="-5" /> <label for="nt_untugend">Порок</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/schlechte_eigenschaft/4-1-0-26" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="nt_angst" value="52" data-ap="-10" /> <label for="nt_angst">Фобия</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/angst/4-1-0-27" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="nt_farbenblind" value="53" data-ap="-5" /> <label for="nt_farbenblind">Дальтонизм</label> <small>[<a href="" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="nt_verstummelt" value="54" data-ap="-10" /> <label for="nt_verstummelt">Увечье</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/verstuemmelt/4-1-0-28" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="nt_pech" value="55" data-ap="-10" /> <label for="nt_pech">Невезение</label> <small>[<a href="" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="nt_sinn" value="56" data-ap="-5" /> <label for="nt_sinn">Притупленное чутье</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/eingeschraenkter_sinn/4-1-0-29" target="_blank" title="">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="nt_unfrei" value="57" data-ap="-5" /> <label for="nt_unfrei">Неволя</label> <small>[<a href="//dsa.d20rpg.net/dir/profan/vor_nachteil/4-1-0-30" target="_blank" title="раб / крепостной">?</a>]</small></div>
<div class="full l"><input type="checkbox" name="adv" id="nt_prinzip" value="58" data-ap="-5" /> <label for="nt_prinzip">Принципы/обязательства</label> <small>[<a href="" target="_blank" title="">?</a>]</small></div>
</fieldset>
<!-- /stats -->