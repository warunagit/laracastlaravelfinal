@props(['job'])
<x-panel class="flex gap-x-5">

    <div>
        {{-- <x-employer-logo :width="98" :height="90"/> --}}
        <x-employer-logo :employer="$job->employer" :width="98" :height="90"/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-sm text-gray-600">{{ $job->employer->name }}</a>
        <h3 class="group-hover:text-violet-600 text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - From {{$job->salary}}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</x-panel>
