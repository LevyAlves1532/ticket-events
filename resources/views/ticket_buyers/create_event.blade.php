<x-layout title="Ticket Events - Adicionar">
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Adicionar Comprador no Evento">
                <x-button type="link" label="Voltar" to="{{route('events.update', ['id' => $id_event])}}" />
            </x-header>

            <x-alerts />

            <form method="POST" action="{{route('buyers.create_action')}}" id="form-buyer" class="flex flex-wrap gap-5">
                @csrf
                <x-select label="Comprador">
                    <option selected disabled>Selecione um Comprador</option>
                </x-select>
                <div class="w-full flex gap-3">
                    <x-button type="reset" label="Resetar" />
                    <x-button type="submit" label="Enviar" />
                </div>
            </form>
        </div>
    </main>
</x-layout>
