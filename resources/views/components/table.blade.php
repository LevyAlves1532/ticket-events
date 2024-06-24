@php
    $rows = ['flex-[1]','flex-[2]','flex-[3]','flex-[4]','flex-[5]'];
@endphp

<table class="w-full rounded-lg overflow-hidden">
    <thead>
        <tr class="flex p-5 bg-slate-600">
            @if (!empty($columns) && count($columns) > 0)
                @foreach ($columns as $column)
                    <th class="{{$rows[$column['row'] - 1]}} font-normal text-white flex items-center" align="left">{{$column['label']}}</th>
                @endforeach
            @endif
        </tr>
    </thead>
    <tbody>
        {{$slot}}
    </tbody>
</table>
