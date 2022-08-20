function Find(data){
  var response = JSON.parse(data); // la respuesta se envia desde el archivo pathname
  
  var table_tbody;
  for(var i = 0; i < response.length; i++){
    table_tbody += '<tr class="list-users__tr"><td class="list-users__td">' + response[i].Name + '</td><td class="list-users__td">' + response[i].Surname + '</td><td class="list-users__td">' + response[i].Email + '</td><td class="list-users__td">' + response[i].UserKey + '</td></tr>';
  }
  
  document.querySelector('.list-users__tbody').html(table_tbody);  
}

var btnSearch = document.getElementById('button_search');

btnSearch.onclick(() => {
  var search = document.querySelector('#search').val();
  var pathname = window.location.pathname;
  var parameters = {
    "search" : search,
    "pathname" : pathname
  };
  
  Send(parameters, Find);

});

