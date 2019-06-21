@include('backend/inc/header')

<div class="container">

	<div class="row">


<div class="col-mg-6 col-lg-6">
@if(session('info'))

<div class="alert alert-success">{{session('info')}}</div>

@endif
</div>




<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   

   <!-- collecting the data of db that is passed from the controller -->


   @if(count($articles)>0)
   	@foreach($articles->all() as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td>{{$article->description}}</td>
      <td> 
<a href="{{ url('') }}" > <button class="btn btn-primary"> Read </button></a>
<a href='{{ url("/update/{$article->id}") }}' > <button class="btn btn-success"> Update </button></a>
<a href="{{ url('/delete/{$article->id}') }}" > <button class="btn btn-danger"> Delete </button></a>
      </td>
    </tr>
    @endforeach
    @endif








 

  <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
   
  </tbody>
</table> 


		

	</div>
	

</div>

@include('backend/inc/footer')