$(document)
.on("submit", "form.register", function(event){
  event.preventDefault();

  var _form = $(this);
  var _error = $(".js-error", _form);

  var data = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val()
  }

  if(data.email.length < 17) {
    _error
      .text("Please enter a valid email address")
      .show();
      return false;
  } else if (data.password.length < 11){
    _error
      .text("Please enter a password that it at least 11 characters long")
      .show();
      return false;
  }

  //Assuming the code gets this far, start the ajax proccess.
  _error.hide();

  console.log(data);

  return false;
});
