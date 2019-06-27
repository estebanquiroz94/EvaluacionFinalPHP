
$(function(){
  $('#login-form').submit(function(event){
    var username = $('#login-form').find('#username').val();
    var passw = $('#login-form').find('#passw').val();
    event.preventDefault();
    $.ajax({
      url: '../server/check_login.php',
      dataType: "json",
      cache: false,
      data: {username: username, passw: passw},
      type: 'POST',
      success: function(php_response){
        if (php_response.conexion=="OK") {
          if(php_response.acceso == 'concedido') {
            window.location.href = 'main.html';
          }else {
            alert('Usuario y contraseña incorrectos, inténtelo de nuevo');
          }
        }else{
          alert("error en la conexion");
        }
      },
      error: function(){
        alert("Error Fatal");
      }
    });

  });

});
