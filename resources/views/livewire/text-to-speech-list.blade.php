<div id="recent-texts" class="mt-4 ml-3">
    <ul class="">
        @foreach ($textList as $text)
        <li>
            <span
                class="font-semibold">{{ $text->published_at ? $text->published_at->format('H:i') : $text->created_at->format('H:i') }}
                | </span>
            <span class="">{{ $text->user->name }}: {{ $text->text }}</span>
        </li>
        @endforeach
    </ul>
</div>