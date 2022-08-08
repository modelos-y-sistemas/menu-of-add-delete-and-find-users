
function state()
{
    var search=$('#search').val();
    var pathname = window.location.pathname;
    var parametros={
        "search" : search,
        "pathname" : pathname
    };
    $.ajax({
        url: "http://localhost/MYS/menu-of-add-delete-and-find-users/class/user.php",
        type: "post",
        data: parametros,
        success: function(data){
            var resp=JSON.parse(data);
            var tabla;
            for(var i=0;i<resp.length;i++){
                tabla+='<tr class="list-users__tr"><td class="list-users__td">'+resp[i].Name+'</td><td class="list-users__td">'+resp[i].Surname+
                '</td><td class="list-users__td">'+resp[i].Email+'</td><td class="list-users__td">'+resp[i].UserKey+'</td></tr>';
            }
            /*var p=document.getElementsByClassName("list-users__tbody");
            p.html(tabla);*/
            $('tbody.list-users__tbody').html(tabla);
        }
    });
    return false;
}