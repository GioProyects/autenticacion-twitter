var fun=(function () {
  var datos=function (token,token_secreto) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // callback(this.responseText);
        // console.log(JSON.parse(this.responseText));
        console.log(this.responseText);
      }
    }
    xhttp.open("GET", "twitter/tweets.php?token="+token+"token_secreto="+token_secreto, true);
    xhttp.send();
  }

  var main=function () {
    var token=document.getElementById('token').textContent;
    var token_secreto=document.getElementById('token_secreto').textContent;
    datos(token,token_secreto);
  }

  return {
    sesion:main
  };
})();
document.getElementById("btnDatos").addEventListener("click",fun.sesion);
