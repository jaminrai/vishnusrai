<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
	<script type="text/javascript" src="{{url('/js/jquery3.4.1.js')}}"></script>
	<script type="text/javascript" src="{{url('/js/bootstrp.js')}}"></script>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/posts')}}">Home<!--  <span class="sr-only">(current)</span> --></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/create')}}">Create</a>
      </li>
      


   <!--    <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
