<div>
    <section class="bg-white py-16 px-4 md:px-20">
        <div class="max-w-7xl mx-auto text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Our Projects</h2>
            <p class="text-gray-600 mt-4">
                Explore the initiatives we’ve launched to make a meaningful impact in our community.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach ($projects as $project)
                <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden transition duration-300 transform hover:shadow-xl hover:scale-105">
                    <a wire:navigate href="{{ route('projects.show', $project->slug) }}">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }} Image" loading="lazy"
                        class="w-full h-56 object-cover">
                    </a>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{!! $project->short_description !!}</p>
                        <a wire:navigate href="{{ route('projects.show', $project->slug) }}"
                            class="text-blue-600 hover:underline text-sm font-medium">
                            Learn more →
                        </a>
                    </div>
                </div>
            @endforeach
            @if ($projects->count() == 0)
                <p class="text-center text-gray-500 col-span-full">No projects available at the moment.</p>
            @endif
        </div>
    </section>
</div>
