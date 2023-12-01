<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
		 
        <ul class="nav nav-pills">
         <li class="nav-item">
           <a class="nav-link active" href="{{url('teacher_dashboard')}}">Dashboard</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{url('teacher_view_assignment')}}">View Assignments</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Link</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{url('teacher_logout')}}" >Logout</a>
         </li>
         </ul>
       </nav>
    <table class="table">
   
        <thead>
            <tr>
                <th>Assignment Name</th>
                <th>Semester</th> 
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
           @foreach($assignments as $assignment)
            <tr>
                <td scope="row">{{$assignment->name}}</td>
                <td>
                    @if($assignment->semester=="1")
                    1st Semester
                    @elseif($assignment->semester=="2")
                    2nd Semester
                    @elseif($assignment->semester=="3")
                    3rd Semester
                    @elseif($assignment->semester=="4")
                    4th Semester
                    @elseif($assignment->semester=="5")
                    5th Semester
                    @elseif($assignment->semester=="6")
                    6th Semester
                    @elseif($assignment->semester=="7")
                    7th Semester
                    @elseif($assignment->semester=="8")
                    8th Semester

                    @endif
                </td>
                <td>{{$assignment->dob}}</td>
                <td>{{$assignment->Address}}</td>
                <td>
                    <a href="{{route('view_submissions' , ['id'=>$assignment->id])}}" > <button class="badge badge-primary">
                        View Submissions
                    </button>
                   
                    
                </a>
                </td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
        
    </body>
</html>