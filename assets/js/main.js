$(document)
.on("submit", "form.register", function(event){
  event.preventDefault();

  var _form = $(this);

  var data = {
    login: $("input[type='text']", _form).val(),
    password: $("input[type='password']", _form).val()
  }

  console.log(data);
  alert(data);

  return false;
})
