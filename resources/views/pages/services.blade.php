@extends("layouts.layout")

@section("content")

@vite(["/resources/css/service.css"])

<section class="service-hero">
    <div style="text-align: center;">
        <h1 class="service-hero__title"><span>Precios económicos y una calidad excelente de servicios</span></h1>
    </div>
</section>
<nav>
    <div style="text-align: center">
        <div class="content">
            <h2>NUESTROS SERVICIOS</h2>
        <div class="menu">
            <a href="#conversion">CONVERSIÓN A GAS</a>
            <a href="#seguridad">SEGURIDAD</a>
            <a href="#mantenimiento">MANTENIMIENTO</a>
            <a href="#caja">CAJA DE CAMBIOS</a>
            <a href="#electronica">ELECTRÓNICA</a>
            <a href="#alineacion">ALINEACIÓN DE RUEDAS</a>
        </div>
        </div>
    </div>
</nav>
<style>
    body {
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
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 10px 0;
    }
    .menu a {
        color: black;
        font-weight: bold;
        text-decoration: none;
        margin: 5px;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .main-content {
        padding: 80%;
    }
    .section {
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: space-between;
        height: 100%;
        margin-bottom: 20px;
    }
    .section h3 {
        color: black;
        padding-top: .5rem;
        text-align: center;
    }

    .section p {
        padding: 1rem;
        text-align: justify;
    }

    .section img {
        display: block;
        margin: 0 auto;
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .content-main {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        justify-content: center;
    }

    .content-main__flex {
        flex: 1 1 300px;
        display: flex;
        flex-direction: column;
        gap: 2rem;
        border: 1px solid #e1e1e1;
        border-radius: 5px;
        padding: 10px;
    }

    .img-container {
        width: 100%;
        overflow: hidden;
    }


    @media (max-width: 768px) {
        .menu {
            flex-direction: column;
            align-items: center;
        }

        .content-main__flex {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .section p {
            padding: 0.5rem;
        }
    }

</style>
<div class="content-grid container">
    <main class="content-main">
        <div class="content-main__flex">
            <div id="conversion" class="section">
                <h3>Conversión a Gas</h3>
                <p>La conversión a gas consiste en adaptar un vehículo para que
                    funcione con gas natural o gas licuado de petróleo (GLP) en
                    lugar de gasolina o diésel. Esto ofrece beneficios como un menor
                    costo de combustible y una reducción en las emisiones contaminantes,
                    sin comprometer el rendimiento del motor.</p>
                <div class="img-container">
                    <img src="/img/img-4.jpeg" alt="img arreglo motor"/>
                </div>
            </div>
        </div>

        <div class="content-main__flex">
            <div id="seguridad" class="section">
                <h3>Seguridad</h3>
                <p>Ofrecemos servicios de seguridad vehicular que incluyen la instalación
                    y mantenimiento de sistemas de frenos, airbags, cinturones de seguridad
                    y otros componentes críticos. Garantizamos que tu vehículo cumpla con
                    los estándares de seguridad más altos para protegerte a ti y a tus
                    pasajeros en todo momento.</p>
                <div class="img-container">
                    <img src="/img/arreglo-motor2.avif" alt="img arreglo motor 2"/>
                </div>
            </div>
        </div>

        <div class="content-main__flex">
            <div id="mantenimiento" class="section">
                <h3>Mantenimiento</h3>
                <p>Proveemos servicios completos de mantenimiento vehicular que abarcan desde
                    cambios de aceite y filtros, hasta revisiones de frenos, baterías, y
                    sistemas de refrigeración. Nuestro objetivo es mantener tu vehículo en
                    óptimas condiciones, asegurando su rendimiento y prolongando su vida útil.</p>
                <div class="img-container">
                    <img src="/img/arreglo-motor3.jpg" alt="img arreglo motor 3"/>
                </div>
            </div>
        </div>

        <div class="content-main__flex">
            <div id="caja" class="section">
                <h3>Caja de Cambios</h3>
                <p>Ofrecemos servicios de diagnóstico, reparación y mantenimiento de la caja
                    de cambios de tu vehículo, ya sea manual o automática. Nos aseguramos de
                    que el sistema de transmisión funcione de manera suave y eficiente, mejorando
                    el rendimiento y la durabilidad de tu vehículo.</p>
                <div class="img-container">
                    <img src="/img/arreglo-motor5.jpeg" alt="img arreglo motor 5"/>
                </div>
            </div>
        </div>

        <div class="content-main__flex">
            <div id="electronica" class="section">
                <h3>Electronica</h3>
                <p>Brindamos servicios especializados en la reparación y mantenimiento de los
                    sistemas electrónicos de tu vehículo, incluyendo diagnóstico de computadoras
                    de a bordo, sistemas de navegación, sensores y unidades de control. Aseguramos
                    que todos los componentes electrónicos funcionen correctamente para una
                    conducción segura y cómoda.</p>
                <div class="img-container">
                    <img src="/img/arreglo-motor4.jpeg" alt="img arreglo motor 4"/>
                </div>
            </div>
        </div>

        <div class="content-main__flex">
            <div id="alineacion" class="section">
                <h3>Alineación de ruedas</h3>
                <p>Ofrecemos servicios de alineación de ruedas para asegurar que tus neumáticos
                    estén perfectamente alineados. Esto mejora la estabilidad del vehículo,
                    reduce el desgaste irregular de los neumáticos y optimiza el rendimiento
                    general del automóvil, garantizando una conducción más segura y eficiente.</p>
                <div class="img-container">
                    <img src="/img/arreglo-motor1.jpg" alt="img arreglo motor 1"/>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
