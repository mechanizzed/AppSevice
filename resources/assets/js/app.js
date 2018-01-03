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

  window.location.hash="no-back-button";
  window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
  window.onhashchange=function(){window.location.hash="no-back-button";}

});
