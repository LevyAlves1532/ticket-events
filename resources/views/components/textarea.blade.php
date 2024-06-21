<label class="relative flex-1 min-w-[48%]">
    <span class="absolute left-3 px-2 -top-2 bg-slate-900 text-white font-medium text-xs">{{$label}}</span>
    <textarea class="input-date p-5 w-full rounded-lg bg-transparent border-2 border-white outline-none text-white"
        @if (isset($placeholder))
            placeholder="{{$placeholder}}"
        @endif
        @if (isset($rows))
            rows="{{$rows}}"
        @endif
        @if (isset($name))
            name="{{$name}}"
        @endif
    >{{$value ?? ''}}</textarea>
</label>
