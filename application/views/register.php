<div class="container">
	<div class="row"  align = "center">
		<label class="h5" for="____">加入我们</label>
	</div>
	<div class="row form-inline">
		<form accept-charset="UTF-8" action="../register/submit" method="post">
			<label for="user_courtesy_title">称呼:</label>
			<select id="user_courtesy_title" name="courtesy_title">
    				<option value="Mr">Mr</option>
    				<option value="Mrs">Mrs</option>
    				<option value="Miss">Miss</option>
			</select>
			<br /><br />
			<div class="form-group">
				<label for="user_name">姓名:</label>
				<input class="form-control" id="user_name" name="user[name]" placeholder="姓名" style="width:500px" type="text" />＊
				<span id = "nameError" style="display:none">此处不能为空</span>
			</div>
			<br /><br />
			<div class="form-group">
				<label for="user_email">邮箱:</label>
				<input class="form-control" id="user_email" name="user[email]" placeholder="邮箱" style="width:500px" type="text" />＊
				<span id = "emailError" style="display:none">此处不能为空</span>
				<span id = "formatError" style="display:none">邮件格式不正确</span>
			</div>
			<br /><br />
			<div class="form-group">
				<label for="user_company">单位:</label>
				<input class="form-control" id="user_company" name="user[company]" placeholder="工作单位" style="width:500px" type="text" />＊
				<span id = "companyError" style="display:none">此处不能为空</span>
			</div>
			<br /><br />
			<div class="form-group">
				<label for="user_telephone">电话:</label>
				<input class="form-control" id="user_telephone" name="user[telephone]" placeholder="电话" style="width:500px" type="text" />
			</div>
			<br /><br />
			<div class="form-group">
				<label for="user_mobile_phone">手机:</label>
				<input class="form-control" id="user_mobile_phone" name="user[mobile_phone]" placeholder="手机" style="width:500px" type="text" />＊
				<span id = "mobileError" style="display:none">此处不能为空</span>
			</div>
			<br /><br />
			<div class="form-group">
				<label for="user_remark">备注:</label>
				<textarea class="form-control" cols="68" id="user_remark" name="user[remark]" placeholder="备注" rows="10">
</textarea>
			<br /><br />
			<input class="btn btn-primary" id="submit" name="commit" type="submit" value="加入我们" />
</form>	</div>
</div>
<script src = ""></script>
<script>
$("#submit").bind("click", validate);
function validate(event)
{
	var name = $("#user_name").val();
	var email = $("#user_email").val();
	var company = $("#user_company").val();
	var telephone = $("#user_telephone").val();
	var mobile = $("#user_mobile_phone").val();
	var remark = $("#remark").val();
	var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var flag = 0;

	$("#nameError").hide();
	$("#emailError").hide();
	$("#formatError").hide();
	$("#companyError").hide();
	$("#mobileError").hide();

	if(name == "")
	{
		$("#nameError").show()
		flag ++;
	}

	if(email == "")
	{
		$("#emailError").show()
		flag ++;
	}
	else if(!regex.test(email))
	{
		$("#formatError").show()
		flag ++;
	}

	if(company == "")
	{
		$("#companyError").show()
		flag ++;
	}

	if(mobile == "")
	{
		$("#mobileError").show()
		flag ++;
	}

	if(flag != 0)
	{
		return false;
	}
}
</script>