<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-03 12:46:37
         compiled from "D:\WWW\web_20156\A_index\website\templates\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:1931955b3b4eb63be23-21935574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '428241daac74fcc9cc64ee3069bed5dff5c0bcb6' => 
    array (
      0 => 'D:\\WWW\\web_20156\\A_index\\website\\templates\\bottom.html',
      1 => 1440822803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931955b3b4eb63be23-21935574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55b3b4eb643b29_37710240',
  'variables' => 
  array (
    'meau_foot' => 0,
    'v' => 0,
    'con_data' => 0,
    'pop' => 0,
    'site_pop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b3b4eb643b29_37710240')) {function content_55b3b4eb643b29_37710240($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("public.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("public", 'local'); ?>
<!--footer-->

<div id="page-footer">
    <div class="footer clearfix">
        <a href="#" id="bblogo"></a>
        <a id="browser-logo" href="http://ub66.com/?lang=zh-cn" target="_blank"><img src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/ublogo.png" border="0" width="146"></a>
        <div class="footer-img01"></div>
        <div class="article-menu">
             <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['meau_foot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <a href="javascript:void(0);" onclick="getPager('-','iword','<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
');" target="mem_index" data-color="" class="js-article-color">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

                </a><?php echo $_smarty_tpl->tpl_vars['v']->value['str_m'];?>
  
              <?php } ?>                             
          </div>
        <div class="clear"></div>
        <div class="footer-img-wrap">
            <div class="footer-img mail">商务合作：<?php echo $_smarty_tpl->tpl_vars['con_data']->value['email'][0];?>
</div>
            <div class="footer-img mail">意见建议：<?php echo $_smarty_tpl->tpl_vars['con_data']->value['email'][1];?>
</div>
            <div class="footer-img netlink">易记域名：<?php echo $_smarty_tpl->tpl_vars['con_data']->value['remember'];?>
</div>
            <div class="footer-img netlink">官方域名：<?php echo $_smarty_tpl->tpl_vars['con_data']->value['remember'];?>
</div>
        </div>
        <p class="footer-text">
            <span class="copyright">Copyright © <?php echo $_smarty_tpl->tpl_vars['con_data']->value['copy_right'];?>
 Reserved</span><br>
            <span class="footer-info"></span>
        </p>
    </div>
</div> 

</div>
        
<ul picfloat="left" style="position: absolute; cursor: pointer; z-index: 1000;left: 0px; width: 134px;padding-left: 0px;" class="TplFloatSet" id="TplFloatPic_0">
    <li><a href="javascript:void(0);" onclick="getPager('-','zhuce');" style="width: 134px; height: 268px;">
        <img width="134" height="268" align="middle" class="png_fix" alt="" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/server_head_1.png" style="display: inline;">
        <img width="134" height="268" align="middle" class="png_fix" alt="" style="display: none;" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/server_head_1.png">
        </a>
    </li>
    <li><a onclick="FloatClose(this);" href="###" style="width: 120px; height: 25px;">
        <img width="120" height="25" align="middle" class="png_fix" alt="" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/kefuc.png" style="display: inline;">
        <img width="120" height="25" align="middle" class="png_fix" alt="" style="display: none;" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/kefuc.png">
    </a>
    </li>
</ul>

<ul picfloat="right" style="position: absolute; cursor: pointer; z-index: 1000;right: 0px; width: 134px;" class="TplFloatSet" id="TplFloatPic_1">
    <li><a href="javascript:void(0);" onclick="OnlineService('<?php echo $_smarty_tpl->tpl_vars['con_data']->value['online_service'];?>
');" style="width: 134px; height: 268px;">
        <img width="134" height="268" align="middle" class="png_fix" alt="" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/server_head.png" style="display: inline;">
        <img width="134" height="268" align="middle" class="png_fix" alt="" style="display: none;" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/server_head.png">
    </a></li>
        <li><a href="javascript:void(0);" onclick="getPager('-','youhui');" target="mem_index" style="width: 146px; height: 53px;">
        <img width="146" height="53" align="middle" class="png_fix" alt="" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/kefub.png" style="display: inline;">
        <img width="146" height="53" align="middle" class="png_fix" alt="" style="display: none;" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/kefub.png">
    </a></li>
 
        <li><a onclick="FloatClose(this);" href="###" style="width: 146px; height: 25px;">
        <img width="146" height="25" align="middle" class="png_fix" alt="" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/kefuc.png" style="display: inline;">
        <img width="146" height="25" align="middle" class="png_fix" alt="" style="display: none;" src="<?php echo $_smarty_tpl->getConfigVariable('images');?>
/kefuc.png">
    </a></li>
</ul>
<?php echo '<script'; ?>
>
//關閉效果
function FloatClose(t){ event.cancelBubble = true;$(t).parents('.TplFloatSet').hide(); }
var left_top = 150, right_top = 150, float_list = [], float_side = 5;
$(window).load(function() {
// s廳主自改 - 浮動圖V2 -2013.7.19
    float_list['0'] = $('#TplFloatPic_0');
    float_list['1'] = $('#TplFloatPic_1');
    for (var i in float_list) {
       var self = float_list[i], 
       picfloat = (self.attr('picfloat') == 'right') ? 1 : 0;self.show().Float({'floatRight' : picfloat, 'topSide' : ((picfloat == 1) ? right_top : left_top), side: float_side});
       var w = 0;        
     $.each(self.find('img'), function(){
            var width = $(this).width();
            w = (width > w) ? width : w;//取圖片最大寬度
            $(this).attr({
                'width' : width,
                'height': $(this).height()
            });
        });
        self.css('width', w);
        if (picfloat) {
            right_top = right_top + 10 + (self.height() || 250);
        } else {
            left_top = left_top + 10 + (self.height() || 250);
        }

        $('a', self).each(function(){
            $(this).css({'width' : $(this).find('img:first').width(),'height' : $(this).find('img:first').height()});
            $(this).hover(function() {
                $(this).find('img:first').hide();
                $(this).find('img:last').show();
            }, function() {
                $(this).find('img:last').hide();
                $(this).find('img:first').show();
            });
        });
    }
});
<?php echo '</script'; ?>
>            
<?php if ($_smarty_tpl->tpl_vars['pop']->value['pop_state']=='1') {?>
  <?php echo $_smarty_tpl->tpl_vars['site_pop']->value;?>

<?php }?>
</body>
</html>
<!--[if (IE 7)|(IE 6)]>
<?php echo '<script'; ?>
>var downloadNewIE;if('undefined'!=typeof downloadvwin){downloadNewIE=downloadvwin}else{downloadNewIE=function(){window.open('http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-8')}}<?php echo '</script'; ?>
><div id="ie6-alertBox"> <div id="ie6-infoBar">  系统侦测到您使用旧版浏览器,<span class="alert">本站预计于 2015/1/1 停止对 IE6 , IE7 维护与支援</span>,为了体验最佳的浏览品质与效果,建议立即至<a href="javascript:downloadNewIE();">「下载区」</a>升级您的浏览器。  </div> <a href="javascript:closeDialog();" id="ie6-alertBoxClose"> 關閉  </a> </div> <div id="ie6-overlay"></div><style type="text/css">html{overflow-y:hidden}.alert{color:red}#ie6-overlay{background:#777;filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=50);-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=50);-moz-opacity:.5;opacity:.5;position:absolute;top:0;left:0;z-index:10}#ie6-alertBox{position:absolute;font-size:13px;width:300px;height:auto;padding:10px 10px 30px;left:50%;top:40%;line-height:25px;margin-left:-160px;z-index:11;color:#000;border:1px solid #777;background-color:#CCC;background-image:-moz-linear-gradient(top,white,#CCC);background-image:-webkit-gradient(linear,0 0,0 100%,from(white),to(#CCC));background-image:-webkit-linear-gradient(top,white,#CCC);background-image:-o-linear-gradient(top,white,#CCC);background-image:linear-gradient(to bottom,white,#CCC);background-repeat:repeat-x;-webkit-box-shadow:0 1px 4px rgba(0,0,0,0.065);-moz-box-shadow:0 1px 4px rgba(0,0,0,0.065);box-shadow:0 1px 4px rgba(0,0,0,0.065);border:1px solid #D4D4D4;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFF',endColorstr='#CCCCCC',GradientType=0);display:none}#ie6-infoBar a,#ie6-alertBoxClose{color:#F57900;text-decoration:none}#ie6-infoBar a:hover,#ie6-alertBoxClose:hover{color:#FF9A37}#ie6-alertBoxClose{position:absolute;right:5px;bottom:5px;display:none}</style><?php echo '<script'; ?>
>function closeDialog(target){$("#ie6-alertBox,#ie6-overlay").hide();$('html').css('overflow-y','auto');if('undefined'==typeof($.cookie)){document.cookie="ie6close=on;path=/;"}else{$.cookie('ie6close','on',{path:'/',expires:''})}}function showalert(){$("#ie6-overlay").height($(window).height()).width($(window).width());$("#ie6-alertBox").slideToggle(1000,function(){setTimeout('$("#ie6-alertBoxClose").fadeIn();',3000)})}$(function(){if('undefined'==typeof($.cookie)){if(!/ie6close/.test(document.cookie)){showalert()}}else{if($.cookie('ie6close')!='on'){showalert()}}});<?php echo '</script'; ?>
>
<!--><!--<![endif]-->
<!--IE11提示訊息 2015/6/9 壓縮程式+補上其他翻譯 -->
<!--[if IE 8]><style>.ie11-alert-wrap{ background:#000000;position:fixed;top:0;left:0;z-index:5000;width:100%;height:0;color:#FFF;text-align:center;font-size:12px;font-family:"Microsoft YaHei","微软雅黑",arial;padding-right:10px;border-bottom:1px solid #3F3D3D;background:url(<?php echo $_smarty_tpl->getConfigVariable('public');?>
/ie/bg.png) repeat left bottom}.zh-cn .ie11-alert-wrap{font-family:"Microsoft YaHei","微软雅黑",arial}.zh-tw .ie11-alert-wrap{font-family:"Microsoft JhengHei","微軟正黑體",arial}.ie11-alert-easing{position:absolute;bottom:1px;text-align:center;width:100%}.ie11-alert-container{display:inline-block;vertical-align:top;text-align:left;margin:16px 30px 10px 0}.ie11-alert-container-left{background-position:0 100%}.ie11-alert-container-left,.ie11-alert-container-right{float:left;width:26px;height:17px;background-image:url(<?php echo $_smarty_tpl->getConfigVariable('public');?>
/ie/arrow.png)}.ie11-alert-container-middle{float:left;line-height:16px;font-weight:700;margin:0 20px}.ie11-alert-container-middle span{max-width:500px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;cursor:default}.ie11-alert-message{display:none}.ie11-alert-btn-wrap{display:inline-block;vertical-align:top;font-size:0}.ie11-alert-btn{float:left;min-width:145px;cursor:pointer;font-size:12px;padding-right:5px}.ie11-alert-btn:hover{background-position:left bottom}.ie11-alert-btn-ub{background:url() left top repeat-x}.ie11-alert-btn-ie{display:none;min-width:125px;background:url(<?php echo $_smarty_tpl->getConfigVariable('public');?>
/ie/bg_IE.png) left top repeat-x}.ie11-alert-icon{height:50px;box-sizing:border-box}.ie11-alert-icon span{display:block}.ie11-alert-btn-ub .ie11-alert-icon{background:url() left center no-repeat;box-sizing:border-box;padding:10px 0 0 50px}.ie11-alert-btn-ie .ie11-alert-icon{background:url(<?php echo $_smarty_tpl->getConfigVariable('public');?>
/ie/icon_IE.png) left center no-repeat;box-sizing:border-box;padding:0 0 0 50px}.ie11-alert-btn-ub span.ie11-alert-subtopic{font-family:arial}.ie11-alert-btn-ub span.ie11-alert-topic{color:#FF2626;text-indent:3px;letter-spacing:3px}.ie11-alert-btn-ie span{height:50px;line-height:50px;font-size:16px;font-family:arial}.ie11-alert-close{float:left;cursor:pointer;height:50px;background:url(/ie/bg_close.png) left top repeat-x}.ie11-alert-close a{display:block;width:22px;height:21px;background:url(<?php echo $_smarty_tpl->getConfigVariable('public');?>
/ie/icon_close.png) left top no-repeat;margin:14px}.ie11-alert-close a:hover{background-position:left bottom}</style><div id="js-ie11-alert-wrap" class="ie11-alert-wrap"> <div id="js-ie11-alert-easing" class="ie11-alert-easing"> <div class="ie11-alert-container clearfix"> <div class="ie11-alert-container-left"></div> <div class="ie11-alert-container-middle"> <span id="js-ie11-alert-message-win7" class="ie11-alert-message ie11-alert-message-win7" title="  为加速您的浏览体验，提供最严密安全防护，建议升级至 IE11 或安装CHROME浏览器  ">  为加速您的浏览体验，提供最严密安全防护，建议升级至 IE11 或安装CHROME浏览器  </span> <span id="js-ie11-alert-message-xp" class="ie11-alert-message ie11-alert-message-xp" title="  为加速您的浏览体验，提供最严密安全防护，建议安装CHROME浏览器  ">  为加速您的浏览体验，提供最严密安全防护，建议安装CHROME浏览器  </span> </div> <div class="ie11-alert-container-right"></div> </div> <div class="ie11-alert-btn-wrap"> <div class="ie11-alert-btn ie11-alert-btn-ub" onclick="window.open('http://www.baidu.com/s?ie=UTF-8&wd=CHROME')"> <div class="ie11-alert-icon"> <span class="ie11-alert-subtopic">GoogleChrome</span> <span class="ie11-alert-topic">  CHROME浏览器  </span> </div> </div> <div id="js-ie11-alert-btn-ie" class="ie11-alert-btn ie11-alert-btn-ie" onclick="window.open('http://windows.microsoft.com/en-us/internet-explorer/downloads/ie','download','top=0,left=0,width=1000,height=600,location=yes,menubar=no,resizable=yes,scrollbars=yes,status=no,toolbar=no');"> <div class="ie11-alert-icon"> <span>IE 11</span> </div> </div> <div id="js-ie11-alert-close" class="ie11-alert-close"> <a></a> </div> </div> </div></div><?php echo '<script'; ?>
>(function(){if($.cookie===undefined){$.getScript('<?php echo $_smarty_tpl->getConfigVariable('public');?>
/ie/jquery.cookie.js',ie11AlertScript)}else{ie11AlertScript()}function ie11AlertScript(){var $alertWrap=$('#js-ie11-alert-wrap'),_userOs=navigator.userAgent,_isWin=(navigator.platform==="Win32")||(navigator.platform==="Windows"),_isWinXP=_userOs.indexOf("Windows NT 5.1")>-1||_userOs.indexOf("Windows XP")>-1,_isWin7=_userOs.indexOf("Windows NT 6.1")>-1||_userOs.indexOf("Windows 7")>-1;if($.cookie("alreadyReadIe11")===null){$alertWrap.animate({'height':'50px'},'slow')}$('#js-ie11-alert-close').on('click',function(){$.cookie("alreadyReadIe11",1);$alertWrap.slideUp(function(){$alertWrap.fadeOut('slow').css('display','none')})});if(_isWin){if(_isWin7){$('#js-ie11-alert-message-win7, #js-ie11-alert-btn-ie').css('display','inline-block')}if(_isWinXP){$('#js-ie11-alert-message-xp').siblings().css('display','none').end().css('display','inline-block')}}}})();<?php echo '</script'; ?>
><![endif]-->
<!--IE11提示訊息-END--><?php }} ?>
