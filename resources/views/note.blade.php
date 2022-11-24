<x-layout>
  <x-slot name="title">{{ $title }}</x-slot>
  <div class="row d-flex align-items-center">
  <div class="col-9">

  <h1 class="display-4 my-5">{{ $title }}</h1>
   </div>

  <div class="col-3">
   <a href="/notes/{{$id}}/edit" class="text-decoration-none text-body">Edit</a>
    </div>
   </div>

  <p class="fs-4">{{ $text }}</p>
  <a href="/" class="text-decoration-none">&lt; Back</a>
</x-layout>
