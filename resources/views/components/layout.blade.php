<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <link rel="stylesheet" type="text/css" href={{ asset('/css/app.css') }} />
    <title>Jobs</title>
</head>

<body class="bg-[#eee] w-full h-full grid h-screen bodyRows">
    @if (session()->has('message'))
       <span class="hidden"> {{ $text = session('message') }}</span>
        <script>

            Swal.fire({
                // title: 'Error!',
                position: "center",
                title: @json($text),
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    <header class="bg-[#fff] max-w-[1170px] w-[95%] h-[105px] mx-auto flex items-center justify-between shadow">
        <a href="/">
            <div class="flex ml-[20px] items-center">
                <h1 class="text-[#002776] text-[36px] font-extrabold uppercase">Jobs</h1>
                <span class="text-[#012676] leading-[17px] ml-[10px]">Working for <br> your tomorrow</span>
            </div>
        </a>
        <ul class="text-[#00abe5] flex self-end font-medium mb-[12px] mr-[22px]">
            @auth
                <li class="hover:text-[#002776]">
                    <a href="/jobs/create">Crear oferta</a>
                </li>
                <li class="hover:text-[#002776] ml-[22px]">
                    <a href="/jobs/manage">Gestionar ofertas</a>
                </li>
                <li class="hover:text-[#002776] ml-[22px]">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            @else
                <li class="hover:text-[#002776]">
                    <a href="/register">Registrarse</a>
                </li>
                <li class="hover:text-[#002776] ml-[22px]">
                    <a href="/login"> Iniciar sesión</a>
                </li>
            @endauth
        </ul>
    </header>

    <main class="mb-[50px]">
        {{ $slot }}
    </main>

    <footer class="flex bg-white w-full h-[96px] mx-auto items-center justify-evenly shadow">
        <a href="https://www.linkedin.com/in/ballesterosrivasa/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                <path
                    d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z" />
            </svg>
        </a>

        <p class="flex ">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"
                class="feather feather-mail">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <span class="ml-2">
                ballesterosrivasa@gmail.com
            </span>
        </p>
    </footer>
</body>

</html>
