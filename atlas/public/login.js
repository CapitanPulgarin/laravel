document.getElementById("loginForm").addEventListener("submit", function(event){
    event.preventDefault();
  
  var username1 = document.getElementById("username1").value;
  var password = document.getElementById("password").value;
  
  if (username1 === username1 && password === password)
    
    var authenticated = true;
    
    if (authenticated){
      window.location.href = "/perf.html?username1=" + encodeURIComponent(username1); /*esta linea redirige al usuario al perf.html y pasa el nombre del usuario como parametro en la URL....pasa nombre de usuario como parametro de la URL......encodeURIComponent asegura que el nombre de usuario este correwctamente codificado en la URL */     
    }else{
      alert("Nombre de usuario o contraseña incorrectos");
    }
  });