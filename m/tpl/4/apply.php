<style type="text/css">
.pw,.pwt{
height:26px; line-height:normal;
border: 1px solid #ddd;
border-radius: 5px;
background-color: #fff; padding-left:5px; padding-right:5px;
-moz-border-radius:5px;/*仅Firefox支持，实现圆角效果*/
-webkit-border-radius:5px;/*仅Safari,Chrome支持，实现圆角效果*/
-khtml-border-radius:5px;/*仅Safari,Chrome支持，实现圆角效果*/
border-radius:5px;/*仅Opera，Safari,Chrome支持，实现圆角效果*/
}
.pw{ width:90%;}
.usertitle{
height:22px; line-height:22px;color:#666; font-weight:bold; font-size:14px; padding:5px;
border-radius: 5px;
background-color: #ededed; padding-left:5px; padding-right:5px;
-moz-border-radius:5px;/*仅Firefox支持，实现圆角效果*/
-webkit-border-radius:5px;/*仅Safari,Chrome支持，实现圆角效果*/
-khtml-border-radius:5px;/*仅Safari,Chrome支持，实现圆角效果*/
border-radius:5px;/*仅Opera，Safari,Chrome支持，实现圆角效果*/
}
</style>
<div id="main" style="padding:5px; min-height:300px">
	<div style="line-height:24px; padding-bottom:20px; font-size:16px;">
		<?php echo isset($info['content']) ? $info['content'] : "";?>
	<div class="clear"></div>
	<p style=" padding:3px;"><img src="<?php echo !empty($rt['userinfo']['headimgurl']) ? $rt['userinfo']['headimgurl'] : SITE_URL.$lang['site_logo'];?>" height="50" style="border-radius:50%; border:1px solid #ededed" />&nbsp;<?php echo isset($rt['userinfo']['nickname'])&&!empty($rt['userinfo']['nickname']) ? $rt['userinfo']['nickname'] : "";?></p>
	</div>
	 <form name="USERINFO" id="USERINFO" action="" method="post">
     <table width="100%" border="0" cellpadding="0" cellspacing="0" style="line-height:30px; padding:10px">
	 <tr>
		<td width="25%" align="right" style="padding-bottom:2px;"><b class="cr2">*</b>姓名：</td>
		<td width="75%" align="left" style="padding-bottom:2px;">
		<input placeholder="请填写真实姓名，结算佣金以真实姓名为准" type="text" value="<?php echo isset($rt['userress']['consignee'])&&!empty($rt['userress']['consignee']) ? $rt['userress']['consignee'] : "";?>" name="consignee"  class="pw"/></td>
  	</tr>
	<tr>
	<td width="25%" align="right" style="padding-bottom:2px;"><b class="cr2">*</b> 邮箱：</td>
    <td width="75%" align="left" style="padding-bottom:2px;">
    <input placeholder="请填写邮箱方便发文件" type="text" value="<?php echo isset($rt['userinfo']['email'])&&!empty($rt['userinfo']['email']) ? $rt['userinfo']['email'] : "";?>" name="email"  class="pw"/></td>
  	</tr>

	<tr>
	<td width="25%" align="right" style="padding-bottom:2px;"><b class="cr2">*</b> 手机：</td>
    <td width="75%" align="left" style="padding-bottom:2px;">
    <input placeholder="该手机号码用于电脑板的管理中心登录账号，以及联系时使用"  type="text" value="<?php echo isset($rt['userinfo']['mobile_phone'])&&!empty($rt['userinfo']['mobile_phone']) ? $rt['userinfo']['mobile_phone'] : "";?>" name="mobile_phone"  class="pw"/></td>
  	</tr>

	<tr>
	<td width="25%" align="right" style="padding-bottom:2px;"><b class="cr2">*</b> 微信号：</td>
    <td width="75%" align="left" style="padding-bottom:2px;">
    <input placeholder="请填写微信号方便联系"  type="text" value="<?php echo isset($rt['userinfo']['msn'])&&!empty($rt['userinfo']['msn']) ? $rt['userinfo']['msn'] : "";?>" name="msn"  class="pw"/></td>
  	</tr>

	<tr>
	<td width="25%" align="right" style="height:20px; line-height:20px;"><b class="cr2">*</b> 区域：</td>
    <td width="75%" align="left" style="padding-bottom:2px;">
