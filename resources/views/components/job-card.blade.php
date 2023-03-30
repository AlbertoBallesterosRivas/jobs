@props(['job'])

<li class="bg-white shadow">
    <div class="flex justify-between items-center justify-between items-center p-4 h-full">
        <img class="hidden w-28 mr-6 md:block"
            src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/jobs/{{ $job->id }}">{{ $job->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $job->company }}</div>
            <x-job-tags :tags="$job->tags" />
            <div class="text-lg mt-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-map-pin">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg> {{ $job->location }}
            </div>
        </div>
        <a href="/jobs/{{ $job->id }}">
            <button class="w-[100px] h-[37px] bg-[#009fda] hover:bg-[#0078A3] text-white rounded">Ver detalles</button>
        </a>
    </div>
</li>
