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
	name.blur(ValidReg);


	function ValidReg(){

    var valid = false;

    $.ajax({
			async: false,
			url: "singup",
			type: 'POST',
			data: {
				'validname': name.val()
			}
		})
		.done(function(res) {
			if(res == 0){
				nameInfo.text("Введите Логин!");
				nameInfo.addClass("error").show();
				name.addClass("error");

				valid = false;
			}else if(res == 1){
				nameInfo.text("минимум 3 символа!");
				nameInfo.addClass("error").show();
				name.addClass("error");

				valid = false;
			}else if(res == 3){
				nameInfo.text("только английские буквы цифры и тире и _ до 10!");
				nameInfo.addClass("error");
				name.addClass("error");

				valid = false;
			}else if( res == 'no' ){
				nameInfo.text("такой Логин уже есть!");
				nameInfo.addClass("error").show();
				name.addClass("error");

				valid = false;
			}else{
				name.removeClass("error");
				nameInfo.text("");
				nameInfo.hide();

				valid = true;
			}
			alert(valid);
		});
		alert(valid+'2');
    // not valid, return false and show some hidden message
    return valid;

    
}

	
	
	
/* document ready */
});
