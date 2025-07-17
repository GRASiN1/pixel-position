<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-2">
                <x-tags>Tags</x-tags>
                <x-tags>Tags</x-tags>
                <x-tags>Tags</x-tags>
                <x-tags>Tags</x-tags>
                <x-tags>Tags</x-tags>
                <x-tags>Tags</x-tags>
                <x-tags>Tags</x-tags>
                <x-tags>Tags</x-tags>
                <x-tags>Tags</x-tags>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>
    </div>
</x-layout>