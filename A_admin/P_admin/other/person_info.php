<?php require("../common_html/header.php");?>
<body>
<div id="con_wrap">
<div class="input_002">資料信息</div>
<div class="con_menu">
</div>
</div>
<div class="content" style="width:550px;clear: left;">
<table width="400" border="0" cellspacing="0" cellpadding="0" bgcolor="#976061" class="m_tab">
	<tbody><tr class="m_title_over_co">
		<td colspan="2" align="center">基本資料</td>
	</tr>
	<tr>
		<td width="30%" class="table_bg1" align="right">原始帳號：</td>
		<td width="70%" align="left"><?=$_SESSION['login_name']?></td>
	</tr>
	<tr>
		<td class="table_bg1" align="right">登入帳號：</td>
		<td align="left"><?=$_SESSION['login_name_1']?></td>
	</tr>
	<tr class="m_title_over_co">
		<td colspan="2" align="center">信用額度</td>
	</tr>	
	<tr>
		<td class="table_bg1" align="right">體育：</td>
		<td align="left">0</td>
	</tr>
	<tr>
		<td class="table_bg1" align="right">彩票：</td>
		<td align="left">0</td>
	</tr>
	<tr>
		<td class="table_bg1" align="right">視訊：</td>
		<td align="left">0</td>
	</tr>
	<tr class="m_title_over_co">
		<td colspan="2" align="center">占成</td>
	</tr>
	<tr>
		<td class="table_bg1" align="right">體育：</td>
		<td align="left">
					100%
				</td>
	</tr>
	<tr>
		<td class="table_bg1" align="right">彩票：</td>
		<td align="left">
					100%
				
		</td>
	</tr>
	<tr>
		<td class="table_bg1" align="right">視訊：</td>
		<td align="left">
					100%
				
		</td>
	</tr>	
	<tr>
		<td colspan="2" class="table_bg1">&nbsp;</td>
	</tr>	
</tbody></table>

</div>

<!-- 公共尾部 -->
<?php require("../common_html/footer.php"); ?>