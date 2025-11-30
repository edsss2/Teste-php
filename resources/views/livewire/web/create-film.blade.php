<div>
    <div class="max-w-screen-lg mx-auto px-4 py-8">
        <div>
            <form wire:submit="save">
            </form>
        </div>
        <form wire:submit.prevent='create' class="w-full px-4 py-8 bg-zinc-100 text-zinc-950 rounded-lg space-y-4">
            <h1 class="text-2xl font-bold text-center font-film">
                Cadastrar Filme
            </h1>

            <div class="flex flex-col gap-2 !mt-8">
                <label for="title" class="font-semibold">
                    Título
                </label>
                <input wire:model='form.title' type="text" id="title" class="rounded-lg border border-zinc-950 p-2">
                @error('form.title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col gap-2 !mt-8">
                <label for="director" class="font-semibold">
                    Diretor
                </label>
                <input wire:model='form.director' type="text" id="director" class="rounded-lg border border-zinc-950 p-2">
                @error('form.director')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="summary" class="font-semibold">
                    Resumo
                </label>
                <textarea wire:model='form.summary' id="summary" rows="6" class="rounded-lg border border-zinc-950 p-2"></textarea>
                @error('form.summary')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="cover" class="font-semibold">
                    Capa
                </label>
                <input wire:model='form.cover' accept="image/png, image/jpeg, image/jpg" type="file" id="cover" class="rounded-lg border border-zinc-950 p-2">
                @error('form.cover')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="bg-red-600 text-zinc-100 w-full font-mono font-semibold text-center px-4 py-2 rounded-lg">
                Enviar
            </button>
        </form>
    </div>
</div>