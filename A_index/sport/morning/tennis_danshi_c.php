<?include_once("main_header.php");?>
<input type="hidden" id="touzhutype" value="1">
<script language="javascript" src="../style/js/jquery.js"></script>
<script language="javascript" src="../style/js/jquery_dialog.js"></script>
<script language="javascript" src="../style/js/common.js"></script>
<script language="javascript" src="tennis_danshi.js" ></script>
<script language="javascript" src="../style/js/tennis_match.js"></script>
<script language="javascript" src="../style/js/mouse.js"></script>

<script  language="JavaScript">


function chg_league() {
	var legview = document.getElementById('legView');
	try {
		
			//JqueryDialog.Open('足球单式', 'dialog.php?lsm='+window_lsm, 600, window_hight);
			legFrame.location.href = "chuangkous.php?lsm=tennis_danshi";
	
	
	
	
	
		//legFrame.location.href = "chuangkous.php?uid=" + parent.uid + "&rtype=" + parent.rtype + "&langx=" + parent.langx + "&mtype=" + parent.ltype;
	} catch(e) {
	
		
			//JqueryDialog.Open('足球单式', 'dialog.php?lsm='+window_lsm, 600, window_hight);
			legFrame.src = "chuangkous.php?lsm=tennis_danshi";
		}
	
	
	
	
		//legFrame.src = "chuangkous.php?uid=" + parent.uid + "&rtype=" + parent.rtype + "&langx=" + parent.langx + "&mtype=" + parent.ltype;

	
	legview.style.display = '';
	legview.style.top = document.body.scrollTop + 82; 
	
	
	legview.style.left = document.getElementById('myTable').scrollLeft + 10;

	
}
function setleghi(leghight) {
	var legview = document.getElementById('legFrame');

	if ((leghight * 1) > 95) {
		legview.height = leghight;
	} else {

		legview.height = 95;
	}
	
	
	
}
function LegBack() {
	var legview = document.getElementById('legView');
	legview.style.display = 'none';
	reload_var("");
}

</script>

   
          <table  id="game_table"  cellspacing="0"  cellpadding="0"  class="game">
           <tr>
              <th  class="time">时间</th>
			  <th  class="time">主客队伍</th>
			  <th  class="h_1x2">独赢</th>
			  <th class="h_r">让球</th>
              <th  class="h_ou">大小</th>
              <th  class="h_oe">单/双</th>
			
            </tr>
         <tbody  id="datashow">		 
		<!--
		  <tr>
			<td  colspan="9"  class="b_hline">
				<table  border="0"  cellpadding="0"  cellspacing="0"  width="100%"><tbody>
					<tr>
						<td  class="legicon" >
						<span  id="亚洲杯2015(在澳洲)"  class="showleg"><span  id="LegOpen"></span> </span>
						</td>
						<td  class="leg_bar" >亚洲杯2015(在澳洲) </td>
					</tr>
				</tbody></table>
			</td>
		  </tr>

		  <tr  id="TR_01-1870256"    *class*="">
				<td  rowspan="2"  class="b_cen">01-18<br>05:00<br><font  color="red">滚球</font></td>
				<td  rowspan="2"  class="b_cen"> 中国 <br>
				   北韩 </td>
				<td  class="b_cen"  id="118389861_MH"><a  href="javascript:void(0)"   title=" 中国 "><font  true="" onclick="parent.mem_order.location.href='../select2.php'">1.80</font></a></td>
				<td  class="b_rig"  id="118389861_PRH"><span  class="con">0.5</span> <span  class="ratio"><a  href="javascript:void(0)"   title=" 中国 "><font  true="">1.820</font></a></span></td>
				<td  class="b_rig"  id="118389861_POUC"><span  class="con">小2</span> <span  class="ratio"><a  href="javascript:void(0)"   title="小"><font  true="">1.940</font></a></span></td>
				<td  class="b_cen"  id="118389861_PO">单 <a  href="javascript:void(0)"   title="单"><font  true="">2.01</font></a></td>
				
		  </tr> 
		  <tr  id="TR1_01-1870256"    *class*="">
			<td  class="b_cen"  id="118389861_MC"><a  href="javascript:void(0)"   title=" 北韩 "><font  true="">4.20</font></a></td>
			<td  class="b_rig"  id="118389861_PRC"><span  class="con">333</span> <span  class="ratio"><a  href="javascript:void(0)"   title=" 北韩 "><font  true="">2.040</font></a></span></td>
			<td  class="b_rig"  id="118389861_POUH"><span  class="con">大2</span> <span  class="ratio"><a  href="javascript:void(0)"   title="大"><font  true="">1.900</font></a></span></td>
			<td  class="b_cen"  id="118389861_PE">双 <a  href="javascript:void(0)"   title="双"><font  true="">1.85</font></a></td>
			
			
		  </tr>
		  
		  -->
		 
		  <tr><td  colspan="9" align="center" style="background:#fff;">正在加载数据...</td></tr>
	
	</tbody></table>
  
	
	</td>
      </tr>
   
    </tbody></table>


<div  id="refresh_down"  class="refresh_M_btn" ><span onclick="javascript:shuaxin(document.getElementById('league').value);" >刷新</span></div>


</td>
		</tr>
	</tbody>
</table>

	



<div  id="legView"  style="display:none;"  class="legView">
    <div  class="leg_head" ></div>
	<div><iframe  id="legFrame"  scrolling="no"  frameborder="no"  border="0"  allowtransparency="true"></iframe></div>
    <div  class="leg_foot"></div>
</div>

</body></html>
