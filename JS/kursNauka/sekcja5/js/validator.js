(function(){

  function displayErrors(errors, form){

    console.log(errors);

    var p = form.querySelector(".form-errors");

    if(!p){
      p = document.createElement("p");
    }

    p.className = "form-errors";
    p.innerHTML = errors.join("<br>");

    form.insertBefore(p, form.children[0]);

  }

  function isEmail(text){
    return text.indexOf("@") !== -1;
  }

  function isNotEmpty(text){
    return text !== "";
  }

  var form = document.querySelector("#form"),
      emailField = form.querySelector("input[name='email']"),
      nameField  = form.querySelector("input[name='text']"),
      messageField  = form.querySelector("textarea[name='message']");

  form.addEventListener("submit", function(e){

    e.preventDefault();

    var errors = []

    if( !isEmail(emailField.value) ){
      errors.push("Podaj poprawny email.");
      emailField.classList.add("invalid");
    }else{
      emailField.classList.remove("invalid");
    }

    if( !isNotEmpty(nameField.value)){
      errors.push("Podaj swoje imie");
      nameField.classList.add('invalid');
    }else{
      nameField.classList.remove('invalid');
    }

    if( !isNotEmpty(messageField.value)){
      errors.push("Podaj swoją wiadomość");
      messageField.classList.add('invalid');
    }else{
      messageField.classList.remove('invalid');
    }

    if(errors.length){
      displayErrors(errors, form);
    }else{
      form.submit();
    }


  }, false);

})();
