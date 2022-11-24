<x-layout>
  <x-slot name="title">{{ $title }}</x-slot>
  <h1 class="display-4 my-5">{{ $title }}</h1>
  <div class="row">
  <div class="col">
   <!-- form has two defaults action(itself-/create)/method (get)-->

<form action="/notes/{{$note['id']}}" method="POST" class="form mb-3 d-flex-column bg-light p-5">
@csrf
@method('PUT')

   <label for="title" class="form-label">Title</label>
   <input type="text"class="form-control mb-3" name="title" value="{{$note['title']}}">

   <label for="text" class="form-label">Text</label>
   <textarea class="form-control mb-3" name="text">{{$note['text']}}</textarea>

   <div class="align-self-end">
    <a href="/notes/{{$note['id']}}" class="btn btn-secondary">Cancel</a>
    <button class="btn btn-primary">Update Note</button>

   </div>
   </form>

   <form action="/notes/{{$note['id']}}" method="POST" class="d-flex justify-content-center">
@csrf
@method('DELETE')

<button class="btn btn-outline-danger">Delete Note</button>

   </form>
   </div>
  </div>
</x-layout>
