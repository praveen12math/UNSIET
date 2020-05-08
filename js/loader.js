$(document).ready(function(){
    $(".sidenav").sidenav();
    $('.datepicker').datepicker();
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();
    $('select').formSelect();
    $('.collapsible').collapsible();
    $('.pushpin').pushpin();
    $('.parallax').parallax();
  }); 

  function toggleModal(){
    var instance = M.Modal.getInstance($('#modal1'));
    instance.open();

    var instance = M.Dropdown.getInstance($('#dropdown1'));
    instance.open();
  }