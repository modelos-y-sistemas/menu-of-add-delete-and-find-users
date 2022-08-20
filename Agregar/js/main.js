
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
    return false;
}
