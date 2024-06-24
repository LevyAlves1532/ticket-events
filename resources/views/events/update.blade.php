<x-layout title="Ticket Events - Edite">
    @php
        $column_class = "font-normal text-white flex items-center";
        $columns = [
            ['label' => 'Código', 'row' => '1'],
            ['label' => 'Comprador', 'row' => '2'],
            ['label' => 'Telefone', 'row' => '2'],
            ['label' => 'Ação', 'row' => '1'],
        ];
    @endphp

    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Editar Evento">
                <x-button type="link" label="Voltar" to="{{route('events')}}" />
            </x-header>

            <x-alerts />

            <form method="POST" action="{{route('events.update_action')}}" id="form-event" class="flex flex-wrap gap-5 mb-10">
                @csrf
                <input type="hidden" name="id" value="{{$event['id']}}" />
                <x-input label="Título" placeholder="Título do Evento" name="title" value="{{$event['title']}}" />
                <x-input type="datetime-local" label="Data e Horário:" name="due_date" value="{{$event['due_date']}}" />
                <x-input type="number" label="Quantidade:" name="qtd_tickets" placeholder="Quantidade de Fichas" value="{{$event['qtd_tickets']}}" />
                <x-input type="text" label="Valor:" name="price_ticket" placeholder="Preço por Unidade" value="{{number_format($event['price_ticket'], 2, ',', '.')}}" />
                <x-textarea label="Descrição:" name="description" placeholder="Descrição do Evento" rows="5" value="{{$event['description']}}" />
                <div class="w-full flex gap-3">
                    <x-button type="reset" label="Resetar" />
                    <x-button type="submit" label="Enviar" />
                </div>
            </form>

            <div class="mb-5 flex justify-end">
                <x-button type="link" label="Adicionar Comprador +" to="{{route('ticket_buyers.create_buyer_in_event', ['event_id' => $event['id']])}}" />
            </div>

            <x-table :columns=$columns>
                @if ($ticket_buyers->count() > 0)
                    @foreach ($ticket_buyers as $ticket_buyer)
                        <tr class="flex p-5">
                            <td class="flex-[1] {{$column_class}}">{{$ticket_buyer->code}}</td>
                            <td class="flex-[2] {{$column_class}}">{{$ticket_buyer->buyer->name}}</td>
                            <td class="flex-[2] {{$column_class}}">{{$ticket_buyer->buyer->phone}}</td>
                            <td class="flex-1 {{$column_class}}">
                                <a href="{{route('ticket_buyers.delete_buyer_in_event', ['event_id' => $event['id'], 'id' => $ticket_buyer->id])}}" class="group p-3 rounded-[999px] flex justify-center items-center hover:bg-red-400/25">
                                    <svg class="w-4 h-4 fill-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </x-table>
        </div>
    </main>

    <x-slot:scripts>
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/utils/validates.js')}}"></script>
        <script src="{{asset('assets/js/pages/events.js')}}"></script>
    </x-slot:scripts>
</x-layout>
