﻿
<?
include(dirname(__FILE__)."./../../include/private_config.php");
//用户如果处于离线状态，则不允许投注
if(empty($_SESSION['uid']))
{
  echo '<script type="text/javascript">alert("您已经离线，请重新登陆");</script>';
  echo '<script type="text/javascript">top.location.href="/";</script>';
  exit;
}


$arr_zuhe;
  foreach ($_GET as $k => $v) {
    $class = explode('num', $k);
      if($class[1]!=''){

      $arr_zuhe[]=$v;

    }
  }
$arr_zuhe_num = count($arr_zuhe);
  if($_GET['class2'] == '二尾连中'){
    $num_arr_num =  2;
     if($arr_zuhe_num < $num_arr_num){
      echo "<script>alert('请至少选择二个号码!');parent.location.href='main_left.php';</script>";
      exit;
    }
  }elseif($_GET['class2'] == '三尾连中'){
    $num_arr_num =  3;
     if($arr_zuhe_num < $num_arr_num){
      echo "<script>alert('请至少选择三个号码!');parent.location.href='main_left.php';</script>";
      exit;
    }
  }elseif($_GET['class2'] == '四尾连中'){
    $num_arr_num =  4;
     if($arr_zuhe_num < $num_arr_num){
      echo "<script>alert('请至少选择四个号码!');parent.location.href='main_left.php';</script>";
      exit;
    }
  }elseif($_GET['class2'] == '二尾连不中'){
    $num_arr_num =  2;
     if($arr_zuhe_num < $num_arr_num){
      echo "<script>alert('请至少选择二个号码!');parent.location.href='main_left.php';</script>";
      exit;
    }
  }elseif($_GET['class2'] == '三尾连不中'){
    $num_arr_num =  3;
     if($arr_zuhe_num < $num_arr_num){
      echo "<script>alert('请至少选择三个号码!');parent.location.href='main_left.php';</script>";
      exit;
    }
  }elseif($_GET['class2'] == '四尾连不中'){
    $num_arr_num =  4;
     if($arr_zuhe_num < $num_arr_num){
      echo "<script>alert('请至少选择四个号码!');parent.location.href='main_left.php';</script>";
      exit;
    }
  }


  if(!empty($arr_zuhe)){
    $arr_zuhe_1=get_zuhe($arr_zuhe,$num_arr_num);
  }

// if(!defined('PHPYOU')) {
// 	exit('非法进入');
// }

// if ($_GET['class2']==""){echo "<script>alert('非法进入!');window.location.href='liuhecai.php?action=k_wsl';</script>";
// // exit;
// }

$n=0;
for ($t=0;$t<=10;$t=$t+1){

if ($_GET['num'.$t]!=""){
$number1.=$_GET['num'.$t].",";
$n=$n+1;
}
}


// $result=$mysqlt->query("select sum(sum_m) as sum_mm from c_bet where qishu='".$Current_Kithe_Num."' and  username='".$_SESSION['username']."' and mingxi_1='尾数连' and mingxi_3='".$_GET['class2']."'  order by id desc");
// $ka_guanuserkk1=$result->fetch_array();
// $sum_mm=$ka_guanuserkk1[0];



