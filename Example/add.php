<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>jCloner - Add Elements</title>
<script language="javascript" src="jquery.js"></script>
<script language="javascript" src="jquery.jCloner.js"></script>

<script language="javascript">
	$(document).ready(function () {
	
		$('#UserInformation').jCloner({
			cloneClass: 'UserInformation',
			addTextID: 'AddMoreUsers',
			removeText: 'Remove User',
			removeClass: 'link',
			removeTextAppend: '<hr>',
			confirmOnRemove: true,
			confirmText: 'Sure to remove?',
			maxItemsAllowed: 5,
			appendElement: 'NewUserInfoContainer'

		});
		
		$('#submit').click(function(){
			
			var data = '';
			var counter = 0;
			$("input[type='text']").each(function(){
				counter++;
				type = $(this).attr('name');
				data += type + '_' + counter + ': ' + $(this).val() + '\n\n';
				
			});
		
			alert(data);
		
		});
		
	});
</script>

<style>
.link{
	color: blue; 
	cursor: pointer;
	font-family: verdana;
	font-size:14px;
	width:130px;
}

</style>

</head>
<body>

<form name="form1" method="post" action="">
	<table width="400" border="0" cellspacing="0" cellpadding="2" id="UserInformation" class="UserInformation">
	  <tr>
		<td>Name:</td>
		<td>
		  <input type="text" name="name">
		
		</td>
	  </tr>
	  <tr>
		<td>Email Address </td>
		<td><input type="text" name="email"></td>
	  </tr>
	</table>
	<hr>
	<div id="NewUserInfoContainer"></div>
	
	<table width="400" border="0" cellspacing="0" cellpadding="2">
		<tr>
			<td colspan="2"><input type="button" id="submit" value="Submit" name="submit"/></td>
		</tr>
	</table>
	<div id="AddMoreUsers" class="link">Add more users</div>
</form>

</body>
</html>

