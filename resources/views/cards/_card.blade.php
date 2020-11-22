@cache($card)
<div class="p-6">
    <div class="flex items-center">
        <div class="text-lg leading-7 font-semibold dark:text-white">
            {{ $card->title }}
        </div>
    </div>

    <div class="ml-4">
        <ul>
            @foreach($card->notes as $note)
                @include('cards._note')
            @endforeach
        </ul>
    </div>
</div>
@endcache
