var fun=(function () {
  var datos=function () {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // callback(this.responseText);
        console.log(JSON.parse(this.responseText));
      }
    }
    xhttp.open("GET", "twitter/tweets.php", true);
    xhttp.send();
  }


  return {
    sesion:datos
  };
})();
document.getElementById("btnDatos").addEventListener("click",fun.sesion);
