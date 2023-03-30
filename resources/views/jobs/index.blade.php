<x-layout>
    @include('partials._search')

    <div class="max-w-[1170px] w-[95%] mx-auto py-[12px]">
        <h2 class="text-[#002776] font-semibold	text-[20px]">Encuentra y solicita empleos en España</h2>
    </div>
    @unless(count($jobs) == 0)
    <ul class="grid grid-cols-2 gap-[20px] w-[95%] max-w-[1170px] mx-auto">
        @foreach ($jobs as $job)
            <x-job-card :job="$job" />
        @endforeach
    </ul>
    @else
        <p>No hay ninguna oferta de trabajo</p>
    @endunless

    <div>
        {{$jobs->links()}}
    </div>
</x-layout>
