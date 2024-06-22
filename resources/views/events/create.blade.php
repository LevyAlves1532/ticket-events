<x-layout>
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Criar Evento">
                <x-button type="link-external" label="Voltar" to="{{route('events')}}" />
            </x-header>

            <x-alerts />

            <form method="POST" action="{{route('events.create_action')}}" id="form-event" class="flex flex-wrap gap-5">
                @csrf
                <x-input label="Título" name="title" placeholder="Título do Evento" />
                <x-input type="datetime-local" label="Data e Horário:" name="due_date" />
                <x-input type="number" label="Quantidade:" placeholder="Quantidade de Fichas" name="qtd_tickets" />
                <x-input type="text" label="Valor:" placeholder="Preço por Unidade" name="price_ticket" />
                <x-textarea label="Descrição:" name="description" placeholder="Descrição do Evento" rows="5" />
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
