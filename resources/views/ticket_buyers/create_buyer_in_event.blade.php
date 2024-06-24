<x-layout title="Ticket Events - Adicionar">
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Adicionar Comprador no Evento">
                <x-button type="link" label="Voltar" to="{{route('events.update', ['id' => $event_id])}}" />
            </x-header>

            <x-alerts />

            <form method="POST" action="{{route('ticket_buyers.create_buyer_in_event_action')}}" id="form-ticket-buyers" class="flex flex-wrap gap-5">
                @csrf
                <input type="hidden" name="event_id" value="{{$event_id}}">
                <x-select label="Comprador" name="buyer_id">
                    <option selected disabled>Selecione um Comprador</option>
                    @if ($buyers->count() > 0)
                        @foreach ($buyers as $buyer)
                            <option value="{{$buyer->id}}" class="text-black">{{$buyer->name}}</option>
                        @endforeach
                    @endif
                </x-select>
                <div class="w-full flex gap-3">
                    <x-button type="reset" label="Resetar" />
                    <x-button type="submit" label="Enviar" />
                </div>
            </form>
        </div>
    </main>

    <x-slot:scripts>
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/utils/validates.js')}}"></script>
        <script src="{{asset('assets/js/pages/ticket_buyers.js')}}"></script>
    </x-slot:scripts>
</x-layout>
