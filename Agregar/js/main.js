
function state(){
    var name=$('#name').val();
    var surname=$('#surname').val();
    var email=$('#email').val();
    var pathname = window.location.pathname;
    var parametros={
        "name" : name,
        "surname" : surname,
        "email" : email,
        "pathname" : pathname
    };
    $.ajax({
        url: "http://localhost/MYS/menu-of-add-delete-and-find-users/class/user.php",
        type: "post",
        data: parametros,
        success: function(data){
            var resp=JSON.parse(data);
            var r='Usuario agregado: <br>'+resp;
            $('div.resp').html(r);
        }
    });
    return false;
}
