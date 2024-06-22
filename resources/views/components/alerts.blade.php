@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert-error p-5 bg-black w-full max-w-[360px] rounded-lg border-b-2 border-red-500 flex gap-3 cursor-pointer z-10 fixed top-0 -translate-y-full ease-in-out duration-[0.8s]">
            <svg class="w-6 h-6 fill-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
            <p class="text-red-500">{{$error}}</p>
        </div>
    @endforeach
@endif
