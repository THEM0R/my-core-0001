$(document).ready(function(){
/* document ready */
	
$('header').scrollFix();
/*========== dialog ========*/
$('#opener').click(function(event) {
  event.preventDefault();
  $('#modal-add-poster').modal({
    fadeDuration: 250,
    fadeDelay: 0.80
  });
});




$('a[href="#reg"]').click(function(event) {
  event.preventDefault();
  $(this).modal({
    fadeDuration: 250,
    showClose: false
  });
});

$('a[href="#panel"]').click(function(event) {
  event.preventDefault();
  $(this).modal({
    fadeDuration: 250,
    showClose: false
  });
});


/*========== dialog ========*/





	/*========== валидация добавления фильма ========*/
	// var form = $('#form_add'),
	// btn = $('#submit_btn'),
	// name = $('#name').val(),
	// url = $('#url').val(),
	// year = $('#year').val();

	// form.attr('OnSubmit','return false;');
	// btn.attr('disabled','disabled');

	// $('#name').blur(function(){
	// 	post_data = {'name':$('input#name').val()};
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "?upload=1",
	// 		data: post_data,
	// 		dataType: 'json',
	// 		// beforeSend: function(){
	// 		// 	$("#ers").text("загрузка...");
	// 		// },
	// 		success: function(response){
	// 			if(response.type == "error"){
	// 				$(".tabs-errors.name").text(response.text);
	// 				$('input#name').css('border-color','red');
	// 				$('#submit_btn').attr('disabled','disabled');
	// 				form.attr('OnSubmit','return false;');
	// 			}else{
	// 				$('input#name').css('border-color','green')
	// 				$(".tabs-errors.name").text('');
	// 				$('#submit_btn').removeAttr('disabled');
	// 				form.attr('OnSubmit','return true;');
	// 				}
	// 			}
	// 		});
	// });
	// $('#url').blur(function(){
	// 	post_data = {'url':$('input#url').val()};
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "?upload=2",
	// 		data: post_data,
	// 		dataType: 'json',
	// 		// beforeSend: function(){
	// 		// 	$("#ers").text("загрузка...");
	// 		// },
	// 		success: function(response){
	// 			if(response.type == "error"){
	// 				$(".tabs-errors.url").text(response.text);
	// 				$('input#url').css('border-color','red');
	// 				$('#submit_btn').attr('disabled','disabled');
	// 				form.attr('OnSubmit','return false;');
	// 			}else{
	// 				$('input#url').css('border-color','green')
	// 				$(".tabs-errors.url").text('');
	// 				$('#submit_btn').removeAttr('disabled');
	// 				form.attr('OnSubmit','return true;');
	// 				}
	// 			}
	// 		});
	// });
	/*========== валидация добавления фильма ========*/
	/*========== adds-link ========*/
 	$('#show-select').click(function(event) {
 			$(this).hide();
      $('#select-jenre').show();
  });

 	$('span.button-plus').text('Добавить жанр4');

	$('span.button-plus').one('click', function(){
		$(this).text('Добавить жанр');
	});

	$('span.button-plus').on('click', function(){
		$(this).text('Добавить еще');
	});	

	$('#select_janres_chosen').css('pointer-events', 'none');

 	$("#select-janres").chosen({no_results_text: "Oops, nothing found!"});

 	$("#select-countrys").chosen({
 		search: false,
 		search_contains: false,
 		display_disabled_options: false
 	});
 	

	/*========== adds-link ========*/
	$("span.adds-link").mouseover(function(){
    // Mouse over...
    $(this).text("добавить...");
	});
	$("span.adds-link").mouseout(function(){
	    // Mouse left...
	    $(this).text("...");
	});

	$("span.dels-link").mouseover(function(){
    // Mouse over...
    $(this).text("Удалить...");
	});
	$("span.dels-link").mouseout(function(){
	    // Mouse left...
	    $(this).text("...");
	});
	/*========== adds-link ========*/

	



/* document ready */
});