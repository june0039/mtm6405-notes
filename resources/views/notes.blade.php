<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <h1 class="display-4">{{$title}}</h1>
  <div class="row">
  @foreach ($notes as $note)

<div class="col-12 col-md-6 col-lg-4">
 <a href="" class="text-decoration-none text-body">
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
</body>
</html>
