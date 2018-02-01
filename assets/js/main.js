$(document)
.on("submit", "form.register", function(event){
  event.preventDefault();

  alert('Form was submitted.');

  return false;
})
