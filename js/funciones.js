var fun=(function () {
  var datos=function () {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // callback(this.responseText);
        // console.log(JSON.parse(this.responseText));
        console.log(this.responseText);
      }
    }
    xhttp.open("GET", "twitter/tweets.php", true);
    xhttp.send();
  }

  var main=function () {
    var token=document.getElementById('token').value;
    var token_secreto=document.getElementById('token_secreto').value;
    console.log(token);
    console.log(token_secreto);
  }

  return {
    sesion:main
  };
})();
document.getElementById("btnDatos").addEventListener("click",fun.sesion);
