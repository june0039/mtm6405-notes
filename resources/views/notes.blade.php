<x-layout>
  <x-slot name="title">{{ $title }}</x-slot>
  <div class="row">
  <div class="col-9">
  <h1 class="display-4 my-5">{{ $title }}</h1>
  </div>
  <div class="col-3">
   <a href="/create" class="text-decoration-none text-body">New</a>
    </div>
   </div>

  <div class="row">
    <div class="col">
      <form class="form mb-3">
        <input type="text" class="form-control" name="search" placeholder="Search">
      </form>
    </div>
  </div>
  <div class="row">
  @foreach ($notes as $note)
    <div class="col-12 col-md-6 col-lg-4">
      <a href="/notes/{{ $note['id'] }}" class="text-decoration-none text-body">
        <div class="card mb-3">
          <h5 class="card-header">{{ $note['title'] }}</h5>
          <div class="card-body">
            <p class="card-text">{{ $note['text'] }}</p>
          </div>
        </div>
      </a>
    </div>
  @endforeach
  </div>
</x-layout>
