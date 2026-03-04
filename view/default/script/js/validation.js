/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@url: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#form_add");
	var name = $("#name");
	var nameInfo = $(".tabs-errors.name");
	var url = $("#url");
	var urlInfo = $(".tabs-errors.url");
	var year = $("#year");
	var yearInfo = $(".tabs-errors.year");
	var description = $("#description");
	var descriptionInfo = $(".tabs-errors.description");

	var janre = $("#select-janres").val();
	var janreInfo = $(".tabs-errors.janres");

	
	//On blur
	// janre.blur(validatejanre);


	name.blur(validateName);
	url.blur(validateurl);
	year.blur(validateyear);
	description.blur(validateDescription);
	//On key press
	name.keyup(validateName);
	year.keyup(validateyear);

		form.submit(function(){
		if(validateName() & validateurl() & validateyear() & validateDescription() & validatejanre())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateurl(){
		//it's NOT valid
		if(url.val().length < 1){
			url.removeClass("success").addClass("error");
			urlInfo.text("Введите url!");
			urlInfo.addClass("error");
			return false;
		}

		if(url.val().length < 3){
			url.removeClass("success").addClass("error");
			urlInfo.text("как минимум 3 букви!");
			urlInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			url.removeClass("error").addClass("success");
			urlInfo.text("");
			urlInfo.removeClass("error");
			return true;
		}
	}

	//validation functions
	function validatejanre(){
		//it's NOT valid
		if(janre == ""){
			janre.removeClass("success").addClass("error");
			janreInfo.text("виберите жанр!");
			janreInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			janre.removeClass("error").addClass("success");
			janreInfo.text("");
			janreInfo.removeClass("error");
			return true;
		}
	}


	function validateName(){
		//it's NOT valid
		if(name.val().length < 1){
			name.removeClass("success").addClass("error");
			nameInfo.text("Введите название!");
			nameInfo.addClass("error");
			return false;
		}

		if(name.val().length < 3){
			name.removeClass("success").addClass("error");
			nameInfo.text("как минимум 3 букви!");
			nameInfo.addClass("error");
			return false;
		}

		if(name.val().length > 3){
		post_data = {'name':$('input#name').val()};
		$.ajax({
			type: "POST",
			url: "?upload=1",
			data: post_data,
			dataType: 'json',
			// beforeSend: function(){
			// 	$("#ers").text("загрузка...");
			// },
			success: function(response){
				if(response.type == "error"){
					name.removeClass("success").addClass("error");
					nameInfo.text(response.text);
					nameInfo.addClass("error");
					$('#submit_btn').attr('disabled','disabled');
					form.attr('OnSubmit','return false;');
				}else{
					name.removeClass("error").addClass("success");
					$(".tabs-errors.name").text('');
					$('#submit_btn').removeAttr('disabled');
					form.attr('OnSubmit','return true;');
					}
				}
			});

		}
		//it's valid
		else{			
			name.removeClass("error").addClass("success");
			nameInfo.text("");
			nameInfo.removeClass("error");
			return true;
		}
	}

	function validateDescription(){
		//it's NOT valid
		if(description.val().length < 1){
			description.removeClass("success").addClass("error");
			descriptionInfo.text("Введите описание!");
			descriptionInfo.addClass("error");
			return false;
		}

		if(description.val().length < 10){
			description.removeClass("success").addClass("error");
			descriptionInfo.text("как минимум 10 букв!");
			descriptionInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			description.removeClass("error").addClass("success");
			descriptionInfo.text("");
			descriptionInfo.removeClass("error");
			return true;
		}
	}


	//validation functions
	function validateName2(){

		if(name.val().length < 1){
			name.removeClass("success").addClass("error");
			nameInfo.text("Введите название!");
			nameInfo.addClass("error");
			return false;
		}

		if(name.val().length > 10){
			name.removeClass("success").addClass("error");
			nameInfo.text("Логин слишком длинний!");
			nameInfo.addClass("error");
			return false;
		}


		
		//testing regular expression
		var a = $("#name").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_-]{3}$/;
		//if it's valid url

		var $val = $.trim($("#name").val());
		var $data_field = $("#name").attr('data-field');

		if(filter.test(a)){
			name.removeClass("error").addClass("success");
			nameInfo.text("");
			nameInfo.removeClass("error");
			//

			// $.ajax({
			// 	url: "http://cinema.php/reg",
			// 	type: 'POST',
			// 	data: {
			// 		$val: $val,
			// 		$data_field: $data_field
			// 	},
			// 	success: function(fack) {
			// 		if(fack == 'no'){
			// 			nameInfo.text("такой name уже есть!");
			// 			nameInfo.addClass("error");
			// 			name.removeClass("success").addClass("error");
			// 			// $('#submit').attr('disabled','disabled');

			// 			$(function validateName() {
			// 				return false;
			// 			});
						

			// 		}else{
			// 			name.removeClass("error").addClass("success");

			// 			// $('#submit').removeAttr('disabled','disabled');
			// 			// validateName() return true;
			// 		}
			// 	}
			// });
			return true;
			

		}else{
			name.removeClass("success").addClass("error");
			nameInfo.text("Нам нужны имена с более чем 3-мя буквами на латинице!");
			nameInfo.addClass("error");
			return false;
		}
	}

	function validateyear(){
		//it's NOT valid
		if(year.val().length < 1){
			year.removeClass("success").addClass("error");
			yearInfo.text("Введите Год!");
			yearInfo.addClass("error");
			return false;
		}

		if(year.val().length < 4){
			year.removeClass("success").addClass("error");
			yearInfo.text("как минимум 4 цифры!");
			yearInfo.addClass("error");
			return false;
		}
		if(year.val().length > 4){
			year.removeClass("success").addClass("error");
			yearInfo.text("Максимум 4 цифры!");
			yearInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			year.removeClass("error").addClass("success");
			yearInfo.text("");
			yearInfo.removeClass("error");
			return true;
		}
	}
});