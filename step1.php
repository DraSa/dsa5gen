<h1><?php tsl('Helden Erstellen','Create a Hero','Создать Героя');?></h1>
<input type="hidden" value="2" name="step" />
<input type="hidden" value="100" name="exp" />
<p><input type="text" name="vorname" placeholder="<?php tsl('Name des Helden','Hero’s name','Имя героя');?>" class="c w300" required="required" /></p>
<p><?php tsl('Geschlecht','Gender','Пол');?>:&nbsp;
<input type="radio" name="geschlecht" id="male" value="0" checked /> <label for="male"><?php tsl('Männlich','Male','мужской');?></label>
<input type="radio" name="geschlecht" id="female" value="1" /> <label for="female"><?php tsl('Weiblich','Female','женский');?></label>
</p>
<p><?php tsl('Geburtsdatum','Date of birth','Дата рождения');?>:&nbsp;
<input type="number" name="tsatag" value="<?php echo rand(1,30);?>" min="1" max="30" class="w60" onkeydown="return false" />
<select name="tsamond">
<option value="1"><?php tsl('Praios (Sommer)','Praios (Summer)','Прайос (лето)');?></option>
<option value="2"><?php tsl('Rondra (Sommer)','Rondra (Summer)','Рондра (лето)');?></option>
<option value="3"><?php tsl('Efferd (Herbst)','Efferd (Autumn)','Эфферд (осень)');?></option>
<option value="4"><?php tsl('Travia (Herbst)','Travia (Autumn)','Травия (осень)');?></option>
<option value="5"><?php tsl('Boron (Herbst)','Boron (Autumn)','Борон (осень)');?></option>
<option value="6"><?php tsl('Hesinde (Winter)','Hesinde (Winter)','Хезинда (зима)');?></option>
<option value="7"><?php tsl('Firun (Winter)','Firun (Winter)','Фирун (зима)');?></option>
<option value="8"><?php tsl('Tsa (Winter)','Tsa (Winter)','Тса (зима)');?></option>
<option value="9"><?php tsl('Phex (Frühling)','Phex (Spring)','Фекс (весна)');?></option>
<option value="10"><?php tsl('Peraine (Frühling)','Peraine (Spring)','Перайна (весна)');?></option>
<option value="11"><?php tsl('Ingerimm (Frühling)','Ingerimm (Spring)','Ингеримм (весна)');?></option>
<option value="12"><?php tsl('Rahja (Sommer)','Rahja (Summer)','Райя (лето)');?></option>
</select>
<input type="number" name="tsajahr" value="<?php echo rand(1000,1020);?>" min="900" max="1040" class="w80" />
</p>
<p><?php tsl('Heldentyp','Type','Тип');?>:&nbsp;
<input type="radio" name="typ" value="1" id="typ1" onclick="select_type(this.value);" checked /> <label for="typ1"><?php tsl('Krieger','Warrior','Воин');?></label>
<input type="radio" name="typ" value="2" id="typ2" onclick="select_type(this.value);" /> <label for="typ2"><?php tsl('Streuner','Rogue','Плут');?></label>
<input type="radio" name="typ" value="3" id="typ3" onclick="select_type(this.value);" /> <label for="typ3"><?php tsl('Zauberer','Spellcaster','Маг');?></label>
<input type="radio" name="typ" value="4" id="typ4" onclick="select_type(this.value);" /> <label for="typ4"><?php tsl('Geweihte','Priest','Жрец');?></label>
</p>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/80571971.png" alt="DSA5 Mensch" height="150" /><br />
<input type="radio" name="spezies" value="1" required="required" checked id="human" />
<b><?php tsl('Mensch','Human','Человек');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/81329881.png" alt="DSA5 Halbelf" height="150" /><br />
<input type="radio" name="spezies" value="2" required="required" id="halfelf" />
<b><?php tsl('Halbelf','Halfelf','Полуэльф');?></b>
</label>
<label class="hero-img" title="<?php tsl('Muss ein Zauberer sein','Has to be a Spellcaster','Должен быть магом');?>">
<img src="https://dsa.d20rpg.net/_pu/0/83270515.png" alt="DSA5 Elf" height="150" /><br />
<input type="radio" name="spezies" value="3" id="elf" required="required" disabled="disabled" />
<b><?php tsl('Elf','Elf','Эльф');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/25029008.png" alt="DSA5 Zwerg" height="150" /><br />
<input type="radio" name="spezies" value="4" required="required" id="zwerg" />
<b><?php tsl('Zwerg','Dwarf','Цверг');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/67924569.png" alt="DSA5 Goblin" height="150" /><br />
<input type="radio" name="spezies" value="5" required="required" id="goblin" />
<b><?php tsl('Goblin','Goblin','Гоблин');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/14526203.png" alt="DSA5 Ork" height="150" /><br />
<input type="radio" name="spezies" value="6" required="required" id="ork" />
<b><?php tsl('Ork','Orc','Орк');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/70245578.png" alt="DSA5 Halbork" height="150" /><br />
<input type="radio" name="spezies" value="7" required="required" id="halbork" />
<b><?php tsl('Halbork','Halforc','Полуорк');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/25661269.png" alt="DSA5 Achaz" height="150" /><br />
<input type="radio" name="spezies" value="8" required="required" id="achaz" />
<b><?php tsl('Achaz','Achaz','Ахац');?></b>
</label>
<label class="hero-img">
<img src="https://dsa.d20rpg.net/_pu/0/47760138.png" alt="DSA5 Monster" height="150" /><br />
<input type="radio" name="spezies" value="9" required="required" id="monster" />
<b><?php tsl('Andere','Other','Другой');?></b>
</label>