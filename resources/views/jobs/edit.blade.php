<x-layout>
    @include('partials._search')
    <div class="bg-white max-w-[1170px] w-[95%] mx-auto pb-[35px] shadow">
        <header class="border-b border-b-[#ddd] flex text-[#002776] h-[80px] items-center pl-[20px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-edit">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
            </svg>
            <h2 class="text-[22px] font-medium ml-[10px]">Editar: {{ $job->title }}</h2>
        </header>
        <form method="POST" action="/jobs/{{ $job->id }}" enctype="multipart/form-data"
            class="border border-[#ddd] mx-auto max-w-[700px] mt-[35px]">
            @csrf
            @method('PUT')
            <div class="p-4">
                <div class="flex flex-col">
                    <label for="company">Nombre de la compañía</label>
                    <input type="text" name="company" value="{{ $job->company }}"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]" />

                    @error('company')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="flex flex-col mt-[14px]">
                    <label for="title">Título del empleo</label>
                    <input type="text" name="title" placeholder="Ejemplo: Junior Laravel Developer"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]"
                        value="{{ $job->title }}" />

                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="location">Localización del empleo</label>
                    <input type="text" name="location" placeholder="Ejemplo: Remoto, Granada, etc"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]"
                        value="{{ $job->location }}" />

                    @error('location')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="email">
                        Email de contacto
                    </label>
                    <input type="text" name="email" value="{{ $job->email }}"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]" />

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="website">
                        Página web
                    </label>
                    <input type="text" name="website" value="{{ $job->website }}"
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
                        value="{{ $job->tags }}" />

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

                    <img class="w-48 mr-6 mb-6 mt-[6px]"
                        src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png') }}"
                        alt="" />

                    @error('logo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <label for="description">
                        Descripción del empleo
                    </label>
                    <textarea name="description" rows="10" placeholder="Incluye tareas, requisitos, salario, etc"
                        class="focus:border-2 focus:outline-none focus:border-[#a5e8ff] createJobInputShadow border border-[#ced4da] pl-[8px] mt-[6px]">{{ $job->description }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-[14px]">
                    <button class="bg-[#002776] hover:bg-[#003DB8] mx-auto text-white w-full h-[40px]">
                        Actualizar trabajo
                    </button>

                    <a href="/" class="mt-[28px] text-[#009fda] hover:text-[#002776] block text-center"> Atrás
                    </a>
                </div>
            </div>


        </form>
    </div>
</x-layout>