switch ($_GET['class2']){


 case "二尾连中":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=56;
$XF=23;
$rate_id=1301;
$urlurl="liuhecai.php?action=k_wsl&ids=二尾连中";
if ($n<2 or $n>8){echo "<script>alert('对不起，请选择二-八个尾数!');parent.location.href='main_left.php';</script>";
exit;
}
$zs=$n*($n-1)/2;

$mu=explode(",",$number1);
$mama=$mu[0].",".$mu[1];
for ($f=0;$f<count($mu)-2;$f=$f+1){
for ($t=2;$t<count($mu)-1;$t=$t+1){
if ($f!=$t and $f<$t){
$mama=$mama."/".$mu[$f].",".$mu[$t];
}
}
}
break;

case "三尾连中":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=57;
$XF=23;
$rate_id=1311;
$urlurl="liuhecai.php?action=k_wsl&ids=三尾连中";
if ($n<3 or $n>8){echo "<script>alert('对不起，请选择三-八个尾数!'); parent.location.href='main_left.php';</script>";
exit;}
$zs=$n*($n-1)*($n-2)/6;


$mu=explode(",",$number1);
$mama=$mu[0].",".$mu[1].",".$mu[2];
for ($h=0;$h<count($mu)-3;$h=$h+1){
for ($f=1;$f<count($mu)-2;$f=$f+1){
for ($t=3;$t<count($mu)-1;$t=$t+1){
if ($h!=$f and $h<$f and $f!=$t and $f<$t){
$mama=$mama."/".$mu[$h].",".$mu[$f].",".$mu[$t];
}
}
}
}

break;

case "四尾连中":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=58;
$XF=23;
$rate_id=1321;
$urlurl="liuhecai.php?action=k_wsl&ids=四尾连中";
if ($n<4 or $n>8){echo "<script>alert('对不起，请选择四-八个尾数!'); parent.location.href='main_left.php';</script>";
exit;}
$zs=$n*($n-1)*($n-2)*($n-3)/24;



$mu=explode(",",$number1);
$mama=$mu[0].",".$mu[1].",".$mu[2].",".$mu[3];
for ($h=0;$h<count($mu)-4;$h=$h+1){
for ($f=1;$f<count($mu)-3;$f=$f+1){
for ($t=2;$t<count($mu)-2;$t=$t+1){
for ($s=4;$s<count($mu)-1;$s=$s+1){
if ($h!=$f and $h<$f and $f!=$t and $f<$t and $t!=$s and $t<$s){
$mama=$mama."/".$mu[$h].",".$mu[$f].",".$mu[$t].",".$mu[$s];
}
}
}
}
}

break;



 case "二尾连不中":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=59;
$XF=23;
$rate_id=1340;
$urlurl="liuhecai.php?action=k_wsl&ids=二尾连不中";
if ($n<2 or $n>8){echo "<script>alert('对不起，请选择二-八个尾数!'); parent.location.href='main_left.php';</script>";
exit;}
$zs=$n*($n-1)/2;

$mu=explode(",",$number1);
$mama=$mu[0].",".$mu[1];
for ($f=0;$f<count($mu)-2;$f=$f+1){
for ($t=2;$t<count($mu)-1;$t=$t+1){
if ($f!=$t and $f<$t){
$mama=$mama."/".$mu[$f].",".$mu[$t];
}
}
}

break;

case "三尾连不中":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=60;
$XF=23;
$rate_id=1350;
$urlurl="liuhecai.php?action=k_wsl&ids=三尾连不中";
if ($n<3 or $n>8){echo "<script>alert('对不起，请选择三-八个尾数!'); parent.location.href='main_left.php';</script>";
exit;}
$zs=$n*($n-1)*($n-2)/6;


$mu=explode(",",$number1);
$mama=$mu[0].",".$mu[1].",".$mu[2];
for ($h=0;$h<count($mu)-3;$h=$h+1){
for ($f=1;$f<count($mu)-2;$f=$f+1){
for ($t=3;$t<count($mu)-1;$t=$t+1){
if ($h!=$f and $h<$f and $f!=$t and $f<$t){
$mama=$mama."/".$mu[$h].",".$mu[$f].",".$mu[$t];
}
}
}
}
break;

case "四尾连不中":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=61;
$XF=23;
$rate_id=1360;
$urlurl="liuhecai.php?action=k_wsl&ids=四尾连不中";
if ($n<4 or $n>8){echo "<script>alert('对不起，请选择四-八个尾数!'); parent.location.href='main_left.php';</script>";
exit;}
$zs=$n*($n-1)*($n-2)*($n-3)/24;

$mu=explode(",",$number1);
$mama=$mu[0].",".$mu[1].",".$mu[2].",".$mu[3];
for ($h=0;$h<count($mu)-4;$h=$h+1){
for ($f=1;$f<count($mu)-3;$f=$f+1){
for ($t=2;$t<count($mu)-2;$t=$t+1){
for ($s=4;$s<count($mu)-1;$s=$s+1){
if ($h!=$f and $h<$f and $f!=$t and $f<$t and $t!=$s and $t<$s){
$mama=$mama."/".$mu[$h].",".$mu[$f].",".$mu[$t].",".$mu[$s];
}
}
}
}
}
break;


}

$beted = beted_limit(7,$_GET['type'],$db_config);
//查询该玩法当前期数已下注金额

$ball_limit_num = $beted['sum(money)'];

?>


<link rel="stylesheet" href="./public/css/xp.css">
 <link rel="stylesheet" href="./public/css/mem_order_ft.css">
 <link rel="stylesheet" href="./public/css/mem_body_olympics.css" type="text/css">
 <!-- <link rel="stylesheet" href="./public/css/mem_order_sel.css?=" type="text/css"> -->
 <script src="../public/js/jquery-1.8.3.min.js"></script>
