<x-layout>

<h1 class="display-4">{{$title}}</h1>
<p> Welcome to the Notes App</p>
<div class="row">
@foreach ($notes as $note)
<div class="col-12 col-md-6 col-lg-4">
<a href="/notes/{{ $note['id']}}" class="text-decoration-none text-body">
<div class="card mb-3">
  <h5 class="card-header">{{ $note['title']}}</h5>
   <div classs="card-body">
   <p class="card-text">{{ $note['text']}}</p>
   </div>
   </div>
   </a>
   </div>
@endforeach
</div>
</x-layout>
