$(document).ready(function() {
  $('select').niceSelect();
});

$(function() {
  $(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
      $(".nav-header-index").addClass("header-active");
      $('.menu-text').addClass("text-black");
      $('.logo-header').html('<a href="/" class="mx-2">' 
      + '<img src="assets/img/logo.png" class="" style="width: 80px; height: auto;">' +'</a>' );
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $(".nav-header-index").removeClass("header-active");
      $('.menu-text').removeClass("text-black");
      $('.logo-header').html('<a href="/" class="mx-2">' 
      + '<img src="assets/img/logo-white.png" class="" style="width: 150px; height: auto;">' +'</a>' );
    }
  });
});

window.onload=function(){
  $('.slider-buffet').slick({
  autoplay:true,
  autoplaySpeed:1000,
  arrows:false,
  prevArrow:false,
  nextArrow:false,
  centerMode:true,
  slidesToShow:6,
  slidesToScroll:1
  });
}

function openNav() {
  document.getElementById("Sidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("Sidenav").style.width = "0";
}

$(function(){
  // bind change event to select
  $('#dynamic_select').on('change', function () {
      var url = $(this).val(); // get selected value
      if (url) { // require a URL
        window.location = url; // redirect
      }
      return false;
  });
});

function dynamicMenus($category_id) {
  var category_id = $category_id;
  var ajaxURL = $('#ajaxURL').val();
  var dataObj = {};
  dataObj['category_id'] = category_id;

  $.ajax({
    url: ajaxURL,
    type: 'POST',
    cache: false,
    datatype: 'json',
    headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
    data: dataObj,
    beforeSend: function() {
      NProgress.start();
    },

    success: function(data){
      NProgress.done();
      $('#menuDiv').remove();
      $('#menuContainerDiv').html(data);
      $('.btn-menu').removeClass('active');
      $('#btn_'+category_id).addClass('active');
    },
    error:function(){}
  });
}

function dynamicMenusMobile() {
  var category_id = $('#selectMenusCtgrMobile :selected').val();
  var ajaxURL = $('#ajaxURL').val();
  var dataObj = {};
  dataObj['category_id'] = category_id;

  $.ajax({
    url: ajaxURL,
    type: 'POST',
    cache: false,
    datatype: 'json',
    headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
    data: dataObj,
    beforeSend: function() {
      NProgress.start();
    },

    success: function(data){
      NProgress.done();
      $('#menuDiv').remove();
      $('#menuContainerDiv').html(data);
    },
    error:function(){}
  });
}

$('.slider-blog').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  autoplay:true,
  dots:false,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:2
    },
    1000:{
      items:4
    }
  }
})


$('#formSaveMessage').on('submit', function (e) {

  if($('#MsgName').val() == '' || $('#MsgName').val() == null || $('#MsgName').val().length == 0){
    $('#MsgName').css({'border':'2px solid #dc3232'});
  }
  else if($('#MsgName').val() != '' || $('#MsgName').val() != null || $('#MsgName').val().length != 0){
    $('#MsgName').css({'border':'2px solid #d2d6de'});
  }
  
  if($('#MsgPhone').val() == '' || $('#MsgPhone').val() == null || $('#MsgPhone').val().length == 0)
  {
    $('#MsgPhone').css({'border':'2px solid #dc3232'});
  }
  else if($('#MsgPhone').val() != '' || $('#MsgPhone').val() != null || $('#MsgPhone').val().length != 0)
  {
    $('#MsgPhone').css({'border':'2px solid #d2d6de'});
  }

  if($('#MsgEmail').val() == '' || $('#MsgEmail').val() == null || $('#MsgEmail').val().length == 0)
  {
    $('#MsgEmail').css({'border':'2px solid #dc3232'});
  }
  else if($('#MsgEmail').val() != '' || $('#MsgEmail').val() != null || $('#MsgEmail').val().length != 0)
  {
    $('#MsgEmail').css({'border':'2px solid #d2d6de'});
  }

  if($('#MsgMessage').val() == '' || $('#MsgMessage').val() == null || $('#MsgMessage').val().length == 0)
  {
    $('#MsgMessage').css({'border':'2px solid #dc3232'});
  }
  else if($('#MsgMessage').val() != '' || $('#MsgMessage').val() != null || $('#MsgMessage').val().length != 0)
  {
    $('#MsgMessage').css({'border':'2px solid #d2d6de'});
  }

  e.preventDefault();

  var url = $('#MsgUrl').val() + '/ajax/save-messages';

  $.ajax({
    type: 'POST',
    url: url,
    data: $('#formSaveMessage').serialize(),
    success: function (data) {

      if(data.error_no_entered == false){
        swal({
          text: 'Sorry, data can not be empty.',
          type: 'warning',
          timer: 2000,
          showCancelButton: false,
          showConfirmButton: false
        });
      }
      else if(data.duplicate_entry == false){
        swal({
          text: 'Sorry, data entry already exists.',
          type: 'warning',
          timer: 2000,
          showCancelButton: false,
          showConfirmButton: false
        });         
      }
      else if(data.success == true){
        swal({
          title: 'Thank you!!',
          text: 'You have sent us a message.',
          type: 'success',
          timer: 2000,
          showCancelButton: false,
          showConfirmButton: false
        });
        $('#MsgName').val('');
        $('#MsgPhone').val('');
        $('#MsgEmail').val('');
        $('#MsgMessage').val('');
      }
      
    }
  });

});