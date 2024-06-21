<x-layout>
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Criar Evento">
                <x-button type="link-external" label="Voltar" to="{{route('events')}}" />
            </x-header>

            <form method="post" class="flex flex-wrap gap-5">
                <x-input label="Título" placeholder="Título do Evento" />
                <x-input type="datetime-local" label="Data e Horário:" />
                <x-input type="number" label="Quantidade:" placeholder="Quantidade de Fichas" />
                <x-input type="text" label="Valor:" placeholder="Preço por Unidade" />
                <x-textarea label="Descrição:" placeholder="Descrição do Evento" rows="5" />
                <div class="relative w-full">
                    <x-button label="Enviar" />
                </div>
            </form>
        </div>
    </main>
</x-layout>
