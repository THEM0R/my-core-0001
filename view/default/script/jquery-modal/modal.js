$(document).ready(function(){


    $('a[href="#singin"]').click(function(event) {
      event.preventDefault();
      $(this).modal({
        fadeDuration: 250,
        showClose: false
      });
      // return false;
    });
    $('a[href="#singup"]').click(function(event) {
      event.preventDefault();
      $(this).modal({
        fadeDuration: 250,
        showClose: false
      });
    });

    $('a[href="#loss"]').click(function(event) {
      event.preventDefault();
      $(this).modal({
        fadeDuration: 250,
        showClose: false
      });
    });


    $('.modal p.close').click(function(){
      $.modal.close();
    });


  });