<x-layout title="Ticket Events - Edite">
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Editar Evento">
                <x-button type="link-external" label="Voltar" to="{{route('events')}}" />
            </x-header>

            <x-alerts />

            <form method="POST" action="{{route('events.update_action')}}" id="form-event" class="flex flex-wrap gap-5">
                @csrf
                <input type="hidden" name="id" value="{{$event['id']}}" />
                <x-input label="Título" placeholder="Título do Evento" name="title" value="{{$event['title']}}" />
                <x-input type="datetime-local" label="Data e Horário:" name="due_date" value="{{$event['due_date']}}" />
                <x-input type="number" label="Quantidade:" name="qtd_tickets" placeholder="Quantidade de Fichas" value="{{$event['qtd_tickets']}}" />
                <x-input type="text" label="Valor:" name="price_ticket" placeholder="Preço por Unidade" value="{{number_format($event['price_ticket'], 2, ',', '.')}}" />
                <x-textarea label="Descrição:" name="description" placeholder="Descrição do Evento" rows="5" value="{{$event['description']}}" />
                <div class="relative w-full">
                    <x-button label="Enviar" />
                </div>
            </form>
        </div>
    </main>

    <x-slot:scripts>
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/utils/validates.js')}}"></script>
        <script src="{{asset('assets/js/pages/events.js')}}"></script>
    </x-slot:scripts>
</x-layout>
