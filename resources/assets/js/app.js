window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js')
window.Bootstrap = require('bootstrap');
window.Mask = require('jquery-mask-plugin');

$(document).ready(function(){
  $('a').click(function(){
    $('.loader').fadeIn('normal');
  });
  $('form').submit(function(){
    $('.loader').fadeIn('normal');
  });

  $('.number').mask('0000', {reverse: true});

  $('.msg-success').fadeOut(2000);
  $('.msg-alert').fadeOut(2000);

  //Add
  $(".qtd_add").click(function(){
    var id = $(this).attr("data-id");
    console.log(id);
    $("#qtd_"+id).val(parseInt($('#qtd_'+id).val()) + 1);
  });

  //remove
  $(".qtd_remove").click(function(){
    var id = $(this).attr("data-id");
    var value = $("#qtd_"+id).val();
    if(value >= 2){
      $("#qtd_"+id).val(parseInt($('#qtd_'+id).val()) - 1);
    }
  });
});
