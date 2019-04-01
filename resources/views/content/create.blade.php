<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/content">Context-App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/content">Home</a>
        </li>

      </ul>

      <ul class="navbar-nav" id="searchbar">
        <li class="nav-item">
        <form class="form-inline" method="get">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="... search" aria-label="Search">
    <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
  </form>
        </li>
      </ul>
    </div>
  </nav>
<br>
<br>
<br>
<br>
  <main>

<div class="container">
        <div class="row">
        <form class="col-12 col-sm-12 col-md-12 col-lg-12" id="contact-form" method="post" action="/content" role="form">
             {{csrf_field()}}
             @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
             @foreach($errors->all() as $error)
             <div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{$error}}</strong>
</div>

            
            @endforeach

<div class="controls"> 


	
	    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="year">Title *</label>
                <input id="year" type="text" name="title" value="{{old('year')}}"  class="form-control" placeholder="eg...2017 *" required="required" data-error="Make is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
	
	    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Post *</label>
                <textarea id="form_message" name="post" class="form-control" placeholder="Write your message *" rows="4" required="required" data-error="Please, leave us a message.">{{old('description')}}</textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
	




 
	


    <div class="row">
        <div class="col-md-12">
            <p class="text-muted">
                <strong>*</strong> These fields are required.
               </p>
        </div>
		
		        <div class="col-md-12">
            <input style="background-color:grey;color:white" type="submit" class="btn btn-lg btn-send" value="Upload Post">
        </div>
    </div>
</div>

</form>
        </div>
      </div>
      </main>
    
</body>
</html>