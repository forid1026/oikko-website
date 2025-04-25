<div class="bg-white py-16 px-4 md:px-20">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">

        <!-- Left: Main Content -->
        <div class="lg:col-span-2">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }} Image"
                class="w-full h-96 object-cover rounded-2xl shadow-md mb-8">

            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $project->title }}</h1>

            <div class="flex items-center gap-4 mb-6">
                <img src="{{ asset('storage/' . $project->author->image ?? null) }}" alt="{{ $project->author->name ?? null }} Avatar"
                    class="w-10 h-10 rounded-full object-cover shadow-sm">

                <div class="text-sm text-gray-500">
                    <p class="text-gray-800 font-semibold capitalize">{{ $project->author->name ?? null}}</p>
                    <p>{{ $project->created_at->format('F d, Y') }}</p>
                </div>
            </div>



            <div class="prose max-w-none text-gray-700 text-justify">
                {!! $project->description !!}
            </div>

            <div class="mt-10">
                <a wire:navigate href="{{ route('projects.index') }}"
                    class="inline-block text-blue-600 hover:text-blue-800 font-medium hover:underline transition">
                    ← Back to Projects
                </a>
            </div>
        </div>

        <!-- Right: Sidebar -->
        <div class="space-y-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Recent Projects</h2>

            @foreach ($recentProjects as $recent)
                <a wire:navigate href="{{ route('projects.show', $recent->slug) }}"
                    class="flex items-center gap-4 group">
                    <img src="{{ asset('storage/' . $recent->image) }}" alt="{{ $recent->name }}"
                        class="w-16 h-16 object-cover rounded-md shadow-sm">
                    <div>
                        <p class="text-sm font-medium text-gray-800 group-hover:text-blue-600 transition">
                            {{ $recent->title }}
                        </p>
                        <p class="text-xs text-gray-500">
                            {{ $recent->created_at->format('M d, Y') }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
