<?php include_once('header.php');
include_once('functions.php');
$step = 1; $typ = 1; $spezies = 0;

if (isset($_POST['step'])) { $step =  $_POST['step']; }
if (isset($_POST['vorname'])) { $heroname =  $_POST['vorname']; }
if (isset($_POST['exp'])) { $ap =  $_POST['exp']; $exp =  $_POST['exp']; }
if (isset($_POST['geschlecht'])) { $geschlecht =  $_POST['geschlecht']; }
if (isset($_POST['spezies'])) { $spezies =  $_POST['spezies']; if(($step==1) && ($spezies==2 || $spezies==3)){ $step++; } }
if (isset($_POST['kultur'])) { $kultur =  $_POST['kultur']; }
if (isset($_POST['typ'])) { $typ =  $_POST['typ']; }
if (isset($_POST['profession'])) { $profession = $_POST['profession']; } else { $profession = 0; }
if (isset($_POST['proname'])) { $proname =  $_POST['proname']; }
if (isset($_POST['tsatag'])) { $tsa_tag =  $_POST['tsatag']; }
if (isset($_POST['tsamond'])) { $tsa_mond =  $_POST['tsamond']; }
if (isset($_POST['tsajahr'])) { $tsa_jahr =  $_POST['tsajahr']; }
$is_mage = $is_priest = false;
if (isset($_POST['typ']) && isset($_POST['spezies'])) { if ($typ==3 || $spezies==2 || $spezies==3){ $is_mage = true; } }
if (isset($_POST['typ'])) { if ($typ==4){ $is_priest = true; } }
$race = get_species($spezies);?>
<form method="post" id="dsa5gen" name="dsa5gen" class="start-form" action="" enctype="multipart/form-data">
<?php if($step){
	$file = 'step'.$step.'.php';
	include($file);
}?>
<p><input type="submit" value="<?php tsl('Weiter','Next','Дальше');?>" class="w100" /></p>
</form>
<script>
var ae = ke = 0;
var is_mage = is_priest = false;
<?php if ($is_mage){?>is_mage = true; ae = 20;<?php }?>
<?php if ($is_priest){?>is_priest = true; ke = 20;<?php }?>
<?php $race = 1; $race = (int)$spezies;
if ($race==1){ //if human ?>
var m_le = 5; var m_sk = -5; var m_zk = -5;
<?php }
if ($race==2){ //if halfelf ?>
var m_le = 5; var m_sk = -4; var m_zk = -6;
<?php }
if ($race==3){ //if elf ?>
var m_le = 2; var m_sk = -4; var m_zk = -6;
<?php }
if ($race==4){ //if dwarf ?>
var m_le = 8; var m_sk = -4; var m_zk = -4;
<?php } ?>
function steigerung(){
a_mu = parseInt($('#attr_MU').val());
a_kl = parseInt($('#attr_KL').val());
a_in = parseInt($('#attr_IN').val());
a_ch = parseInt($('#attr_CH').val());
a_ff = parseInt($('#attr_FF').val());
a_ge = parseInt($('#attr_GE').val());
a_ko = parseInt($('#attr_KO').val());
a_kk = parseInt($('#attr_KK').val());
race = <?php echo $spezies;?>;
pro = <?php echo $profession;?>;
//mu (mage, druid, geode)
if (pro==31 || pro==40 || pro==34 || pro==35){ ae = 20 + a_mu; }
//kl (qabalya)
if (pro==41){ ae = 20 + a_kl; }
//in (elf, shaman)
if (pro==33 || pro==36 || pro==37){ ae = 20 + a_in; }
//ch (witch, charlatan, bard, dancer)
if (pro==32 || pro==38 || pro==39 || pro==42 || pro==43 || pro==44){ ae = ae + a_ch; }
//mu (Rondra2, Boron5, Firun7, Kor, Swafnir, Namenlose)
if (pro==72 || pro==75 || pro==77){ ke = 20 + a_mu; }
//kl (Praios1, Tavia4, Hesinde6, Nandus)
if (pro==71 || pro==74 || pro==76){ ke = 20 + a_kl; }
//in (Phex9, Peraine10, Ingerimm11, Aves)
if (pro==79 || pro==80 || pro==81){ ke = 20 + a_in; }
//ch (Efferd3, Tsa8, Rahja12, Ifirn)
if (pro==73 || pro==78 || pro==82){ ke = 20 + a_ch; }

$('#bv_le').val(a_ko + a_ko + m_le);
$('#bv_ae').val(ae);
$('#bv_ke').val(ke);
sk = a_mu + a_kl + a_in; sk = Math.ceil(sk/6); sk = sk + m_sk;
$('#bv_sk').val(sk);
zk = a_ko + a_ko + a_kk; zk = Math.ceil(sk/6); zk = zk + m_zk;
$('#bv_zk').val(zk);
au = Math.ceil(a_ge/2);
$('#bv_au').val(au);
ini = a_mu + a_ge; ini = Math.ceil(ini/2);
$('#bv_ini').val(ini);
}
</script>
<button onclick="save_pdf();">Save as PDF</button>
<?php include_once('footer.php');?>