<style type="text/css">
<!--
body,td,th {
	font-size: 9pt;
}
.STYLE3 {color: #FFFFFF}
.STYLE4 {color: #000}
.STYLE2 {}
-->
</style></HEAD>
<SCRIPT language=JAVASCRIPT>
if(self == top) {location = '/';}
if(window.location.host!=top.location.host){top.location=window.location;}
</SCRIPT>

<!-- <SCRIPT language=javascript>
window.setTimeout("self.location='liuhecai.php?action=k_wsl'", 30000);
</SCRIPT> -->
<SCRIPT language=JAVASCRIPT>
if(self == top){location = '/';}

function ChkSubmit(){
    //设定『确定』键为反白


		document.all.btnSubmit.disabled = true;

document.form1.submit();
	}
</SCRIPT>


<SCRIPT language=javascript>var count_win=false;
function CheckKey(){
if(event.keyCode == 13) return true;
if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode > 95 || event.keyCode < 106)){alert("下注金额仅能输入数字!!"); return false;}
}

function SubChk(){
if(document.all.gold.value==''){
document.all.gold.focus();
alert("请输入下注金额!!");
return false;
}
if(isNaN(document.all.gold.value) == true){
document.all.gold.focus();
alert("下注金额仅能输入数字!!");
return false;
}


//if(!confirm("可蠃金额:"+Math.round(document.all.gold.value * document.all.ioradio.value / 1000 - document.all.gold.value)+"\n\n 是否确定下注?")){return false;}
document.all.btnCancel.disabled = true;
document.all.btnSubmit.disabled = true;
document.LAYOUTFORM.submit();
}

function CountWinGold(){
if(document.all.gold.value==''){
document.all.gold.focus();
alert('未输入下注金额!!!');
}else{
document.all.pc1.innerHTML=Math.round(document.all.gold.value * document.all.ioradio.value /1000 - document.all.gold.value);
//document.all.pc1.innerHTML=Math.round(document.all.gold.value * document.all.ioradio1.value);
count_win=true;
}
}
//function CountWinGold1(){
//if(document.all.gold.value==''){
//document.all.gold.focus();
//alert('未输入下注金额!!!');
//}
//else{
//document.all.pc1.innerHTML=Math.round(document.all.gold.value * document.all.ioradio1.value);
//count_win=true;
//}
//}
</SCRIPT>

<!-- <table height="13" cellspacing="0" cellpadding="0" border="0" width="100%">
        <tbody><tr>
          <td id="left_1" style="text-align:center; font-size:16px; font-weight:bold"><img src="/images/b002.jpg"></td>
        </tr>
      </tbody></table> -->
<script>

