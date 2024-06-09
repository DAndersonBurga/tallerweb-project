@extends("layouts.layout")

@section("content")

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .content {
            background-color: #000000;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .menu {
            background-color: #F5C518;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
        }
        .menu a {
            color: black;
            font-weight: bold;
            text-decoration: none;
        }
        .main-content {
            padding: 20px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h3 {
            color: #FFD700;
        }
        .section img {
            width: 40em;
        }
    </style>

    <div style="text-align: center;">
    <div class="main-content">
        <div id="experiencia" class="section">
            <h3>EXPERIENCIA</h3>
            <p>Contamos con más de 20 años de experiencia en la industria automotriz, especializándonos en
                conversiones a gas y ofreciendo una amplia gama de servicios para autos. Nuestro equipo de
                técnicos altamente calificados se asegura de brindar el mejor servicio y calidad a nuestros
                clientes.</p>
            <img src="/img/experiencia.jpg" alt="Experiencia">
        </div>
    </div>
    </div>
    <div class="content">
        <h2>¿QUIENES SOMOS?</h2>
        <div class="menu">
            <a href="#experiencia">EXPERIENCIA</a>
            <a href="#vision">VISIÓN</a>
            <a href="#mision">MISIÓN</a>
            <a href="#valores">VALORES</a>
            <a href="#horario">HORARIO</a>
        </div>
    </div>
    <div style="text-align: center;">
    <div class="main-content">
        <div id="vision" class="section">
            <h3>NUESTRA VISIÓN:</h3>
            <p>Ser el taller líder en conversiones a gas y servicios automotrices en la región,
                reconocidos por nuestra calidad, innovación y compromiso con nuestros clientes.</p>
            <img src="/img/vision.jpeg" alt="Visión">
        </div>
        <div id="mision" class="section">
            <h3>NUESTRA MISIÓN:</h3>
            <p>Proveer servicios de conversión a gas y mantenimiento automotriz de alta calidad,
                garantizando la satisfacción del cliente a través de la excelencia en nuestro trabajo.</p>
            <img src="/img/mision.jpeg" alt="Misión">
        </div>
        <div id="valores" class="section">
            <h3>NUESTROS VALORES:</h3>
            <p> <b>Compromiso:</b> Nos comprometemos a ofrecer siempre lo mejor para nuestros clientes. <br>
                <b>Calidad:</b> Garantizamos una alta calidad en cada uno de nuestros trabajos.<br>
                <b>Puntualidad:</b> Respetamos los tiempos establecidos para garantizar una mejor experiencia al cliente.</p>
            <img src="/img/valores.jpeg" alt="Valores">
        </div>
        <div id="horario" class="section">
            <h3>NUESTRO HORARIO:</h3>
            <p>Lunes a Viernes: 8:00 AM - 6:00 PM<br>
                Sábados: 8:00 AM - 2:00 PM<br>
                Domingos: Cerrado</p>
            <img src="/img/horario.jpg" alt="Horario">
        </div>
    </div>
    </div>
@endsection
