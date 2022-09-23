@props(['id','title'])

<section {{$attributes}} class='modal modal1 dNone'>
  <div class="container600">
    <div class="modal-title">
      <h2 class="letter1h light">{{ $title }}</h2>
      <x-button model="light" class="modal-close">⛌</x-button>
    </div>
    <div class="letter0h py-1 px-2 light">{{ $slot }}</div>
    <form action="{{ route('sciences.destroy',$id) }}" method="post">
      @csrf
      @method('delete')
      <div class="dFlex jcEvenly px-1">
        <x-button model="third">DELETE</x-button>
        <x-button type="button" model="light" class="modal-close">RETURN</x-button>
      </div>
    </form>
  </div>
</section>