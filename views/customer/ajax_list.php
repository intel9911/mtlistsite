<?php 
	  $i = 0;
	  foreach($import_list as $key => $data){
			//print_r($data); exit;
		$i++;
?>
<tr>
  <td height="35" style="border-bottom:1px solid #bebebe;" 
  		onclick="viewDetailNotice('<?php echo $_SERVER_URL; ?>contents/notice/main_detail?type=1&notice_id=<?php echo $data->idx;?>');" >
	<a href="#detail">
  	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="7%" align="center" class="content3">공지</td>
		<td><img src="<?php echo $_SERVER_URL; ?>images/board_line2.jpg" width="1" height="9"></td>
		<td width="55%" align="left" class="content3" style="cursor:pointer" notice_id="<?php echo $data->idx;?>">
			&nbsp;<strong class="content7"><?php echo $data->title;?>
				<?php if(date("Y-m-d",strtotime($data->reg_date)) > $new_start_date ){?>
						<img src="<?php echo $_SERVER_URL.'images/new.gif'; ?>">
					<?php }?>  
					
			</strong>
			<?php if($_SESSION['user_id'] == $data->write_id){?>
				<a class="content10" href="<?php echo $_SERVER_URL; ?>contents/customer/add?idx=<?php echo $data->idx; ?>&notice_type=<?php echo $type; ?>"  >
					<img src="<?php echo $_SERVER_URL ?>images/b_edit.png" title="수정" 
							style="width:14px;height:14px;margin-top:0px;" /></a>
			<?php }?>
		</td>
		<td><img src="<?php echo $_SERVER_URL; ?>images/board_line2.jpg" width="1" height="9"></td>
		<td width="18%" align="center" class="clock3">
			<table border="0" cellspacing="5" cellpadding="0" style="width:150px;">
				<tr>
				  <td width="30px">
				  	<img src="<?php echo $_SERVER_URL.'images/level_'.$data->level_type.'.gif';?>" width="24" height="24"></td>
				  <td width="70%">
				  	<strong class="content3"><?php echo $data->write_name;?></strong></td>
				</tr>
			</table></td>
		<td><img src="<?php echo $_SERVER_URL; ?>images/board_line2.jpg" width="1" height="9"></td>
		<td width="10%" align="center" class="content3"><?php echo $data->writedate; ?></td>
		<td><img src="<?php echo $_SERVER_URL; ?>images/board_line2.jpg" width="1" height="9"></td>
		<td width="10%" align="center" class="content3"><?php echo $data->visit_qty;?></td>
	  </tr>
  </table></a></td>
</tr>
<?php } ?>  

<?php 
	  $i = 0;
	  foreach($list as $key => $data){
			//print_r($data); exit;
		if($data->notice_type != 26 ) continue;
		$i++;
?>
<tr>
  <td height="35" id="list_td_<?php echo $data->idx; ?>" style="border-bottom:1px solid #bebebe" 
			onclick="detail(this.id, '<?php echo $data->idx; ?>', '<?php echo $type; ?>')"  >
	<a href="#detail">
  	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="7%" align="center" class="content3"><?php echo $i;?></td>
		<td><img src="<?php echo $_SERVER_URL; ?>images/board_line2.jpg" width="1" height="9"></td>
		<td width="55%" align="left" class="content3" style="cursor:pointer" notice_id="<?php echo $data->idx;?>">
			&nbsp;<strong class="content3"><?php echo $data->title;?>
				<?php if(date("Y-m-d",strtotime($data->reg_date)) > $new_start_date ){?>
						<img src="<?php echo $_SERVER_URL.'images/new.gif'; ?>">
					<?php }?>  
					
			</strong>
			<?php if($_SESSION['user_id'] == $data->write_id){?>
				<a class="content10" href="<?php echo $_SERVER_URL; ?>contents/customer/add?idx=<?php echo $data->idx; ?>&notice_type=<?php echo $type; ?>"  >
					<img src="<?php echo $_SERVER_URL ?>images/b_edit.png" title="수정" 
							style="width:14px;height:14px;margin-top:0px;" /></a>
			<?php }?>
		</td>
		<td><img src="<?php echo $_SERVER_URL; ?>images/board_line2.jpg" width="1" height="9"></td>
		<td width="18%" align="center" class="clock3">
			<table border="0" cellspacing="5" cellpadding="0" style="width:150px;">
				<tr>
				  <td width="30px">
				  	<img src="<?php echo $_SERVER_URL.'images/level_'.$data->level_type.'.gif';?>" width="24" height="24"></td>
				  <td width="70%">
				  	<strong class="content3"><?php echo $data->write_name;?></strong></td>
				</tr>
			</table></td>
		<td><img src="<?php echo $_SERVER_URL; ?>images/board_line2.jpg" width="1" height="9"></td>
		<td width="10%" align="center" class="content3"><?php echo $data->writedate; ?></td>
		<td><img src="<?php echo $_SERVER_URL; ?>images/board_line2.jpg" width="1" height="9"></td>
		<td width="10%" align="center" class="content3"><?php echo $data->visit_qty;?></td>
	  </tr>
  </table></a></td>
</tr>
<?php } ?>  