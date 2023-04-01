<x-layout>
    @include('partials._search')
    <div class="bg-white max-w-[1170px] w-[95%] mx-auto pb-[35px] shadow">
        <header class="border-b border-b-[#ddd] flex text-[#002776] h-[80px] items-center pl-[20px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file-plus">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="12" y1="18" x2="12" y2="12"></line>
                <line x1="9" y1="15" x2="15" y2="15"></line>
            </svg>
            <h2 class="text-[22px] font-medium ml-[10px]">Crear una oferta de empleo</h2>
        </header>

        <form method="POST" action="/jobs" enctype="multipart/form-data"
            class="border border-[#ddd] mx-auto max-w-[700px] mt-[35px]">
            @csrf
            <div class="p-4">
                <div class="flex flex-col">
                    <label for="company">Nombre de la compañía</label>
                    <input type="text" name="company" value="{{ old('company') }}"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]" />

                    @error('company')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="title">Título del empleo</label>
                    <input type="text" name="title" placeholder="Ejemplo: Junior Laravel Developer"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]"
                        value="{{ old('title') }}" />

                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="location">Localización del empleo</label>
                    <input type="text" name="location" placeholder="Ejemplo: Remoto, Granada, etc"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]"
                        value="{{ old('location') }}" />

                    @error('location')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="email">
                        Email de contacto
                    </label>
                    <input type="text" name="email" value="{{ old('email') }}"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]" />

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="website">
                        Página web
                    </label>
                    <input type="text" name="website" value="{{ old('website') }}"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]" />

                    @error('website')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="tags">
                        Etiquetas (Separadas con comas)
                    </label>
                    <input type="text" name="tags" placeholder="Ejemplo: Laravel, PHP, React, etc"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]"
                        value="{{ old('tags') }}" />

                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="logo">
                        Logo de la compañía
                    </label>
                    <input type="file" name="logo"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]" />

                    @error('logo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="description">
                        Descripción del empleo
                    </label>
                    <textarea name="description" rows="10" placeholder="Incluye tareas, requisitos, salario, etc"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]">{{ old('description') }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <button class="bg-[#002776] hover:bg-[#003DB8] mx-auto text-white w-full h-[40px]">
                        Crear oferta de empleo
                    </button>

                    <a href="/" class="mt-[28px] text-[#009fda] hover:text-[#002776] block text-center"> Atrás
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-layout>
