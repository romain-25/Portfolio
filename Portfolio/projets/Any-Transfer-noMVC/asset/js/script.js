
/////   NOM   //////

  
let form = document.querySelector("#formulaire");
let email = document.querySelector('#email');
let message = document.querySelector('#message');
let nom = document.querySelector('#nom')

form.addEventListener("submit", function(e){
  e.preventDefault();
  //vérification
  if(nom.value.match(/^[a-zA-Z ]+$/)){
    email.focus();
    nom.classList.add("green")
    nom.classList.remove("red")

}
  else{
    alert("Remplire le nom ")
    nom.classList.add("red")
    nom.classList.remove("green")
  }

  if(email.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
    message.focus();
    email.classList.add("green")
    email.classList.remove("red")
  }
  else{
   
    alert("Remplire l'email ") 
    email.classList.add("red")
    email.classList.remove("green")
  }

  if(message.value.match(/^[a-zA-Z,\.?!:; ]+$/)){
    message.classList.add("green")
    message.classList.remove("red")
  }
  else{
    alert("Remplire le message ")
    message.classList.add("red")
    message.classList.remove("green")
  }

  if ( nom.value.match(/^[a-zA-Z ]+$/) && email.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) && message.value.match(/^[a-zA-Z,\.?!:; ]+$/) ) {
    form.submit();
  }

  else {
    false
  }


  
  /* form.submit(); */
  console.log("form submitted");
})