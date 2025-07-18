@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-company-logo />
    </div>
    
    <div class="flex-1 flex flex-col">
        <a href="" class="text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h4 class="font-bold group-hover:text-blue-800 mt-3 transition-colors duration-400">{{ $job->title }}</h4>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tags :$tag />
        @endforeach
    </div>
</x-panel>