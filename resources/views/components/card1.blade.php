@props(['title','body','img','controller','id'])

<article class="dFlex flexColumnWrap gap1 card1">
    <figure><img src="{{$img}}" alt="{{$title.' img'}}"></figure>
    <div class="px-1">
      <h2>{{$title}}</h2>
      <p class="pgph-3">{{$body}}</p>
    </div>
    <div class="dFlex jcCenter px-1 py-1">
      <x-btnLink :link="$controller.'.show'" model="third" :id="$id"> Ver más </x-btnLink>
    </div>
</article>