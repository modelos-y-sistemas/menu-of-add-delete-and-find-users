
function Buscar(){
    var search=$('#search').val();
    var pathname = "Buscar";
    var parametros={
        "search" : search,
        "pathname" : pathname
    };
    $.ajax({
        url: "http://localhost/menu-of-add-delete-and-find-users/class/user.php",
        type: "post",
        data: parametros,
        success: function(data){
            alert("uu");
            var resp=JSON.parse(data);
            var tabla;
            for(var i=0;i<resp.length;i++){
                tabla+='<tr class="list-users__tr"><td class="list-users__td">'+resp[i].Name+'</td><td class="list-users__td">'+resp[i].Surname+
                '</td><td class="list-users__td">'+resp[i].Email+'</td><td class="list-users__td">'+resp[i].UserKey+'</td><td class="list-users__td"> <input type="checkbox" name="'
                +resp[i].UserKey+'" id="'+resp[i].UserKey+'"> </td></tr>';
                alert("rr");
            }
            /*var p=document.getElementsByClassName("list-users__tbody");
            p.html(tabla);*/
            $('tbody.list-users__tbody').html(tabla);
        }
    });
    return false;
}
function Eliminar(){
    var pathname = window.location.pathname;
    var formel=document.forms["formel"];
    var chk=formel.querySelectorAll('input[type="checkbox"]:checked');
    var uselim=[];
    for(var i=0; i<chk.lenght; i++){
        chkd=Number(chk[i].id);
        uselim.push(chkd);
    }

    var parametros={
        "pathname" : pathname,
        "user_keyarr" : uselim
    };

    $.ajax({
        url: "http://localhost/MYS/menu-of-add-delete-and-find-users/class/user.php",
        type: "post",
        data: parametros,
        success: function(data){
            Buscar();
        }
    });

    return false;
}