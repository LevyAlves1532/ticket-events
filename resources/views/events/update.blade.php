<x-layout title="Ticket Events - Edite">
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Editar Evento">
                <x-button type="link-external" label="Voltar" to="{{route('events')}}" />
            </x-header>

            <form method="post" class="flex flex-wrap gap-5">
                <x-input label="Título" placeholder="Título do Evento" value="{{$event['title']}}" />
                <x-input type="datetime-local" label="Data e Horário:" value="{{$event['due_date']}}" />
                <x-input type="number" label="Quantidade:" placeholder="Quantidade de Fichas" value="{{$event['qtd_tickets']}}" />
                <x-input type="text" label="Valor:" placeholder="Preço por Unidade" value="{{number_format($event['price_ticket'], 2, ',', '.')}}" />
                <x-textarea label="Descrição:" placeholder="Descrição do Evento" rows="5" value="{{$event['description']}}" />
                <div class="relative w-full">
                    <x-button label="Enviar" />
                </div>
            </form>
        </div>
    </main>
</x-layout>
