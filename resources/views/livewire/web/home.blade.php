<div>
    <div class="px-4 py-8 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-8">
        @foreach ($films as $film)
        <a href="{{ route('see') }}"
            class="relative w-full aspect-video bg-cover bg-center bg-no-repeat rounded-lg overflow-hidden shadow-lg transition hover:scale-105
                bg-[image:var(--bg-film)]"
            style="--bg-film: url('{{ asset('storage/' . $film->cover) }}')">
            <div
                class="absolute flex items-end p-4 top-0 left-0 w-full h-full bg-gradient-to-t from-black to-black/20">
                <div>
                    <h1 class="text-2xl font-bold">
                        {{ $film->title}}
                    </h1>
                    <h2 class="font-medium">
                        {{ $film->director}}
                    </h2>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <div class="mt-4 flex justify-center pb-8 gap-4">
        {{ $films->links() }}
    </div>
</div>