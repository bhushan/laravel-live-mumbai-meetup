<div class="p-6">
    <div class="flex items-center">
        <div class="text-lg leading-7 font-semibold">
            <a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">
                {{ $card->title }}
            </a>
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
