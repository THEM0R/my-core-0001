/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	/* document ready */
	//global vars
	var form = $("#reg");
	var name = $("#login_reg");
	var nameInfo = $(".login_reg_error");
	var email = $("#email_reg");
	var emailInfo = $(".email_reg_error");

	var pass = $("#password_reg");
	var passInfo = $(".password_reg_error");

	
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	pass.blur(validatePass);
	//On key press
	name.keyup(validateName);
	pass.keyup(validatePass);
		// if(validateName() & validateEmail() & validatePass())

	form.submit(function(){
		if(validateName() & validateEmail() & validatePass())
			return true
		else
			return false;
	});

	//validation functions
	function validateName(){
		$.ajax({
			async: false,
			url: "singup",
			type: 'POST',
			data: {
				'validname': name.val()
			},
			success: function(res) {
				if(res == 0){
					nameInfo.text("Введите Логин!");
					nameInfo.addClass("error").show();
					name.addClass("error");

					stopImmediatePropagation();
				}else if(res == 1){
					nameInfo.text("минимум 3 символа!");
					nameInfo.addClass("error").show();
					name.addClass("error");

					stopImmediatePropagation();
				}else if(res == 3){
					nameInfo.text("только английские буквы цифры и тире и _ до 10!");
					nameInfo.addClass("error");
					name.addClass("error");

					stopImmediatePropagation();
				}else if( res == 'no' ){
					nameInfo.text("такой Логин уже есть!");
					nameInfo.addClass("error").show();
					name.addClass("error");

					stopImmediatePropagation();
				}else{
					name.removeClass("error");
					nameInfo.text("");
					nameInfo.hide();

					preventDefault();
				}
			}
		});
	}
	
	//validation functions
	function validateEmail(){
		$.ajax({
			async: false,
			url: "singup",
			type: 'POST',
			data: {
				'validEmail': email.val()
			},
			success: function(res) {
				if(res == 0){
					emailInfo.text("Введите email!");
					emailInfo.addClass("error").show();
					email.addClass("error");

					stopImmediatePropagation();
				}else if(res == 3){
					emailInfo.text("Введите правильный email!");
					emailInfo.addClass("error");
					email.addClass("error");

					stopImmediatePropagation();
				}else if( res == 'no' ){
					emailInfo.text("Такой email уже есть!");
					emailInfo.addClass("error").show();
					email.addClass("error");

					stopImmediatePropagation();
				}else{
					email.removeClass("error");
					emailInfo.text("").hide();

					preventDefault();
				}
			}

		});
	}
	

	function validatePass(){
		//it's NOT valid
		if(pass.val().length < 1){
			pass.addClass("error");
			passInfo.text("Введите пароль!").show();
			passInfo.addClass("error");
			return false;
		}

		if(pass.val().length < 5){
			pass.addClass("error");
			passInfo.text("как минимум 5 символов: буквы, цифры и '_' !").show();
			passInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			pass.removeClass("error").addClass("success");
			passInfo.text("").hide();
			passInfo.removeClass("error");
			return true;
		}
	}

/* document ready */
});
