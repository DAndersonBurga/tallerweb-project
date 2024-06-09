@extends("layouts.layout")

@section("content")
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            object-fit: cover;
        }
    </style>

    <main class="relative">
        <h1 class="text-center font-normal text-4xl py-6">
            Reseñas
        </h1>

        <section class="flex gap-2 max-w-[1200px] mx-auto pb-[8rem]">

            <div class="w-[60rem] mx-auto">
                <p class="text-center pb-14">Descubre lo que nuestros clientes opinan sobre nuestros excelentes servicios.</p>

                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="w-[80%] relative border-[1px] border-gray-100">
                                <div class="rounded-t-md bg-sky-400 h-[1rem] w-full"></div>
                                <img
                                    class="rounded-full -mt-[3.5rem] mx-auto h-[6rem] w-[6rem]"
                                    src="https://img.freepik.com/fotos-premium/hombre-traje-frente-ventana-mirando-paisaje-urbano_800563-5848.jpg"
                                    alt="autor img"
                                >

                                <div class="py-4 text-pretty font-normal border-b-[1px] border-gray-100">
                                    <p>Es una empresa que escucha e invierte en sus clientes.</p>
                                    <p>Saben que nuestro éxito es también el suyo.</p>
                                </div>

                                <div class="flex justify-center flex-col gap-2 py-4">
                                    <h3 class="uppercase font-bold">Victor Salome</h3>
                                    <p>Uno de nuestros clientes</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-[80%] relative border-[1px] border-gray-100">
                                <div class="rounded-t-md bg-sky-400 h-[1rem] w-full"></div>
                                <img
                                    class="rounded-full -mt-[3.5rem] mx-auto h-[6rem] w-[6rem]"
                                    src="https://img.freepik.com/fotos-premium/hombre-traje-frente-ventana-mirando-paisaje-urbano_800563-5848.jpg"
                                    alt="autor img"
                                >

                                <div class="py-4 text-pretty font-normal border-b-[1px] border-gray-100">
                                    <p>Es una empresa que escucha e invierte en sus clientes.</p>
                                    <p>Saben que nuestro éxito es también el suyo.</p>
                                </div>

                                <div class="flex justify-center flex-col gap-2 py-4">
                                    <h3 class="uppercase font-bold">Victor Salome</h3>
                                    <p>Uno de nuestros clientes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </section>
    </main>
@endsection
