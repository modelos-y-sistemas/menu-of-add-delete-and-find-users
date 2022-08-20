
$('#button_search').addEventListener("click", () => {
  var search = $('#search').val();
  var pathname = "Buscar";
  var parameters = {
    "search" : search,
    "pathname" : pathname
  };

  Send(parameters, Find);
});

function Send(parameters, function_parameter){
  $.ajax({
    url: "http://localhost/menu-of-add-delete-and-find-users/class/user.php",
    type: "post",
    data: parameters,
    success: function_parameter(data) 
  });
}

function Find(data){
  var response = JSON.parse(data);
  var table_tbody;
  for(var i = 0; i < response.length; i++){
    table_tbody += '<tr class="list-users__tr"><td class="list-users__td">' + response[i].Name + '</td><td class="list-users__td">' + response[i].Surname + '</td><td class="list-users__td">' + response[i].Email + '</td><td class="list-users__td">' + response[i].UserKey + '</td><td class="list-users__td"> <input type="checkbox" name="' + response[i].UserKey + '" id="' + response[i].UserKey + '"> </td></tr>';
  }
  
  $('tbody.list-users__tbody').html(table_tbody);
}

function Eliminar(){
    
  var pathname = window.location.pathname;
  var form = document.forms["form"];
  var checkes_checked = form.querySelectorAll('input[type="checkbox"]:checked');
  var arrays_users_key = [];
  var user_key;
  checkes_checked.forEach(checkHTML => {
    user_key = checkHTML.id;
    arrays_users_key.push(user_key);
    alert(checkHTML);   
  });
  
  var search = $('#search').val();
  var user = document.getElementsByName("user");
  
  var parametros = {
    "pathname" : pathname,
    "search" : search,
    "user" : user,
    "user_keyarr" : arrays_users_key
  };

  $.ajax({
    url: "http://localhost/menu-of-add-delete-and-find-users/class/user.php",
    type: "post",
    data: parametros,
    success: function(data){
      
    }
  });

  return false;
}
