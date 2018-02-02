$(document)
.on("submit", "form.register", function(event){
  event.preventDefault();

  var _form = $(this);
  var _error = $(".js-error", _form);

  var dataObj = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val()
  }

  if(dataObj.email.length < 7) {
    _error
      .text("Please enter a valid email address")
      .show();
      return false;
  } else if (dataObj.password.length < 11){
    _error
      .text("Please enter a password that it at least 11 characters long")
      .show();
      return false;
  }

  //Assuming the code gets this far, start the ajax proccess.
  _error.hide();

  $.ajax({
    type: 'POST',
    url: '/ajax/register.php',
    data: dataObj,
    dataType: 'json',
    async: true,
  })
  .done(function ajaxDone(data) {
    //Whatever data is
    console.log(data);
    if(data.redirect !== undefined){
      window.location = data.redirect;
    }
  })
  .fail(function ajaxFailed(e) {
    //This failed
    console.log(e);
  })
  .always(function ajaxAlwaysDoThis(data) {
    //Always do
    console.log('Always');
  })

  return false;
})
