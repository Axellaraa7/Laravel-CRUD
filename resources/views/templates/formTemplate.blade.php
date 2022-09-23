<section class="container960">
  <h2 class="letter4 light textCenter py-1">{{ $meta['title'] }}</h2>
  <form action="{{ route($meta['route'],$science ?? '') }}" method="post" class="py-1 dFlex flexColumn gap1">
    @csrf
    @isset($meta['method'])
      @method($meta['method'])   
    @endisset
    <div class="formElement">
      <label for="name" class="light letter1 label1">Science name</label>
      <input model="text" name="name" id="name" class="inputText" value="{{isset($science) ? old('name',$science->name) : old('name')}}">
    </div>
    @error('name')
        <x-alert model="third">{{ $message }}</x-alert>
    @enderror
    <div class="formElement">
      <label for="description" class="light letter1 label1">Science description</label>
      <textarea name="description" id="description" class="inputArea" >{{isset($science) ? old('description',$science->description) : old('description')}}</textarea>
    </div>
    @error('description')
        <x-alert model="third">{{ $message }}</x-alert>
    @enderror
    <div class="formElement">
      <label for="url" class="light letter1 label1">Url image</label>
      <input model="text" name="url" id="url" class="inputText" value="{{isset($science) ? old('url',$science->url) : old('url')}}">
    </div>
    @error('url')
        <x-alert model="third">{{ $message }}</x-alert>
    @enderror
    <div class="formElement">
      <x-button model="light">Submit</x-button>
    </div>
  </form>
</section>
