<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-03 12:46:36
         compiled from "D:\WWW\web_20156\A_index\website\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1929255b3b4eb54d966-82006691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1478cef1288cbb48bbd091e21b0e24adb51af37' => 
    array (
      0 => 'D:\\WWW\\web_20156\\A_index\\website\\templates\\header.html',
      1 => 1441195950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1929255b3b4eb54d966-82006691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55b3b4eb5d6505_99005981',
  'variables' => 
  array (
    'title' => 0,
    'uid' => 0,
    'logo' => 0,
    'csstype' => 0,
    'con_data' => 0,
    'money' => 0,
    'agmoney' => 0,
    'ogmoney' => 0,
    'mgmoney' => 0,
    'ctmoney' => 0,
    'bbinmoney' => 0,
    'lebomoney' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b3b4eb5d6505_99005981')) {function content_55b3b4eb5d6505_99005981($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("public.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("public", 'local'); ?>
<!DOCTYPE html>
<html class="first zh-cn "><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
/standard.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
/bentley.css?v=ver35.33" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
/font-awesome.css" rel="stylesheet">
<style>
.first-btn.download{ background-image:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/btn_download.png');}
.first-btn.promotions{ background-image:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/btn_promotions.png');}
.first-btn.join{ background-image:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/btn_joinus2.png');}
.first-btn.mobile{ background-image:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/btn_mobile.png');}
.page-btn.download{ background-image:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/btn_download02.png');}
.page-btn.promotions{ background-image:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/btn_promotions02.png');}
.page-btn.join{ background-image:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/btn_joinus02.png');}
.page-btn.mobile{ background-image:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/btn_mobile02.png');}
.header-bottom{ background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/network.png') no-repeat 6px 17px;}
.news-wrap{ background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/newsbg02.png') no-repeat center top;}
.first-img{ background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/slogan.png') no-repeat center top;}
.first .news-wrap{ background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/newsbg01.png') no-repeat center top;}
.first.is-login .news-wrap{ background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/newsbg03.png') no-repeat center top;}
/*banner-wrap*/
.banner-wrap{ background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/title_welcome.png') no-repeat center top;}

.livetop .banner-wrap { background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/title_live.png') no-repeat center top;}
.ltlottery .banner-wrap { background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/title_lottery.png') no-repeat center top;}
.game3dfight .banner-wrap { background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/title_game3dfight.png') no-repeat center top;}
.memberexclusiveii .banner-wrap { background:url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/title_memberexclusiveii.png') no-repeat center top;}

</style>
<link href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
/jquery-ui-1.9.2.custom.css?v=ver13.32" type="text/css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
/jquery-ui-1.8.21.custom.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
/top.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
/float.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
/swfobject.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  document.oncontextmenu=stop; 
<?php echo '</script'; ?>
>
</head>
<body>
<div id="nav-ball" class="ele-lsub-group" style="width: 136px; height: 32px; top: 75px; position: absolute; left: 534px; z-index: 999; display: none;">
  <div style="position: absolute; bottom: 0px;" class="lsub-inner-wrap">
   <span class="lsub-front-bg"></span>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=bbin')"<?php }?> target="mem_index" title="BB体育">BB体育</a>
     <a href="javascript:void(0);" onclick="getPager('-','sports');" target="mem_index" title="体育投注" class="">体育投注</a>
   <span class="lsub-back-bg"></span>
 </div>
</div>

<div id="nav-live" class="ele-lsub-group" style="width: 360px; height: 32px; top: 75px; position: absolute; left: 514px; z-index: 999; display: none;overflow:none;">
  <div style="bottom: 0px;" class="lsub-inner-wrap">
   <span class="lsub-front-bg"></span>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=ag')"<?php }?> target="mem_index" title="AG视讯" class="">AG视讯</a>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=mg')"<?php }?> target="mem_index" title="MG视讯" class="">MG视讯</a>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=og')"<?php }?> target="mem_index" title="OG视讯" class="">OG视讯</a>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=ct')"<?php }?> target="mem_index" title="CT视讯" class="">CT视讯</a>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=lebo')"<?php }?> target="mem_index" title="LEBO视讯" class="">LEBO视讯</a>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=bbin')"<?php }?> target="mem_index" title="BBIN视讯" class="">BBIN视讯</a>
   <span class="lsub-back-bg"></span>
 </div>
</div>

<div id="nav-game" class="ele-lsub-group" style="width: 200px; height: 32px; top: 75px; position: absolute; left: 664px; z-index: 999; display: none;">
  <div style="position:absolute;bottom: 0px;" class="lsub-inner-wrap">
   <span class="lsub-front-bg"></span>
     <a href="javascript:void(0);" onclick="getPager('-','egame','m');" target="mem_index" title="MG电子">MG电子</a>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=ag')"<?php }?>  target="mem_index" title="AG电子" class="">AG电子</a>
     <a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['uid']->value)) {?>onclick="alert('您尚未登录，请先登录再进行游戏!')"<?php } else { ?>onclick="opengeme('/video/games/login.php?g_type=ag')"<?php }?> target="mem_index" title="BBIN电子" class="">BBIN电子</a>
   <span class="lsub-back-bg"></span>
 </div>
</div>


<?php echo '<script'; ?>
>
$(function () {
	$('#LS-live, #nav-live').hover(function(){ 
		$("#nav-live").css("display","block");
	}, function(){$("#nav-live").css("display","none");
    });

    $('#LS-ball, #nav-ball').hover(function(){ 
		$("#nav-ball").css("display","block");
	}, function(){$("#nav-ball").css("display","none");
    });

     $('#LS-game, #nav-game').hover(function(){ 
		$("#nav-game").css("display","block");
	}, function(){$("#nav-game").css("display","none");
    });
    
    $("#username").focus(function(){
	  $(".login-placeholder").css("opacity",0);
	});

})
<?php echo '</script'; ?>
>  

<!---->
<div id="mainBody">
<div id="page-header">
    <div class="header clearfix">
       <div class="header-logo">                                                
		<div id="ele-logo-wrap">
		    <a style="opacity: 1;" href="" target="mem_index" id="ele-logo-img" title=""></a>
		</div>
<style>
    #ele-logo-wrap,
    #ele-logo-img {
        width: 284px;
        height: 90px;
        background-image: url('<?php echo $_smarty_tpl->tpl_vars['logo']->value['logo_url'];?>
');
        background-repeat: no-repeat;
        display: block;
        cursor: pointer;
    }
    #ele-logo-wrap{ background-position: 100% 100%;}
    #ele-logo-img { background-position: 0 0; }
    </style>

<?php echo '<script'; ?>
>
    var ms = 0;
    $('#ele-logo-wrap > a').hover(function() {
        $(this).stop().animate({'opacity': 0}, ms);
    }, function() {
        $(this).stop().animate({'opacity': 1}, ms);
    });
<?php echo '</script'; ?>
>        
</div>
     <div class="mainnav clearfix">
         <ul>
            <li class="LS-first">
                <a href="./" target="mem_index" <?php if ($_smarty_tpl->tpl_vars['csstype']->value==1) {?>class="current"<?php }?>>
                   <span class="title"></span>
                      首页</a>
            </li>
            <li class="LS-ball" id="LS-ball">
                <a href="javascript:void(0);" onclick="getPager('-','sports','m');" <?php if ($_smarty_tpl->tpl_vars['csstype']->value==8) {?>class="current"<?php }?>>
                   <span class="title"></span>
                            体育赛事 </a>
             </li>
            <li class="LS-live" id="LS-live">
                <a href="javascript:void(0);" onclick="getPager('-','livetop','m');" target="mem_index" <?php if ($_smarty_tpl->tpl_vars['csstype']->value==3) {?>class="current"<?php }?> target="mem_index">
                    <span class="title"></span>
                            视讯直播                        </a>
                        <!-- 子選單 -->
            </li>
             <li class="LS-game" id="LS-game">
                       <a href="javascript:void(0);" onclick="getPager('-','egame','m');" target="mem_index" <?php if ($_smarty_tpl->tpl_vars['csstype']->value==7) {?>class="current"<?php }?> target="mem_index" class=" ">
                            <span class="title"></span>
                            电子游艺                        </a>
                        <!-- 子選單 -->
                                            </li>
                                    <li class="LS-ltlottery">
                        <a href="javascript:void(0);" onclick="getPager('-','lottery');" target="mem_index" <?php if ($_smarty_tpl->tpl_vars['csstype']->value==2) {?>class="current"<?php }?> >
                            <span class="title"></span>
                            彩票游戏                        </a>
                        <!-- 子選單 -->
                                            </li>
                                    <li class="LS-memberexclusiveii">
                        <a href="javascript:void(0);" onclick="getPager('-','youhui');" target="mem_index" class="js-article-color ">
                            <span class="title"></span>
                            优惠专区                        </a>
                        <!-- 子選單 -->
                                            </li>
                                    <li class="LS-mobile">
                        <a  class=" " href="javascript:void(0);" onclick="getPager('-','iword','5');">
                            <span class="title"></span>
                            代理合作                        </a>
                        <!-- 子選單 -->
                                            </li>
                                    <li class="LS-service">
                        <a href="javascript:void(0);" onclick="OnlineService('<?php echo $_smarty_tpl->tpl_vars['con_data']->value['online_service'];?>
');">
                            <span class="title"></span>
                            在线客服                        </a>
                        <!-- 子選單 -->
                             </li>
             </ul>
           </div>
        <div class="clear"></div>
    </div>
    <div class="header-bottom-bg">
               <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
               <div class="header-bottom clearfix" style="background:none;">
            <!-- 登入 -->

					<div class="mem-info">
					<style>
					.is-login .header-bottom {
						    background: none;
					}
					.ele-accinfo{
					    display: inline-block;
					    padding-right: 5px;
					    }
					.ele-accinfo .fa{
					    padding: 0 2px;
					    font-size: 14px;
					}
					.ele-first-balance{
					    display: inline-block;
					}
					.ele-acc-unit {
					    display: inline-block;
					}
					.ele-obalance-wrap{
					    position: relative;
					    display: inline-block;
					}
					.ele-other-balance{
					    cursor: pointer;
					}
					</style>

					    <div class="ele-accinfo ele-acc-name"><span>帐号：</span><strong><?php echo $_SESSION['username'];?>
</strong></div>
						<div class="ele-acc-unit">
						        <div id="_bbsportBalance" class="ele-accinfo ele-first-balance">
						           <span>系统余额：</span>
						           <strong><?php echo $_smarty_tpl->tpl_vars['money']->value;?>
</strong>
						        </div>
							    <div id="js-ele-obalance-wrap" class="ele-obalance-wrap">
								    <div class="ele-accinfo ele-other-balance">
								        <i class="fa fa-plus-square"></i>
								    </div>
							    </div>
							    	   <div id="js-ele-obalance-item-wrap" class="ele-obalance-item-wrap ele-item-style-cover" style="">
		  <div class="ele-obalance-item">
		         <div id="_sunplueBalance" class="ele-obalance"><span>系统余额：</span><strong><?php echo $_smarty_tpl->tpl_vars['money']->value;?>
</strong></div>
		         <div id="_AGBalance" class="ele-obalance"><span>AG视讯余额：</span><strong><?php echo $_smarty_tpl->tpl_vars['agmoney']->value;?>
</strong></div>
		         <div id="_OGBalance" class="ele-obalance"><span>OG视讯余额：</span><strong><?php echo $_smarty_tpl->tpl_vars['ogmoney']->value;?>
</strong></div>
		         <div id="_MGBalance" class="ele-obalance"><span>MG视讯余额：</span><strong><?php echo $_smarty_tpl->tpl_vars['mgmoney']->value;?>
</strong></div>
		         <div id="_CTBalance" class="ele-obalance"><span>CT视讯余额：</span><strong><?php echo $_smarty_tpl->tpl_vars['ctmoney']->value;?>
</strong></div>
		         <div id="_BBINBalance" class="ele-obalance"><span>BBIN视讯余额：</span><strong><?php echo $_smarty_tpl->tpl_vars['bbinmoney']->value;?>
</strong></div>
		         <div id="_LEBOBalance" class="ele-obalance"><span>LEBO视讯余额：</span><strong><?php echo $_smarty_tpl->tpl_vars['lebomoney']->value;?>
</strong></div>
		  </div>
		  <div class="ele-balance-tool clearfix">
		       <a href="javascript:openmember('3');">额度转换</a>
		  </div>
   <style>
        /*clear float*/
        .clearfix:before, .clearfix:after { content:""; display:table;}
        .clearfix:after { clear:both;}
        .clearfix { *zoom:1;}
        .ele-obalance-item-wrap{
            position: absolute;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            width: 270px;
            -webkit-box-shadow: 0 2px 8px rgba(0,0,0,0.5);
            -moz-box-shadow: 0 2px 8px rgba(0,0,0,0.5);
            box-shadow: 0 2px 8px rgba(0,0,0,0.5);
            border: 1px solid #CCC /9;
            border-radius: 2px;
            color: #000;
            font-size: 12px;
            background: #FAFAFA;
            cursor: default;
            z-index: 9999;
            left: 0;
        }
        .ele-obalance-item{
            padding: 16px;
            border: 1px solid #EEE;
        }
        .ele-obalance-item strong{
            font-weight: normal;
        }
        .ele-obalance{
            padding-bottom: 2px;
            color: #444;
        }
        /* 額度轉換 */
        .ele-balance-tool{
            padding: 4px;
            background: #F4F4F4;
        }
        .ele-balance-tool a{
            float: right;
            padding: 4px 8px;
            color: #FFF;
            background: #555;
            -o-transition: background-color .20s linear;
            -webkit-transition: background-color .20s linear;
            -moz-transition: background-color .20s linear;
            transition:  background-color .20s linear;
            border-radius: 2px;
            text-decoration: none;
        }
        .ele-balance-tool a:hover{
            background: #000;
        }
   </style>
</div>
						</div>
						 <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
/top_balunce.js"><?php echo '</script'; ?>
>
					   </div>
            <!--  sub  -->
            <div class="SU-Menual">
                <ul class="login-Menual">
                   <li>
                    <a id="su-deposite" href="javascript:openmember('1');" title="线上存款">线上存款</a>
                    </li>
                   <li>
                    ｜<a id="su-withdraw" href="javascript:openmember('2');" title="线上取款">线上取款</a>
                    </li>
                     <li>
                    ｜<a id="su-switch" href="javascript:openmember('3');" title="额度转换">额度转换</a>
                    </li>
                    <li>
                    ｜
                     <a id="su-macenter" href="javascript:openmember('4');" title="会员中心">会员中心</a>
                   </li>
                    <li>
                    ｜
                     <a id="su-macenter" href="javascript:openmember('5');" title="投注记录">投注记录</a>
                   </li>

                     <li>
                    ｜<a id="su-msg" href="javascript:openmember('8');" title="未读讯息">未读讯息</a>
                    (<span id="MsgNotReadCount">0</span>) 
                    </li>
                     <li>
                     <a id="su-logout" href="./index.php?a=logout" title="登出">登出</a>
                     </li>
                </ul>
            </div>
         </div>
                            
	<style>
	.ele-lang-wrap{
	    line-height: 20px;
	    width:80px;
	    position: relative;
	    top: 1px;
	    z-index: 10;
	    text-align: left;
	    border:1px solid #AEAEAD;
	    background: url('<?php echo $_smarty_tpl->getConfigVariable('images');?>
/lang_arrow_down.jpg') right 1px no-repeat #FFF;
	}
	.ele-lang-title{
	    height: 20px;
	    line-height: 20px;
	    cursor: pointer;
	    padding-right: 15px;
	    text-indent: 5px;
	    color: #000;
	}

	</style>
	 <?php } else { ?> 
	 <div class="header-bottom clearfix">
	      <div class="login-wrap" style="float:right">
	        <p class="login-unit login-unit-user">
	            <label style="opacity: 1;display:block;" name="username" for="username" class="login-placeholder">帐号</label>
	            <input value="" name="username" size="12" id="username" maxlength="15" class="login-input login-acc" tabindex="1" pattern="[a-zA-Z0-9]{4,15}" required="" type="text">
	        </p>
	        <p class="login-unit login-unit-pwd">
	            <label style="opacity: 1;display:block;" name="passwd" for="passwd" class="login-placeholder">密码</label>
	            <input name="passwd" autocomplete="off" size="13" id="password" maxlength="13" class="login-input" tabindex="2" pattern="[a-zA-Z0-9]{6,13}" required="" type="password">
	        </p>
	        <p class="login-unit login-unit-chk">
	            <label style="opacity: 1;" name="rmNum" for="rmNum" class="login-placeholder">验证码</label>
	            <input name="rmNum" id="rmNum" size="7" maxlength="4" title="( 点选此处产生新验证码 )" class="login-input" onfocus="getYzm();" tabindex="3" pattern="\d{4}" required="" type="text">
	            <img src="./yzm.php" id="vImg" style="margin-left:10px; cursor:pointer;position: absolute;right: 2px;bottom: 5px;cursor: pointer;" width="40" height="18" alt="( 点选此处产生新验证码 )" title="( 点选此处产生新验证码 )" onclick="getYzm();" height="18" width="40">
	        </p>
	        <input name="Submit" value="登入" onclick="aLeftForm1Sub()" class="login-submit hover" tabindex="4" type="submit">
	        <a href="javascript:void(0);" onclick="getPager('-','zhuce');" class="login-join hover">加入会员</a>
	        <a href="javascript:void(0);" onclick="OnlineService('<?php echo $_smarty_tpl->tpl_vars['con_data']->value['online_service'];?>
');" class="login-forgetpwd hover">忘记密码</a>      
	      </div>
    </div>
  <?php }?>
</div>
    <!--*本站特例結構*-->
  <?php }} ?>
