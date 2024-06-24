@switch($type ?? 'button')
    @case('link')
        <a href="{{$to}}" class="py-3 px-6 cursor-pointer border-2 border-slate-400 rounded-lg text-base font-semibold text-slate-400 ease-in-out duration-[0.3s] hover:bg-slate-400 hover:text-slate-900 block w-fit">{{$label}}</a>
        @break
    @default
        <button type="{{$type ?? 'submit'}}" class="py-3 px-6 cursor-pointer border-2 border-slate-400 rounded-lg text-base font-semibold text-slate-400 ease-in-out duration-[0.3s] hover:bg-slate-400 hover:text-slate-900"
            {{isset($onclick) ? 'onclick="' . $onclick . '"' : ''}}
        >{{$label}}</button>
@endswitch
