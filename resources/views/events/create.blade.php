<x-layout>
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Criar Evento">
                <x-button type="link-external" label="Voltar" to="{{route('events')}}" />
            </x-header>

            <form method="post" class="flex flex-wrap gap-5">
                <label class="relative flex-1 min-w-[48%]">
                    <span class="absolute left-3 px-2 -top-2 bg-slate-900 text-white font-medium text-xs">Título:</span>
                    <input type="text" placeholder="Título do Evento" class="h-12 p-5 w-full rounded-lg bg-transparent border-2 border-white outline-none text-white">
                </label>
                <label class="relative flex-1 min-w-[48%]">
                    <span class="absolute left-3 px-2 -top-2 bg-slate-900 text-white font-medium text-xs">Data e Horário:</span>
                    <input type="datetime-local" class="input-date h-12 p-5 w-full rounded-lg bg-transparent border-2 border-white outline-none text-white">
                </label>
                <label class="relative flex-1 min-w-[48%]">
                    <span class="absolute left-3 px-2 -top-2 bg-slate-900 text-white font-medium text-xs">Quantidade:</span>
                    <input type="number" placeholder="Quantidade de Fichas" class="input-date h-12 p-5 w-full rounded-lg bg-transparent border-2 border-white outline-none text-white">
                </label>
                <label class="relative flex-1 min-w-[48%]">
                    <span class="absolute left-3 px-2 -top-2 bg-slate-900 text-white font-medium text-xs">Valor:</span>
                    <input type="text" placeholder="Preço por Unidade" class="input-date h-12 p-5 w-full rounded-lg bg-transparent border-2 border-white outline-none text-white">
                </label>
                <label class="relative flex-1 min-w-[48%]">
                    <span class="absolute left-3 px-2 -top-2 bg-slate-900 text-white font-medium text-xs">Descrição:</span>
                    <textarea placeholder="Descrição do Evento" rows="5" class="input-date p-5 w-full rounded-lg bg-transparent border-2 border-white outline-none text-white"></textarea>
                </label>
                <div class="relative w-full">
                    <x-button label="Enviar" />
                </div>
            </form>
        </div>
    </main>
</x-layout>
