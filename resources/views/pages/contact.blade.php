@extends("layouts.layout")

@section("content")

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <main class="bg-zinc-50">
        <h1 class="text-center font-normal text-4xl py-6">
            Contactanos
        </h1>

        <nav class="bg-amber-400 h-[3rem] flex gap-4 justify-center mb-8">
            <button
                class="bg-zinc-900 px-4 h-[4rem] text-white font-bold uppercase hover:bg-zinc-600 transition-all"
            >
                Información de contacto
            </button>

            <button
                class="px-4 text-white font-bold uppercase"
            >
                Reservar una cita
            </button>
        </nav>

        <section class="flex gap-2 bg-amber-400 max-w-[1200px] mx-auto">
            <div class="w-6/12 px-6 lg:w-7/12 py-2">
                <h2 class="text-center text-2xl mb-2 text-white py-4 font-black">Información de Contacto</h2>

                <div class="flex flex-col gap-6">
                    <p class="flex gap-1 flex-col font-bold rounded-md">
                        Dirección:
                        <span class="font-normal bg-amber-600 text-white p-2">Avenida Siempreviva 742</span>
                    </p>

                    <p class="flex gap-1 flex-col font-bold rounded-md">
                        Teléfono: <span class="font-normal bg-amber-600 text-white p-2">+51 987654321</span>
                    </p>

                    <p class="flex gap-1 flex-col font-bold rounded-md">
                        Horario:
                        <span class="font-normal bg-amber-600 text-white p-2">8:00 a.m. - 6:00 p.m.</span>
                    </p>

                    <p class="flex gap-1 flex-col font-bold rounded-md">
                        E-mail: <span class="font-normal bg-amber-600 text-white p-2">autogasracho@gmail.com</span>
                    </p>

                    <div>
                        <h3 class="font-bold">Redes sociales</h3>
                        <div>
                            <a class="inline-block bg-blue-500 text-white p-2 rounded-md">
                                <i class="inline-block" data-feather="facebook"></i>
                                Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-6/12 lg:w-5/12 flex px-4 items-center justify-center">
                <img class="h-[30rem] w-full object-cover" src="/img/contactus-img.jpeg" alt="Contact Us image">
            </div>
        </section>

        <section class="max-w-[1200px] mx-auto pb-6">
            <form class="bg-white p-4">
                <h2 class="text-2xl text-blue-500 font-normal mb-2">Formulario de contacto</h2>

                <div class="flex gap-4">
                    <div class="w-1/2 text-gray-400">
                        <h3 class="uppercase text-xl font-medium mb-2">Datos del cliente</h3>

                        <div class="flex flex-col gap-2">
                            <div class="flex flex-col gap-1">
                                <label for="type-document">Tipo de documento*</label>
                                <select class="p-2 border-[1px] border-gray-300 rounded-md" name="typeDocument" id="type-document">
                                    <option value="">Seleccione un tipo de documento</option>
                                    <option value="DNI">DNI</option>
                                </select>
                            </div>

                            <div class="flex flex-col gap-1">
                                <label for="number-document">N° de documento*</label>
                                <input class="p-2 border-[1px] border-gray-300 rounded-md" id="number-document" type="text" placeholder="01234567">
                            </div>

                            <div class="flex flex-col gap-1">
                                <label for="name">Nombre*</label>
                                <input class="p-2 border-[1px] border-gray-300 rounded-md" id="name" type="text" placeholder="Juan">
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <h3 class="uppercase text-xl font-medium text-gray-400 mb-2">Datos del vehículo</h3>

                        <div class="flex flex-col gap-2">
                            <div class="flex flex-col gap-1">
                                <label for="car-model">Modelo*</label>
                                <select class="p-2 border-[1px] border-gray-300 rounded-md" name="carModel" id="car-model">
                                    <option value="">Seleccione un modelo</option>
                                    <option value="nissan">Nissan</option>
                                </select>
                            </div>

                            <div class="flex flex-col gap-1">
                                <label for="car-version">Versión*</label>
                                <select class="p-2 border-[1px] border-gray-300 rounded-md" name="carVersion" id="car-version">
                                    <option value="">Seleccione una versión</option>
                                    @php
                                        for ($year = date('Y'); $year >= 2008; $year--) {
                                            echo "<option value=\"$year\">$year</option>";
                                        }
                                    @endphp
                                </select>
                            </div>

                            <div class="flex flex-col gap-1">
                                <label for="car-color">Color*</label>
                                <input class="p-2 border-[1px] border-gray-300 rounded-md" name="carColor" id="car-color" type="text" placeholder="rojo, azul, ...">
                            </div>

                            <div class="flex justify-end">
                                <input
                                    class="px-10 py-2 bg-blue-600 rounded-md text-white cursor-pointer hover:bg-blue-700 transition-all"
                                    type="submit"
                                    value="Enviar"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <script>
        feather.replace();
    </script>
@endsection
