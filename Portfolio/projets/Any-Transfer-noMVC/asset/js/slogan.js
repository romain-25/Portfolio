// var message = "Send Any Files to Anyone";
// var msgCount = 0;
// var blinkCount = 0;
// var blinkFlg = 0;
// var timer1, timer2;
// var messageLabel = document.getElementById("messageLabel");

// function textFunc() {
//    messageLabel.innerHTML = message.substring(0, msgCount);

//    if (msgCount == message.length) {
//       // Stop Timer
//       clearInterval(timer1);

//       // Start blinking animation!
//       timer2 = setInterval("blinkFunc()", 200);

//    } else {
//       msgCount++;
//    }
// }

// function blinkFunc() {

//    // Blink 5 times
//    if (blinkCount < 6) {
//       if(blinkFlg == 0) {
//          messageLabel.innerHTML = message;
//          blinkFlg = 1;
//          blinkCount++;
//       } else {
//          messageLabel.innerHTML = "";
//          blinkFlg = 0;
//       }
//    } else {
//       // Stop Timer
//       clearInterval(timer2);
//    }
// }


// timer1 = setInterval("textFunc()", 150); // Every 150 milliseconds



var TxtRotate = function(el, toRotate, period) {
   this.toRotate = toRotate;
   this.el = el;
   this.loopNum = 0;
   this.period = parseInt(period, 10) || 2000;
   this.txt = '';
   this.tick();
   this.isDeleting = false;
 };
 
 TxtRotate.prototype.tick = function() {
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
     delta = 200;
   }
 
   setTimeout(function() {
     that.tick();
   }, delta);
 };
 
 window.onload = function() {
   var elements = document.getElementsByClassName('txt-rotate');
   for (var i=0; i<elements.length; i++) {
     var toRotate = elements[i].getAttribute('data-rotate');
     var period = elements[i].getAttribute('data-period');
     if (toRotate) {
       new TxtRotate(elements[i], JSON.parse(toRotate), period);
     }
   }
   // INJECT CSS
   var css = document.createElement("style");
   css.type = "text/css";
   css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
   document.body.appendChild(css);
 };