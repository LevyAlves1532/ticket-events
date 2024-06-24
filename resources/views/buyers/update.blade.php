<x-layout title="Ticket Events - Editar">
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Editar Comprador">
                <x-button type="link" label="Voltar" to="{{route('buyers')}}" />
            </x-header>

            <x-alerts />

            <form method="POST" action="{{route('buyers.update_action')}}" id="form-buyer" class="flex flex-wrap gap-5">
                @csrf
                <input type="hidden" name="id" value="{{$buyer['id']}}">
                <x-input label="Nome:" name="name" placeholder="Nome do Comprador" value="{{$buyer['name']}}" />
                <x-input label="Telefone:" name="phone" placeholder="Telefone do Comprador" value="{{$buyer['phone']}}" />
                <div class="w-full flex gap-3">
                    <x-button type="reset" label="Resetar" />
                    <x-button type="submit" label="Enviar" />
                </div>
            </form>
        </div>
    </main>

    <x-slot:scripts>
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mask.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/buyers.js')}}"></script>
    </x-slot:scripts>
</x-layout>
