@include('backend/inc/header')

<div class="container">
	

	<div class="row">
		
		<div class="col-md-6">
			    


@if(count($errors)>0)
  @foreach($errors->all() as $error)
<div class="alert alert-danger">
  {{$error}}
</div>
@endforeach
@endif

			    <form  method="POST" action="{{url('/edit',array($articles->id))}}">

            {{csrf_field()}}
  <fieldset>
    <legend>Legend</legend>
  
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" name="title" value="<?php echo $articles->title; ?>"
      placeholder="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
    </div>
    <div class="form-group">
      <label for="description">Description</label>
   

      <textarea name="description" value="" class="form-control" id="exampleInputPassword1" placeholder="Description">
        
<?php echo $articles->description; ?>

      </textarea>
    </div>



 
    <button type="submit" class="btn btn-primary">Edit</button>

    <a href="{{ url('/')}}" class="btn btn-primary"> Back</a>
  </fieldset>
</form>



		</div>
	</div>
</div>


@include('backend/inc/footer')