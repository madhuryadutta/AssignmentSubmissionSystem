
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>dashboard</title>
</head>

<body>
	<br>
	

	<div class="container-fluid mt-5">
		@if(session('assign'))
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			{{session('assign')}}
		</div>
		@endif
		
	</div>
</div>
<nav class="navbar navbar-dark bg-dark">
		 
    <ul class="nav nav-pills">
     <li class="nav-item">
       <a class="nav-link active" href="{{url('teacher_dashboard')}}">Dashboard</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="{{url('teacher_view_assignment')}}">View Assignments</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="teacher_view_student">Student</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="{{url('teacher_logout')}}" >Logout</a>
     </li>
     </ul>
   </nav>

		<div class="row">
			<div class="col-sm-6">
			  <div class="card">
				<div class="card-body">
				  <h5 class="card-title">Create Assignment</h5>
				  <a href="{{url('create_assignment')}}" class="btn btn-primary"> Click here</a>
				</div>
			  </div>
			</div>
			<div class="col-sm-6">
			  <div class="card">
				<div class="card-body">
				  <h5 class="card-title">Logout</h5>
				  <a href="{{url('teacher_logout')}}" class="btn btn-primary">Click here</a>
				</div>
			  </div>
			</div>
		  </div>

		
		

	
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>