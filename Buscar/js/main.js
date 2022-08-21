var filter = document.querySelector('.filter');
var checkes = filter.querySelectorAll('input[type="checkbox"]');

checkes.forEach((check) => {
  check.addEventListener("change", () => {
    checkes.forEach(check => {
      label = filter.querySelector('#' + check.id.replace("inp", "lbl"));
      
      if(check.checked){
        label.classList.remove("filter__label");
        label.classList.add("filter__label_checked");
      } else{
        label.classList.remove("filter__label_checked");
        label.classList.add("filter__label");
      }
    })
  })
})

function state(event)
{
  event.preventDefault();
  
  var search = $('#search').val();
  var pathname = "Buscar";
  var parametros = {
    "search" : search,
    "pathname" : pathname
  }; 
  
  $.ajax({
    url: "http://localhost/menu-of-add-delete-and-find-users/class/user.php", 
    type: "post",
    data: parametros,
    success: function(data){
      var response = JSON.parse(data);
      var registres;
      for(let i = 0; i < response.length; i++){
        registres +=
        `<tr class='list-users__tr'>` +
          `<td class='list-users__td' id="list-users__name">    ${response[i].Name   } </td>` + 
          `<td class='list-users__td' id="list-users__surname"> ${response[i].Surname} </td>` + 
          `<td class='list-users__td' id="list-users__email">   ${response[i].Email  } </td>` + 
          `<td class='list-users__td' id="list-users__id">      ${response[i].UserKey} </td>` + 
        `</tr>`;
      }
      
      $('tbody.list-users__tbody').html(registres);
      stylizeTd();
    }
  });
  
  
  return false;
}

window.onload = () =>{
  document.body.querySelector(".search__input").focus();
}

const stylizeTd = () => {
  var tbody = document.body.querySelector(".list-users__tbody");
  var array_td = tbody.children;

  for (let i = 0; i < array_td.length; i++) {
    array_td[i].style.background = (i % 2 === 0) ? "var(--list-users__td-light)" : "var(--list-users__td-dark)";
  }
}
