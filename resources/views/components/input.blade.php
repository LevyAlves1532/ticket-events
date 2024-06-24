<label class="relative flex-1 min-w-[48%]">
    <span class="absolute left-3 px-2 -top-2 bg-slate-900 text-white font-medium text-xs">{{$label}}</span>
    <input type="{{$type ?? 'text'}}" class="h-12 p-5 w-full rounded-lg bg-transparent border-2 border-white outline-none text-white {{isset($type) && $type === 'datetime-local' ? 'input-date' : ''}}"
        @if(isset($placeholder))
            placeholder="{{$placeholder}}"
        @endif
        @if(isset($name))
            name="{{$name}}"
            id="{{$name}}"
        @endif
        @if(isset($value))
            value="{{$value}}"
        @endif>
</label>
