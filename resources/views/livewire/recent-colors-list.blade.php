<div id="recent-colors" class="grid grid-cols-6 gap-4 mt-4">
    @foreach ($colors as $color)
    <div class="bg-{{ $color->color }}-300 h-8 w-8 rounded-full"></div>
    @endforeach
</div>