export function Send(_parameters, function_parameter) {
  $.ajax({
    url: "http://localhost/menu-of-add-delete-and-find-users/class/user.php", 
    type: "post",
    data: _parameters,
    success: function_parameter(data)
  });
}
