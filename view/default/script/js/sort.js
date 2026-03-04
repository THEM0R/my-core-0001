// $(document).ready(function() {
// /* ready */
// if ($.cookie('remember_select') != null) {

//   $('#sort option[value="' + $.cookie('remember_select') + '"]').attr('selected', 'selected');

// }

// var sort = $('#sort');


// sort.change(function() {

//   $.cookie('remember_select', $('#sort option:selected').val(), {
//     expires: 90,
//     path: '/'
//   });

//   var sorting = sort.val();

//   $.ajax({
//     type: "POST",
//     url: "?sort",
//     data: {sort:sorting},
//     // dataType: 'json',
//     // beforeSend: function(){
//     //  $("#ers").text("загрузка...");
//     // },
//     success: function(html){
//       $(".articles").html(html);
//     }
//   });

//   console.log(sorting);

// });




// jQuery.cookie = function(name, value, options) {

//   if (typeof value != 'undefined') { // name and value given, set cookie

//     options = options || {};

//     if (value === null) {

//       value = '';

//       options.expires = -1;

//     }

//     var expires = '';

//     if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {

//       var date;

//       if (typeof options.expires == 'number') {

//         date = new Date();

//         date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));

//       } else {

//         date = options.expires;

//       }

//       expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE

//     }

//     // CAUTION: Needed to parenthesize options.path and options.domain

//     // in the following expressions, otherwise they evaluate to undefined

//     // in the packed version for some reason...

//     var path = options.path ? '; path=' + (options.path) : '';

//     var domain = options.domain ? '; domain=' + (options.domain) : '';

//     var secure = options.secure ? '; secure' : '';

//     document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');

//   } else { // only name given, get cookie

//     var cookieValue = null;

//     if (document.cookie && document.cookie != '') {

//       var cookies = document.cookie.split(';');

//       for (var i = 0; i < cookies.length; i++) {

//         var cookie = jQuery.trim(cookies[i]);

//         // Does this cookie string begin with the name we want?

//         if (cookie.substring(0, name.length + 1) == (name + '=')) {

//           cookieValue = decodeURIComponent(cookie.substring(name.length + 1));

//           break;

//         }

//       }

//     }

//     return cookieValue;

//   }

// };
// /* ready */
// });