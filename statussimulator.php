<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ステータスシミュレータ</title>
<link rel="STYLESHEET" href="statussimulator3.css" type="text/css" />
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="jquery.balloon.js"></script>
<script type="text/javascript" src="popup2.js"></script>
</head>
<body>
<div id="header">
<h1>ステータスシミュレータ</h1>
</div>


<table class="simulator">
	<tr class="row1">
	<th class="col1"></th>
	<th class="col2">職業</th>
	<th class="col3">腕力</th>
	<th class="col4">生命</th>
	<th class="col5">魔力</th>
	<th class="col6">精神</th>
	<th class="col7">敏捷</th>
	<th class="col8">技量</th>
	<th class="col9">運</th>
	</tr>

<form action="" method="post">
	<tr class="row2">
		<td class="col1" id="jobBefore">転職前:</td>
		<td class="col2">
			<select name="jobBefore" id="jobBefore">
				<option value="boukensha"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='boukensha'){print'selected';}}?>>冒険者</option>
				<option value="heishi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='heishi'){print'selected';}}?>>兵士</option>
				<option value="mahoutsukai"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='mahoutsukai'){print'selected';}}?>>魔法使い</option>
				<option value="senshi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='senshi'){print'selected';}}?>>戦士</option>
				<option value="kishi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='kishi'){print'selected';}}?>>騎士</option>
				<option value="shagekisyu"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='shagekisyu'){print'selected';}}?>>射撃手</option>
				<option value="touzoku"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='touzoku'){print'selected';}}?>>盗賊</option>
				<option value="souryo"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='souryo'){print'selected';}}?>>僧侶</option>
				<option value="madoushi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='madoushi'){print'selected';}}?>>魔道士</option>
				<option value="kakutouka"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='kakutouka'){print'selected';}}?>>格闘家</option>
				<option value="ryuumyakushi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='ryuumyakushi'){print'selected';}}?>>龍脈士</option>
				<option value="tabigeininn"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='tabigeininn'){print'selected';}}?>>旅芸人</option>
				<option value="shoukanshi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='shoukanshi'){print'selected';}}?>>召喚士</option>
				<option value="kurokishi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='kurokishi'){print'selected';}}?>>黒騎士</option>
				<option value="kyousenshi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='kyousenshi'){print'selected';}}?>>狂戦士</option>
				<option value="mahoukenshi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='mahoukenshi'){print'selected';}}?>>魔法剣士</option>
				<option value="ansatsusha"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='ansatsusha'){print'selected';}}?>>暗殺者</option>
				<option value="juushi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='juushi'){print'selected';}}?>>銃士</option>
				<option value="ginyuushijinn"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='ginyuushijinn'){print'selected';}}?>>吟遊詩人</option>
				<option value="shinoshouninn"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='shinoshouninn'){print'selected';}}?>>死の商人</option>
				<option value="majutsushi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='majutsushi'){print'selected';}}?>>魔術士</option>
				<option value="shinkann"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='shinkann'){print'selected';}}?>>神官</option>
				<option value="seireitsukai"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='seireitsukai'){print'selected';}}?>>精霊使い</option>
				<option value="samurai"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='samurai'){print'selected';}}?>>侍</option>
				<option value="shugokishi"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='shugokishi'){print'selected';}}?>>守護騎士</option>
				<option value="artemis"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='artemis'){print'selected';}}?>>アルテミス</option>
				<option value="valkyrie"<?php if(isset($_POST['jobBefore'])){if($_POST['jobBefore']=='valkyrie'){print'selected';}}?>>ヴァルキリー</option>
			</select>
		</td>
		<td class="col3">
			<select name="wanryoku">
				<?php 
					for($i=1;$i<=40;$i++){
						print('<option value="'.$i.'"');
						if(isset($_POST['wanryoku'])){
							if($i==$_POST['wanryoku']){
								print('selected="selected"');
							}
						}
						print('>'.$i.'</option>');
					}
				?>
			</select>
		</td>
		<td class="col4">
			<select name="seimei">
				<?php 
					for($i=1;$i<=40;$i++){
						print('<option value="'.$i.'"');
						if(isset($_POST['seimei'])){
							if($i==$_POST['seimei']){
								print('selected="selected"');
							}
						}
						print('>'.$i.'</option>');
					}
				?>
			</select>
		</td>
		<td class="col5">
			<select name="maryoku">
				<?php 
					for($i=1;$i<=40;$i++){
						print('<option value="'.$i.'"');
						if(isset($_POST['maryoku'])){
							if($i==$_POST['maryoku']){
								print('selected="selected"');
							}
						}
						print('>'.$i.'</option>');
					}
				?>
			</select>
		</td>
		<td class="col6">
			<select name="seishin">
				<?php 
					for($i=1;$i<=40;$i++){
						print('<option value="'.$i.'"');
						if(isset($_POST['seishin'])){
							if($i==$_POST['seishin']){
								print('selected="selected"');
							}
						}
						print('>'.$i.'</option>');;
					}
				?>
			</select>
		</td>
		<td class="col7">
			<select name="binshou">
				<?php 
					for($i=1;$i<=40;$i++){
						print('<option value="'.$i.'"');
						if(isset($_POST['binshou'])){
							if($i==$_POST['binshou']){
								print('selected="selected"');
							}
						}
						print('>'.$i.'</option>');
					}
				?>
			</select>
		</td>
		<td class="col8">
			<select name="giryou">
				<?php 
					for($i=1;$i<=40;$i++){
						print('<option value="'.$i.'"');
						if(isset($_POST['giryou'])){
							if($i==$_POST['giryou']){
								print('selected="selected"');
							}
						}
						print('>'.$i.'</option>');
					}
				?>
			</select>
		</td>
		<td class="col9">
			<select name="unn">
				<?php 
					for($i=1;$i<=40;$i++){
						print('<option value="'.$i.'"');
						if(isset($_POST['unn'])){
							if($i==$_POST['unn']){
								print('selected="selected"');
							}
						}
						print('>'.$i.'</option>');
					}
				?>
			</select>
		</td>
	</tr>

	<tr class="row3">
		<td class="col1" id="jobAfter">
			転職後:
		</td>
		<td class="col2">
			<select name="jobAfter" id="jobAfter">
				<option value="boukensha"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='boukensha'){print'selected';}}?>>冒険者</option>
				<option value="heishi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='heishi'){print'selected';}}?>>兵士</option>
				<option value="mahoutsukai"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='mahoutsukai'){print'selected';}}?>>魔法使い</option>
				<option value="senshi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='senshi'){print'selected';}}?>>戦士</option>
				<option value="kishi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='kishi'){print'selected';}}?>>騎士</option>
				<option value="shagekisyu"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='shagekisyu'){print'selected';}}?>>射撃手</option>
				<option value="touzoku"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='touzoku'){print'selected';}}?>>盗賊</option>
				<option value="souryo"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='souryo'){print'selected';}}?>>僧侶</option>
				<option value="madoushi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='madoushi'){print'selected';}}?>>魔道士</option>
				<option value="kakutouka"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='kakutouka'){print'selected';}}?>>格闘家</option>
				<option value="ryuumyakushi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='ryuumyakushi'){print'selected';}}?>>龍脈士</option>
				<option value="tabigeininn"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='tabigeininn'){print'selected';}}?>>旅芸人</option>
				<option value="shoukanshi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='shoukanshi'){print'selected';}}?>>召喚士</option>
				<option value="kurokishi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='kurokishi'){print'selected';}}?>>黒騎士</option>
				<option value="kyousenshi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='kyousenshi'){print'selected';}}?>>狂戦士</option>
				<option value="mahoukenshi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='mahoukenshi'){print'selected';}}?>>魔法剣士</option>
				<option value="ansatsusha"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='ansatsusha'){print'selected';}}?>>暗殺者</option>
				<option value="juushi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='juushi'){print'selected';}}?>>銃士</option>
				<option value="ginyuushijinn"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='ginyuushijinn'){print'selected';}}?>>吟遊詩人</option>
				<option value="shinoshouninn"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='shinoshouninn'){print'selected';}}?>>死の商人</option>
				<option value="majutsushi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='majutsushi'){print'selected';}}?>>魔術士</option>
				<option value="shinkann"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='shinkann'){print'selected';}}?>>神官</option>
				<option value="seireitsukai"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='seireitsukai'){print'selected';}}?>>精霊使い</option>
				<option value="samurai"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='samurai'){print'selected';}}?>>侍</option>
				<option value="shugokishi"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='shugokishi'){print'selected';}}?>>守護騎士</option>
				<option value="artemis"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='artemis'){print'selected';}}?>>アルテミス</option>
				<option value="valkyrie"<?php if(isset($_POST['jobAfter'])){if($_POST['jobAfter']=='valkyrie'){print'selected';}}?>>ヴァルキリー</option>
			</select>
		</td>

<?php require('simulate2.php'); ?>

</table>

<input type="submit" name="confirm" value="決定" />

</form>


</body>
</html>