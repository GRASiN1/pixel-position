@props(['job'])
<x-panel class="flex gap-x-6 flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h4 class="font-bold group-hover:text-blue-800 text-xl transition-colors duration-400">{{ $job->title }}</h4>
        <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tags size="small" :$tag />
            @endforeach
        </div>

        <x-company-logo :width="42" />
    </div>
</x-panel>