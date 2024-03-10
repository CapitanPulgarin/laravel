<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="arriba">
    <div class="btn-menu">
        <label for="btn-menu">☰</label>
    </div>
    <h1>KEPPLER</h1>
    <h2>Relajacion absoluta</h3>
</div>
<input type="checkbox" id="btn-menu">
<h3>SERVICIOS</h3>
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Portafolio</a>
			<a href="#">Servicios</a>
			<a href="#">Suscribirse</a>
			<a href="#">Facebook</a>
			<a href="#">Youtube</a>
			<a href="#">Instagram</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<div class="wrapper">
    <div class="card">
        <img src="img/sauna.jpg" >
        <div class="info">
            <h1>SAUNA/SPA</h1>
            <p>“¿Tu jefe te está sacando canas?<br> ¡Nosotros te las quitamos!”</p>
            <a href="#" class="btn">Reservar</a>
        </div>
    </div>
     <div class="card">
        <img src="img/comida.jpg" >
        <div class="info">
            <h1>COMIDA</h1>
            <p>Cuidamos tu comida, cuidamos de ti. <br>
                Siempre lo mejor.<br>
                La casa del verdadero placer.<br>
                Los sabores que te harán sentir bien.<br>
                Te conoce bien.<br>
                Sabemos lo que te gusta.<br>
                Solo lo mejor en tu mesa.<br>
                Te alimentamos bien.</p>
            <a href="#" class="btn">Reservar</a>
        </div>
    </div>
    <div class="card">
        <img src="img/bar.jpg" >
        <div class="info">
            <h1>BAR</h1>
            <p>¡Si quiere olvidar sus problemas, venga aquí y podrá olvidar todo! <br>
                “Todo el mundo necesita creer en algo. Yo creo que me tomaré otra cerveza”.</p>
            <a href="#" class="btn">Reservar</a>
        </div>
    </div>
    <div class="card">
        <img src="img/gym.jpg" >
        <div class="info">
            <h1>GYM</h1>
            <p>Evalúate. Primero tienes que entender cuáles son tus hábitos y tu estilo de vida. Nadie mejor que tú para conocer tus límites, pero sobre todo conocer tus fortalezas en el Gym y en la vida.</p>
            <a href="#" class="btn">Reservar</a>
        </div>
    </div>
    {{-- <div class="card">
        <img src="img/habi.jpg" >
        <div class="info">
            <h1>HABITACION</h1>
            <p>Busca la Habitacion que necesitas para tu comodidad.</p>
            <a href="#" class="btn">Reservar</a>
        </div>
    </div> --}}
    <div class="icon">
        <a href="#"><i class="fa-brands fa-square-youtube"></a></i>
        <a href="#"><i class="fa-brands fa-instagram"></a></i>
        <a href="#"><i class="fa-brands fa-facebook"></a></i>
    </div>
</div>            
</body>
</html>