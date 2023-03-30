<x-layout>
    {{-- <a href="/" class="inline-block text-black ml-4 mb-4"> Atrás
    </a> --}}
    @include('partials._search')
    <div class="mx-auto w-[95%] max-w-[1170px] bg-white p-10 shadow">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6"
                src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png') }}" alt="" />

            <h3 class="text-2xl mb-2">
                {{ $job->title }}
            </h3>
            <div class="text-xl font-bold mb-4">{{ $job->company }}</div>

            <x-job-tags :tags="$job->tags" />

            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{ $job->location }}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div class="w-full">
                <h3 class="text-3xl font-bold mb-4">Descripción</h3>
                <div class="text-lg space-y-6">
                    {{ $job->description }}

                    <a href="mailto:{{ $job->email }}"
                        class="flex justify-center items-center bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80 bg-[#002776]"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                            strokeLinejoin="round" class="feather feather-mail mr-2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        Contactar con la empresa</a>

                    <a href="{{ $job->website }}" target="_blank"
                        class="flex justify-center items-center bg-black text-white py-2 rounded-xl hover:opacity-80"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-globe mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                            </path>
                        </svg>
                        Visitar la página web</a>
                </div>
            </div>
        </div>


    </div>
    @if (auth()->user()->id === $job->user_id)
            <div class="bg-white flex mt-[18px] py-[14px] pl-[18px] w-[95%] max-w-[1170px] mx-auto shadow">
                <a href="/jobs/{{ $job->id }}/edit" class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-edit mr-2">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>Edit
                </a>

                <form method="POST" action="/jobs/{{ $job->id }}" class="ml-[28px]">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500 flex justify-center items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg> Delete</button>
                </form>
            </div>
        @endif
</x-layout>
