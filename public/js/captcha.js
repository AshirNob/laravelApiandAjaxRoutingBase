var code;
function createCaptcha() {
  document.getElementById('captcha').innerHTML = "";
  var charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  var lengthOtp = 2;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    var index = Math.floor(Math.random() * charsArray.length + 1); 
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 320;
  canv.height = 50;
  canv.style.letterSpacing='25px';
  var ctx = canv.getContext("2d");
  ctx.font = "35px  sans-serif";
  ctx.strokeText(captcha.join(" "), 0, 40);
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); 
}
function validateCaptcha(vall) {
  if(vall.length==2){
    if (document.getElementById("cpatchaTextBox").value == code) {
        document.getElementById('lgnSbmt').disabled=false;
      }else{
       document.getElementById('captcha_err').innerHTML=`Invalid Captcha`;
      }
  }else{
    document.getElementById('lgnSbmt').disabled=true;
  }
}   


window.onload=()=>{
    document.getElementById('lgnSbmt').disabled=true;
    createCaptcha();
}