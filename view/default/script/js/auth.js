$(document).ready(function(){
	/* document ready */

	/* REG VALID */
	//global vars
	var form_reg = $("#form_reg");
	var name_reg = $("#login_reg");
	var name_reg_Info = $(".login_reg_error");
	var email_reg = $("#email_reg");
	var email_reg_Info = $(".email_reg_error");
	var pass_reg = $("#password_reg");
	var pass_reg_Info = $(".password_reg_error");
	//On blur
	name_reg.blur(valid_Name_reg);
	email_reg.blur(valid_Email_reg);
	pass_reg.blur(valid_Pass_reg);

	form_reg.submit(function(){
		if(valid_Name_reg() & valid_Email_reg() & valid_Pass_reg())
			return true
		else
			return false;
	});
	//validation functions
	function valid_Name_reg(){
		var valid = false;
		$.ajax({
			async: false,
			url: "/singup",
			type: 'POST',
			data: {
				'validname': name_reg.val()
			}
		})
		.done(function(res) {
			if(res == 0){
				name_reg_Info.text("Введите Логин!");
				name_reg_Info.addClass("error").show();
				name_reg.addClass("error");

				valid = false;

			}else if(res == 1){
				name_reg_Info.text("минимум 3 символа!");
				name_reg_Info.addClass("error").show();
				name_reg.addClass("error");

				valid = false;

			}else if(res == 3){
				name_reg_Info.text("только английские буквы цифры и тире и _ до 10!");
				name_reg_Info.addClass("error");
				name_reg.addClass("error");

				valid = false;

			}else if( res == 'no' ){
				name_reg_Info.text("такой Логин уже есть!");
				name_reg_Info.addClass("error").show();
				name_reg.addClass("error");

				valid = false;

			}else{
				name_reg.removeClass("error");
				name_reg_Info.text("");
				name_reg_Info.hide();

				valid = true;

			}
		});

		return valid;
	}
	
	//validation functions
	function valid_Email_reg(){
		var valid = false;

		$.ajax({
			async: false,
			url: "/singup",
			type: 'POST',
			data: {
				'validEmail': email_reg.val()
			}
		})
		.done(function(res) {
			if(res == 0){
				email_reg_Info.text("Введите email!");
				email_reg_Info.addClass("error").show();
				email_reg.addClass("error");

				valid = false;

			}else if(res == 3){
				email_reg_Info.text("Введите правильный email!");
				email_reg_Info.addClass("error");
				email_reg.addClass("error");

				valid = false;

			}else if( res == 'no' ){
				email_reg_Info.text("Такой email уже есть!");
				email_reg_Info.addClass("error").show();
				email_reg.addClass("error");

				valid = false;

			}else{
				email_reg.removeClass("error");
				email_reg_Info.text("").hide();

				valid = true;

			}
		});

		return valid;
	}
	

	function valid_Pass_reg(){
		//it's NOT valid
		if(pass_reg.val().length < 1){
			pass_reg.addClass("error");
			pass_reg_Info.text("Введите пароль!").show();
			pass_reg_Info.addClass("error");
			return false;
		}

		if(pass_reg.val().length < 5){
			pass_reg.addClass("error");
			pass_reg_Info.text("как минимум 5 символов: буквы, цифры и '_' !").show();
			pass_reg_Info.addClass("error");
			return false;
		}
		//it's valid
		else{			
			pass_reg.removeClass("error").addClass("success");
			pass_reg_Info.text("").hide();
			pass_reg_Info.removeClass("error");
			return true;
		}
	}
	/* REG VALID */
	/* LOGIN VALID */
	var form_login = $("#form_login");
	var name_login = $("#login_login");
	var name_login_Info = $(".login_login_error");
	var pass_login = $("#login_password");
	var pass_login_Info = $(".password_login_error");
	//On blur
	name_login.blur(valid_login_login);
	pass_login.blur(valid_pass_login);

	form_login.submit(function(){
		if(valid_login_login() & valid_pass_login())
			return true
		else
			return false;
	});

	//validation functions
	function valid_login_login(){
		var valid = false;
		$.ajax({
			async: false,
			url: "/singin",
			type: 'POST',
			data: {
				'validname': name_login.val()
			}
		})
		.done(function(res) {
			if(res == 0){
				name_login_Info.text("Введите Логин!");
				name_login_Info.addClass("error").show();
				name_login.addClass("error");

				valid = false;

			}else if(res == 1){
				name_login_Info.text("минимум 3 символа!");
				name_login_Info.addClass("error").show();
				name_login.addClass("error");

				valid = false;

			}else if(res == 3){
				name_login_Info.text("только английские буквы цифры и тире и _ до 10!");
				name_login_Info.addClass("error");
				name_login.addClass("error");

				valid = false;

			}else if( res == 'no' ){
				name_login_Info.text("такого Логина нету!");
				name_login_Info.addClass("error").show();
				name_login.addClass("error");

				valid = false;

			}else{
				name_login.removeClass("error");
				name_login_Info.text("");
				name_login_Info.hide();

				valid = true;

			}
		});

		return valid;
	}

	//validation functions
	function valid_pass_login(){
		var valid = false;

		$.ajax({
			async: false,
			url: "/singin",
			type: 'POST',
			data: {
				'validpass': pass_login.val(),
				'validpass_name': name_login.val()
			}
		})
		.done(function(res) {
			if(res == 0){
				pass_login_Info.text("Введите Пароль!");
				pass_login_Info.addClass("error").show();
				pass_login.addClass("error");

				valid = false;

			}else if(res == 1){
				pass_login_Info.text("Минимум 3 символа!");
				pass_login_Info.addClass("error");
				pass_login.addClass("error");

				valid = false;

			}else if( res == 'no' ){
				pass_login_Info.text("неправельний пароль!");
				pass_login_Info.addClass("error").show();
				pass_login.addClass("error");

				valid = false;

			}else{
				pass_login.removeClass("error");
				pass_login_Info.text("").hide();

				valid = true;

			}
		});

		return valid;
	}

/* LOGIN VALID */

/* document ready */
});
