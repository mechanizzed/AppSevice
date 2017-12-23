window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js')
window.Bootstrap = require('bootstrap');

$(document).ready(function(){
  $('a').click(function(){
    $('.loader').fadeIn('normal');
  });
  $('form').submit(function(){
    $('.loader').fadeIn('normal');
  });

  $('.msg-success').fadeOut(2000);
  $('.msg-alert').fadeOut(2000);


});
