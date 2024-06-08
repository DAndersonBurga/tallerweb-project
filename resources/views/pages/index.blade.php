@extends("layouts.layout")

@section("content")

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/img/img-1.jpg" alt="img autogas racho 1"/>
            </div>
            <div class="swiper-slide">
                <img src="/img/img-2.jpeg" alt="img autogas racho 2"/>
            </div>
            <div class="swiper-slide">
                <img src="/img/img-3.jpeg" alt="img autogas racho 3"/>
            </div>
            <div class="swiper-slide">
                <img src="/img/img-4.jpeg" alt="img autogas racho 4"/>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="content-grid container">
        <main class="content-main">
            <div class="content-main__grid">
                <div class="content-main__info">
                    <h1 class="heading">Un taller de coches con más de
                        <br>
                        <span>22 años de experiencia</span>
                    </h1>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At laboriosam sint dolorum vel atque
                        earum
                        aspernatur dolores nulla incidunt impedit reiciendis beatae, quaerat ea est hic exercitationem
                        sequi
                        ad repudiandae!</p>

                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda unde dolores repellendus,
                        dolorem
                        exercitationem delectus reiciendis odio dicta provident et natus recusandae, est ullam saepe,
                        ipsam
                        praesentium! Hic, architecto ducimus.</p>
                </div>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/bLvd1IIZ1x8?si=OpPAv7Y8hv8xTqQQ"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </main>

        <aside>
            Esto es un aside
        </aside>
    </div>

    <div class="hero-bg">
        <section class="hero container">
            <h1 class="heading">Problemas y
                <br>
                <span>Soluciones</span>
            </h1>

            <div class="hero__grid">
                <div class="hero__img-container">
                    <img class="hero__img" src="./img/icons/ico-caja.svg" alt="caja icon">
                    <p>Seguridad</p>
                </div>

                <div class="hero__img-container">
                    <img class="hero__img" src="./img/icons/ico-control.svg" alt="control icon">
                    <p>Mantenimiento</p>
                </div>

                <div class="hero__img-container">
                    <img class="hero__img" src="./img/icons/ico-electronica.svg" alt="electronica icon">
                    <p>Caja de cambios</p>
                </div>

                <div class="hero__img-container">
                    <img class="hero__img" src="./img/icons/ico-mantenimiento.svg" alt="electronica icon">
                    <p>Electrónica</p>
                </div>

                <div class="hero__img-container">
                    <img class="hero__img" src="./img/icons/ico-ruedas.svg" alt="ruedas icon">
                    <p>Unidad de Control</p>
                </div>

                <div class="hero__img-container">
                    <img class="hero__img" src="./img/icons/ico-seguridad.svg" alt="seguridad icon">
                    <p>Alineación de ruedas</p>
                </div>

            </div>
        </section>
    </div>

    <div class="content-grid container">
        <main class="content-main">
            <div class="content-main__grid">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bLvd1IIZ1x8?si=OpPAv7Y8hv8xTqQQ"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <div class="content-main__info">
                    <h1 class="heading">Preparados para encargarnos de
                        <br>
                        <span>todo tipo de vehículos</span>
                    </h1>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At laboriosam sint dolorum vel atque
                        earum
                        aspernatur dolores nulla incidunt impedit reiciendis beatae, quaerat ea est hic exercitationem
                        sequi
                        ad repudiandae!</p>

                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda unde dolores repellendus,
                        dolorem
                        exercitationem delectus reiciendis odio dicta provident et natus recusandae, est ullam saepe,
                        ipsam
                        praesentium! Hic, architecto ducimus.</p>
                </div>
            </div>
        </main>

        <aside>
            Esto es un aside
        </aside>
    </div>

    <div class="socialmenu">
        <a class="socialmenu__link" href="#">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 36 36"
                fill="url(#a)"
                height="40"
                width="40"
            >
                <defs>
                    <linearGradient x1="50%" x2="50%" y1="97.078%" y2="0%" id="a">
                        <stop offset="0%" stop-color="#0062E0"/>
                        <stop offset="100%" stop-color="#19AFFF"/>
                    </linearGradient>
                </defs>
                <path
                    d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"
                />
                <path
                    fill="#FFF"
                    d="m25 23 .8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"
                />
            </svg>
        </a>
        <a class="socialmenu__link" href="#">
            <svg
                viewBox="0 0 256 259"
                width="45"
                height="45"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid"
            >
                <path
                    d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                    fill="#00E676"
                />
                <path
                    d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                    fill="#FFF"
                />
            </svg>
        </a>
    </div>

@endsection
