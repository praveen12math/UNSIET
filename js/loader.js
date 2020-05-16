$(document).ready(function(){
    $(".sidenav").sidenav();
    $('.datepicker').datepicker();
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();
    $('select').formSelect();
    $('.collapsible').collapsible();
    $('.pushpin').pushpin();
    $('.parallax').parallax();
    $('ul.tabs').tabs();
  }); 

  function toggleModal(){
    var instance = M.Modal.getInstance($('#modal1'));
    var instance = M.Modal.getInstance($('#modal-login'));
    instance.open();

    var instance = M.Dropdown.getInstance($('#dropdown1'));
    instance.open();
  }