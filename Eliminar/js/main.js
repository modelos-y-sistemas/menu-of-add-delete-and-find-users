
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
            var resp=JSON.parse(data);
            var tabla;
            for(var i=0;i<resp.length;i++){
                tabla+='<tr class="list-users__tr"><td class="list-users__td">'+resp[i].Name+'</td><td class="list-users__td">'+resp[i].Surname+
                '</td><td class="list-users__td">'+resp[i].Email+'</td><td class="list-users__td">'+resp[i].UserKey+
                '</td><td class="list-users__td"> <input type="checkbox" name="user'
                +resp[i].UserKey+'" id="'+resp[i].UserKey+'"> </td></tr>';
            }
            /*var p=document.getElementsByClassName("list-users__tbody");
            p.html(tabla);*/
            $('tbody.list-users__tbody').html(tabla);
        }
    });
    return false;
}

function Eliminar(){
    //alert("d");
    var pathname = window.location.pathname;
    var formel=document.forms["form"];
    var chk=formel.querySelectorAll('input[type="checkbox"]:checked');
    var uselim=[];
    chk.forEach(i => {
        chkd=i.id;
        uselim.push(chkd);
        //alert(uselim);   
    });
    /*for(var i=0; i<chk.lenght; i++){
        chkd=Number(chk[i].id);
        uselim.push(chkd);
        alert(chkd);
    }*/
    var search=$('#search').val();
    var user=document.getElementsByName("user");
    
    var parametros={
        "pathname" : pathname,
        "search" : search,
        "user" : user,
        "user_keyarr" : uselim
    };

    $.ajax({
        url: "http://localhost/menu-of-add-delete-and-find-users/class/user.php",
        type: "post",
        data: $('#form').serialize(),
        success: function(data){
            //alert("zz");
            Buscar();
            //alert("rr");
        }
    });

    return false;
}
