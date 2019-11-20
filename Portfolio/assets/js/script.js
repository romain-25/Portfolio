///////////////// DEBUT ANIMATION H1 //////////////

let TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 100;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
}

///////////////// FIN ANIMATION H1 //////////////

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
})