<x-layout>
    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Dashboard">
                <x-button type="link" label="Ir para Eventos" to="{{route('events')}}" />
                <x-button type="link" label="Ir para Compradores" to="{{route('buyers')}}" />
            </x-header>
        </div>
    </main>
</x-layout>
