<label class="relative flex-1 min-w-[48%]">
    <span class="absolute left-3 px-2 -top-2 bg-slate-900 text-white font-medium text-xs">{{$label}}</span>
    <select class="h-12 px-4 w-full rounded-lg bg-transparent border-2 border-white outline-none text-white appearance-none cursor-pointer"
        @if(isset($name))
            name="{{$name}}"
            id="{{$name}}"
        @endif
    >
        {{$slot}}
    </select>
</label>
