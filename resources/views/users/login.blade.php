<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href={{ asset('/css/app.css') }} />
    <title>Jobs</title>
</head>

<body class="loginBackground flex justify-end items-center">
    <div class="bg-white w-[360px] mr-[73px]">
        <div class="px-[3.5rem] py-[3rem]">
            <header class="flex items-center">
                <h1 class="text-[#002776] text-[36px] font-extrabold uppercase">Jobs</h1>
                <span class="text-[#012676] leading-[17px] ml-[10px]">Working for <br> your tomorrow</span>
            </header>

            <form method="POST" action="/users/authenticate">
                @csrf

                <div class="flex flex-col mx-auto mt-[22px]">
                    <label for="email">Introduce tu correo electrónico</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="mt-1 h-[40px] pl-[12px] border border-[#e3e4e4]"/>

                    @error('email')
                        <p class="text-[#e98549]">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mx-auto mt-[22px]">
                    <label for="password">
                        Introduce tu contraseña
                    </label>
                    <input type="password" name="password" value="{{ old('password') }}" class="mt-1 h-[40px] pl-[12px] border border-[#e3e4e4]" />

                    @error('password')
                        <p class="text-[#e98549]">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-center mt-[22px]">
                    <button type="submit" class="bg-[#002776] hover:bg-[#003DB8] mx-auto text-white w-full h-[40px]">
                        Iniciar sesión
                    </button>
                </div>

                <div class="mt-[22px]">
                    <p>
                        <span class="italic">¿No tienes una cuenta?</span>
                        <a href="/register" class="text-[#009fda] hover:text-[#002776]">Regístrate aquí</a>
                    </p>
                </div>

                <a href="/" class="mt-[28px] text-[#009fda] hover:text-[#002776] block text-center">Atrás</a>
            </form>
        </div>
    </div>
</body>

</html>