$(function(){
   var single_field_max = $("#single_field_max").text(); //单注总金额上限200000
     var single_note_max = $("#single_note_max").text();//单注金额上限20000
     var single_note_min = $("#single_note_min").text();
     var ball_limit_num = <?=$ball_limit_num ?>;//已投注的金额
     // alert(ball_limit_num);
    $(".single_note_min").text(single_note_min);
    $(".single_note_max").text(single_note_max);
    $(".single_field_max").text(single_field_max);

  //下单验证
  if($("#gold").val()>0 && $("#bet_val")){
    var zs = $("#zs_div").text();
    var bet_val3=$("#bet_val").text();
    var thi_val=$("#gold").val();
    new_val3 = thi_val*bet_val3*zs;

    $("#total").text(new_val3);
  }
  $("#gold").change(function() {
    var zs = $("#zs_div").text();
    var val2 = $(this).val();
    var val1=val2.replace(/\b(0+)/,"");

    $("#danzhu_money").val(val1);
    if(val1 != ""){
       var reg = /([`~!@#$%^&*()_+<>?:"{},\/;\'[\]])/ig;
         var reg1 = /([·~！#@￥%……&*（）——+《》？：“{}，。\、；’‘【\】])/ig;
         var reg2= /([a-zA-Z]*)/ig;
         $(this).val(val1.replace(reg, ""));
         $(this).val(val1.replace(reg1, ""));
         $(this).val(val1.replace(reg2, ""));
         val1 = $(this).val();
      if(val1<0 || val1 >parseInt(single_note_max) || val1 < parseInt(single_note_min)){
        alert("金额格式错误或超过上限！");
        $(this).val(0);
        $("#total").text(0);
        $("#pc").text(0);
      }else{
        var bet_val=parseInt($("#bet_val").text());
        var new_val=parseInt(val1*bet_val*zs);
        if(parseInt(val1) >=parseInt(single_note_min) && parseInt(val1) <=parseInt(single_note_max) && parseInt(val1*zs)<=parseInt(single_field_max) && (parseInt(val1*zs)+parseInt(ball_limit_num)) <=parseInt(single_field_max)){
            new_val+="";
            Math.round(new_val);
            $("#jq").val(parseInt(new_val));

            $("#pc").text(parseInt(zs)*parseInt(val1));
          $("#total").text(parseInt(new_val));
        }else{
           alert("金额格式错误或超过上限！");
          $(this).val(0);
          $("#total").text(0);
          $("#pc").text(0);

        }
      }
    }else{
      $("#total").text('0');
    }
  });


  //点击赔率下注
  $("#order_form").submit(function(event) {
    var val = $("#gold").val();
    if(val=="" || val ==0){
      alert("请填写下注金额！");
        return false;
    }
    var val1 = $("#total").text();
    var msg = "下注金额："+val1+"\n"+"确定进行下注吗？";
    if(isNaN(val) || isNaN(val1)){
      alert("金额错误！");
        return false;
    }
    if(!confirm(msg)){
      return false;
    }else{
      if(isNaN($("#total").text())){
        alert("金额错误！");
        return false;
      }
    }
  });
  //点击下注下注
  $("#order_form_1").submit(function(event) {
    var val = $("#total_sum").text();
    if(val=="" || val ==0){
      alert("请填写下注金额！");
        return false;
    }
    var val1 = $("#total").text();
    var msg = "下注金额："+val1+"\n"+"确定进行下注吗？";
    if(isNaN(val) || isNaN(val1)){
      alert("金额错误！");
        return false;
    }
    if(!confirm(msg)){
      return false;
    }else{
      if(isNaN($("#total").text())){
        alert("金额错误！");
        return false;
      }
    }
  });

})
 </script>

	<body>
  <div id="zs_div" style="display:none"><?=$zs ?></div>
<div id="bet_val" style="display:none"><?=ka_bl($rate_id,"rate")?></div>
  <div style="display:none">
<TABLE class=Tab_backdrop cellSpacing=0 cellPadding=0 width=100% border=0>
  <tr>
    <td valign="top" class="Left_Place">
                <TABLE class=t_list cellSpacing=1 cellPadding=0 width=100% border=0>
          <tr>
            <td height="25" colspan="2" align="center" bgcolor="#504a16" style="color:#FFF">确认下注</td>
          </tr>


          <form action="liuhecai.php?action=k_tanwsl&class2=<?=$_GET['class2']?>" method="post" name="LAYOUTFORM" id="form1" onSubmit="return false">


            <tr>
              <td bgcolor="#F9F7D7" colspan="2" style="LINE-HEIGHT: 22px" align="center"><?=ka_bl($rate_id,"class2")?></FONT>
    			<div align="center"><b><?=$number1?></b></div></td>
            </tr>
        <tr>
          <td height="25" bgcolor="#ffffff"  colspan="2"style="LINE-HEIGHT: 23px"><div align="center"><strong>组合共&nbsp;<font color=ff0000><?=$zs?></font>&nbsp;组</strong></div></td>
        </tr>
            <tr>
              <td height="25" bgcolor="#ffffff" colspan="2" style="LINE-HEIGHT: 23px">&nbsp;下注金额:
             <INPUT
name="gold" id="" onKeyPress="return CheckKey()"
onkeyup="return CountWinGold()" value="<?=$_GET['gold']?>" size=8 maxLength="8">
              </td>
            </tr>
        <tr>
          <td height="25" bgcolor="#ffffff" colspan="2" style="LINE-HEIGHT: 23px">&nbsp;总下注金额: <strong><FONT id=pc1 color=#ff0000><?=$_GET['Num_1']*$zs?>&nbsp;</FONT></strong></td>
        </tr>
            <tr>
              <td height="25" colspan="2" bgcolor="#ffffff">&nbsp;单注限额: <span class="single_note_max">20000</span></td>
            </tr>
            <tr>
              <td height="25" colspan="2" bgcolor="#ffffff">&nbsp;单项限额:<span class="single_field_max">200000</span></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="center" bgcolor="#ffffff" style="LINE-HEIGHT: 23px"><input type='hidden' name="rate_id" value='<?=$rate_id?>' />

                  <input  class="button_a"  onClick="self.location='liuhecai.php?action=k_wsl';" type="button" value="放弃" name="btnCancel" />
                &nbsp;&nbsp;
                <input  class="button_a"   type="submit" value="确定" onClick="SubChk(<?=$zs?>);" name="btnSubmit" />
              </td>
            </tr>
            <input type="hidden"
value="SP11" name="concede" />
            <input type="hidden" value='<?=ka_bl($rate_id,"rate")*1000?>' name="ioradio" />
            <input type="hidden" value='<?=$zs?>' name="ioradio1" />
            <input type="hidden" value='<?=$mama?>' name="number1" />
          </form>
        </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="3"></td>
          </tr>
      </table></td>
  </tr>
</table>
</div>
<!-- 显示下注信息 -->
<?php
if($_GET['show'] != 1){
 ?>
 <form autocomplete="off" name="order_form" id="order_form" method="get" action="liuhecai.php">
<input type="hidden" name="show" value="1">
<input type="hidden" name="action" value="<?=$_GET['action'] ?>">
<input type="hidden" name="class2" value="<?=$_GET['class2'] ?>">
<input type="hidden" name="ids" value="<?=$_GET['ids'] ?>">
<input type="hidden" name="rtype" value="<?=$_GET['rtype'] ?>">
<input type="hidden" name="xiazhu_money" value="<?=$_GET['ids'] ?>">
<input type="hidden" name="jq" id="jq" value="">
<input type="hidden" name="rrtype" value="<?=$_GET['rrtype'] ?>">
<input type="hidden" name="pabc" value="<?=$_GET['pabc'] ?>">
<input type="hidden" name="pabc2" value="<?=$_GET['pabc2'] ?>">
<input type="hidden" name="pan1" value="<?=$_GET['pan1'] ?>">
<input type="hidden" name="pan2" value="<?=$_GET['pan2'] ?>">
<input type="hidden" name="pan3" value="<?=$_GET['pan3'] ?>">
<input type="hidden" name="pan4" value="<?=$_GET['pan4'] ?>">
<input type="hidden" name="danzhu_money" value="" id="danzhu_money">
  <?php
foreach ($_GET as $k => $v) {
    $class = explode('num', $k);
      if($class[1]!=''){

      echo '<input type="hidden" name="'.$k.'" value="'.$v.'">';

    }
  }
   ?>



<div class="ord">
    <div class="title"><h1>尾数连-<?=$_GET['class2']  ?></h1></div>
    <div class="main">
      <!--div class="leag"><strong></strong><span class="tName">连码-三全中</span></div>
      <div class="teamName"><span class="tName"></span></div-->
      <p class="team" style="text-align:center">
      <?php foreach ($arr_zuhe_1 as  $v) {

      ?>


         <?=$v ?> @ <font color="#ff0000"><?=ka_bl($rate_id,"rate")?></font><br>

    <?php } ?>
      -----------------------<br>组合 共 <font color="red"><?=$zs?></font> 组</p>
      <p class="error" style="display: none;"></p>
      <div class="betdata">
        <p class="amount">交易金额：<input name="gold" type="text" class="txt" id="gold" onKeyPress="return CheckKey(event)" onKeyUp="return CountWinGold()" size="8" maxlength="10" value="<?=$_GET['Num_1']?>"></p>
        <p class="mayWin"><span class="bet_txt">总下注金额：</span><font id="pc"><?=$_GET['Num_1']*$zs?></font></p>

        <!-- <p class="mayWin"><span class="bet_txt">可赢金额：</span><font id="total"><?php echo ka_bl($rate_id,"rate")*$zs*$_GET['Num_1']  ?></font></p> -->

        <p class="minBet"><span class="bet_txt">单注最低：</span><span class="single_note_min">0</span></p>

        <p class="maxBet"><span class="bet_txt">单注限额：<span class="single_note_max">20000</span></span></p>
        <p class="maxBet_1"><span class="bet_txt">单项限额：<span class="single_field_max">200000</span></span></p>
    </div>
    </div>
    <div id="gWager" style="display: none;position: absolute;"></div>
    <div id="gbutton" style="display: block;position: absolute;"></div>
    <div class="betBox">
      <input type="button" name="btnCancel" value="取消" onClick="window.parent.showOrder();" class="no">
      <input type="submit" name="btnSubmit" value="确定交易"  class="yes">
    </div>
  </div>
  </form>
  <?php } ?>

<?php
if(!empty($_GET['show']) && $_GET['show'] == 1){
  echo "<script>";
  echo 'document.LAYOUTFORM.submit();';
  echo "</script>";
}

 ?>
</BODY></HTML>