<select name="province" id="select_province" class="pwt" onchange="ger_ress_copy('2',this,'select_city')">
	<option value="0">选择省</option>
	<?php 
	if(!empty($rt['province'])){
	foreach($rt['province'] as $row){
	?>
	<option value="<?php echo $row['region_id'];?>" <?php echo $rt['userress']['province']==$row['region_id']? 'selected="selected"' :"";?>><?php echo $row['region_name'];?></option>	
	<?php } } ?>													
	</select>
	
	<select name="city" id="select_city" class="pwt" onchange="ger_ress_copy('3',this,'select_district')">
	<option value="0">选择城市</option>
	<?php
	if(!empty($rt['city'])){
	foreach($rt['city'] as $row){
	?>
	<option value="<?php echo $row['region_id'];?>" <?php echo $rt['userress']['city']==$row['region_id']? 'selected="selected"' :"";?>><?php echo $row['region_name'];?></option>	
	<?php } } ?>	
	</select>
	
	<select <?php echo !isset($rt['userress']['district'])? 'style="display: none;"':"";?> name="district" class="pwt" id="select_district">
	<option value="0">选择区</option>	
	<?php 
	if(!empty($rt['district'])){
	foreach($rt['district'] as $row){
	?>
	<option value="<?php echo $row['region_id'];?>" <?php echo $rt['userress']['district']==$row['region_id']? 'selected="selected"' :"";?>><?php echo $row['region_name'];?></option>	
	<?php } } ?>													
	</select>

    </td>
  </tr>
<tr>
	<td width="25%" align="right" style="padding-bottom:2px;"><b class="cr2">*</b> 地址：</td>
    <td width="75%" align="left" style="padding-bottom:2px;">
    <input placeholder="填写准确的联系地址" type="text" value="<?php echo isset($rt['userress']['address'])&&!empty($rt['userress']['address']) ? $rt['userress']['address'] : "";?>" name="address"  class="pw" /></td>
  </tr>
 <!-- <tr>
	<td  align="right" width="25%" style="padding-bottom:2px;"><b class="cr2">*</b>身份证：</td>
	<td align="left">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td align="left" style="padding-top:5px">
				<img id="img_avatar" src="<?php echo isset($rt['userinfo']['avatar'])&&!empty($rt['userinfo']['avatar']) ? SITE_URL.$rt['userinfo']['avatar'] : '';?>" alt="" style="border:2px solid #ccc; width:85px; height:60px;" />
				</td>
				<td align="left" valign="bottom">
				<input name="avatar" id="avatar" type="hidden" value="<?php echo isset($rt['userinfo']['avatar'])? $rt['userinfo']['avatar'] : "";?>"><iframe id="iframe_t" name="iframe_t" border="0" src="<?php echo ADMIN_URL;?>uploadajax/" scrolling="no" width="140" frameborder="0" height="36"></iframe>
		<p style="color:#FF0000; font-size:12px;">(上传大小不能超过500kb)</p>
				</td>
			</tr>
		</table>
		</td>
	</tr>-->
	<?php if($rt['userinfo']['user_rank']=='1'&&$rt['userinfo']['is_salesmen']=='1'){?>
	<tr>
    <td width="100%" align="center" style="padding-bottom:2px;" colspan="2">
    <p style="color:#fe0000; text-align:center">你的代理申请资料已经提交，正等待系统审核</p>
	</td>
  </tr>
	<?php }elseif($rt['userinfo']['user_rank']=='10'){
	echo '<script> window.location.href="'.ADMIN_URL.'user.php?act=dailicenter";</script>'; exit;
	}?>
  <tr>
    <td align="center" style="padding-top:20px;" colspan="2"><input type="button" value=""  style="overflow:hidden; border:none; background:none;cursor:pointer; background:url(<?php echo $this->img('btu3.png');?>) no-repeat 0 0 ; width:102px; height:25px;" onclick="update_user_info(10)" />
	</td>
  </tr>
   <tr>
    <td align="center" colspan="2">
	<span class="returnmes" style="color:#FF0000"></span>
	</td>
  </tr>
</table>
</form>
</div>
<script type="text/javascript">
function run(imgs){
	$('#USERINFO #img_avatar').attr('src','<?php echo SITE_URL;?>'+imgs);
	$('input[name="avatar"]').val(imgs);
}
function ger_ress_copy(type,obj,seobj){
	parent_id = $(obj).val();
	if(parent_id=="" || typeof(parent_id)=='undefined'){ return false; }
	$.post('<?php echo ADMIN_URL;?>user.php',{action:'get_ress',type:type,parent_id:parent_id},function(data){
		if(data!=""){
			$(obj).parent().find('#'+seobj).html(data);
			if(type==3){
				$(obj).parent().find('#'+seobj).show();
			}
			if(type==2){
				$(obj).parent().find('#select_district').hide();
				$(obj).parent().find('#select_district').html("");
			}
		}else{
			alert(data);
		}
	});
}

</script>
