<div>
  @if (empty($shop->filename))
      <img src="{{ asset('images/no_image.jpg') }}" alt="">
  @else
      <img src="{{ asset('storage/shops/' . $shop->filename) }}" alt="">
  @endif
</div>
