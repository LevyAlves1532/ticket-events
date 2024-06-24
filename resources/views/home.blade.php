<x-layout>
    @php
        $column_class = "font-normal text-white flex items-center";
        $columns = [
            ['label' => 'Evento', 'row' => '2'],
            ['label' => 'Qtd. de Ingressos', 'row' => '1'],
            ['label' => 'Ingressos Vendidos', 'row' => '1'],
            ['label' => 'Valor Arrecadado', 'row' => '1'],

        ];
    @endphp

    <main>
        <div class="max-w-5xl w-full mx-auto py-10 px-5">
            <x-header title="Dashboard">
                <x-button type="link" label="Ir para Eventos" to="{{route('events')}}" />
                <x-button type="link" label="Ir para Compradores" to="{{route('buyers')}}" />
            </x-header>

            <div class="flex flex-col md:flex-row gap-2.5 mb-5 mt-5">
                <div class="bg-slate-400 flex-1 rounded-xl overflow-hidden">
                    <div class="p-3 border-b-2 border-slate-900">
                        <p class="text-base font-medium text-white">Quantidade de Eventos</p>
                    </div>

                    <div class="p-3">
                        <p class=" text-4xl font-medium text-white">{{$qtd_event}}</p>
                    </div>
                </div>
                <div class="bg-slate-400 flex-1 rounded-xl overflow-hidden">
                    <div class="p-3 border-b-2 border-slate-900">
                        <p class="text-base font-medium text-white">Quantidade de Ingressos Vendidos</p>
                    </div>

                    <div class="p-3">
                        <p class=" text-4xl font-medium text-white">{{$qtd_ticket_buyers}}</p>
                    </div>
                </div>
                <div class="bg-slate-400 flex-1 rounded-xl overflow-hidden">
                    <div class="p-3 border-b-2 border-slate-900">
                        <p class="text-base font-medium text-white">Quantidade de Compradores</p>
                    </div>

                    <div class="p-3">
                        <p class=" text-4xl font-medium text-white">{{$qtd_buyers}}</p>
                    </div>
                </div>
            </div>

            <x-table :columns=$columns>
                @if ($events->count() > 0)
                    @foreach ($events as $event)
                        <tr class="flex p-5">
                            <td class="flex-[2] {{$column_class}}">{{$event->title}}</td>
                            <td class="flex-1 {{$column_class}}">{{$event->qtd_tickets}}</td>
                            <td class="flex-1 {{$column_class}}">{{$event->ticket_buyers->count()}}</td>
                            <td class="flex-1 {{$column_class}}">
                                R$ {{number_format($event->ticket_buyers->count() * $event->price_ticket, 2, ',', '.')}}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </x-table>
        </div>
    </main>
</x-layout>
