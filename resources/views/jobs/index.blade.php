<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-10">
            <h1 class="font-bold text-2xl lg:text-4xl">Let's Find Your Next Job</h1>
            <x-forms.form action="/search">
                <x-forms.input name="query" placeholder="Web Developer......" :label="false"/>
            </x-forms.form>
        </section>

        <section class="mt-20">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-2">
                @foreach ($tags as $tag)
                    <x-tags :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>