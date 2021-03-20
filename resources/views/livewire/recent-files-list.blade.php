{{-- Recent Files List --}}
<div id="recent-images" class="grid grid-cols-3 gap-4 mt-4">
    @foreach ($photos as $photo)
    {{-- {{ $photo->original_filename }} --}}
    <img class="bg-blue-300 h-30 w-20 object-contain" src="/photos/{{ $photo->original_filename }}" />
    @endforeach
</div>