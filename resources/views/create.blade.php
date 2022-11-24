<x-layout>
  <x-slot name="title">{{ $title }}</x-slot>
  <h1 class="display-4 my-5">{{ $title }}</h1>
  <div class="row">
  <div class="col">
<form class+"form mb-3 d-flex-column bg-light p-5">
   <label for="title" class="form-label">Title</label>
   <input type="text"class="form-control mb-3" name="title">

   <label for="text" class="form-label">Text</label>
   <textarea class="form-control mb-3" name"text"></textarea>

   <div class="align-self-end">
   <a href="/" class="btn btn-secondary">Cancel</a>
   <button class="btn btn-primary">Add Note</button>

   </div>
   </form>
   </div>
  </div>
</x-layout>
