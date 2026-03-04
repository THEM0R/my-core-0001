// $(function(){
// 	var sort = $('#sort');
// 	var country = $('#country');
// 	var janre = $('#janre');
// 	var year = $('#hod');
// 	//

// 	$("#pagination a").on("click", function(){
// 			$(this).addClass("click");
// 		});

// 	$(".pagination").on("click", function(){

// 		alert( $(".pagination a.click").attr("page") );


// 		var sorting = sort.val();
// 		var countrys = country.val();
// 		var janres = janre.val();
// 		var years = year.val();


// 		$.ajax({
// 		    type: "POST",
// 		    url: "/sorting?sort",
// 		    data: {
// 		    	sort:sorting,
// 		    	country:countrys,
// 		    	janres:janres,
// 		    	years:years,
// 		    	page: $(".pagination a.click").attr("page")
// 		    },
// 		    dataType: 'json',
// 		    // beforeSend: function(){
// 		    //  $("#ers").text("загрузка...");
// 		    // },
// 		    success: function(response){

// 			    if(response.pagination != ''){
// 						$('.pagination').show().html(response.pagination);
// 					}else{
// 						$('.pagination').hide();
// 					}

// 					if(response.movie != ''){
// 			      // alert(response.movie);
// 			      $('.articles').html('');
// 			      for(value in response.movie){
// 			      	$('.articles').append('<article>'+
// 			      	'<div class="poster">'+
// 			      	'<a href="http://ajax.load/'+response.movie[value]['category_url'] +'/'+response.movie[value]['url'] +'">'+
// 			      	'<img src="upload/movies/poster/mini/'+response.movie[value]['poster'] +'">'+
// 			      	'</a></div><div class="info">'+
// 			      	'<p class="title">'+
// 			      	'<a href="http://ajax.load/'+response.movie[value]['category_url'] +'/'+response.movie[value]['url'] +'">'+response.movie[value]['name'] +'</a>'+
// 			      	'<br></p>'+
// 			      	'<p class="data">'+response.movie[value]['year'] +' ● '+response.movie[value]['country'] +
// 			      	'</div>'+
// 			      	'</article>');
// 			      }
// 			    }else{
// 			    	$('.articles').html('Матерялов нет!!!');
// 			    }
// 		    }
// 		});

// 	});
// 	//
// });