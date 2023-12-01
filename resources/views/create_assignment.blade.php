{{-- @extends('t_navbar') --}}


   <!DOCTYPE html>

   <html>
   
   <head>
   
       <title>Add/remove multiple input fields dynamically with Jquery Laravel 5.8</title>
   
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
       
   
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
   </head>
   
   <body>
   
      
   
   <div class="container">
   
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
      
   
       <form action="{{ route('create_assignment') }}" method="POST">
   
           @csrf
   
      
   
           @if ($errors->any())
   
               <div class="alert alert-danger">
   
                   <ul>
   
                       @foreach ($errors->all() as $error)
   
                           <li>{{ $error }}</li>
   
                       @endforeach
   
                   </ul>
   
               </div>
   
           @endif
   
           <div class="form-group">
            {{-- Assignment Id --}}
            <input type="hidden" name="id" id="" value="{{random_int ( 0,100000);}}">
        </div>
            <div class="form-group">
            {{-- t_id --}}
            <input type="hidden" name="t_id" id="" value="{{Session::get('loginId');}}">
        </div>
            <div class="form-group">
            {{-- d_id --}}
            <input type="hidden" name="d_id" id="" value="4">
        </div>
            <div class="form-group">
              Assignment Name <input type="text" name="assignment_name" id="" class="form-control" >
            </div>
            
            <div class="form-group">Semeseter
                <select name="semester" id="">
                    <option value="1">1st Sem</option>
                    <option value="2">2nd sem</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                    
                  </select>
              </div>
              
             
              Submission Date  <input type="date" name="submission_d_t" id="">
   
           @if (Session::has('success'))
   
               <div class="alert alert-success text-center">
   
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
   
                   <p>{{ Session::get('success') }}</p>
   
               </div>
   
           @endif
   
      
   
           <table class="table table-bordered" id="dynamicTable">  
   
               <tr>
   
                   <th>Question</th>
   
                   <th>Mark</th>
   
                   <th>Action</th>
   
               </tr>
   
               <tr>  
   
                   <td><input type="text" name="addmore[0][name]" placeholder="Enter The Question" class="form-control" /></td>  
   
                   <td><input type="text" name="addmore[0][qty]" placeholder="Enter Marks" class="form-control" /></td>  
   
   
                   <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
   
               </tr>  
   
           </table> 
   
       
   
           <button type="submit" class="btn btn-success">Save</button>
   
       </form>
   
   </div>
   
      
   
   <script type="text/javascript">
   
      
   
       var i = 0;
   
          
   
       $("#add").click(function(){
   
      
   
           ++i;
   
      
   
           $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" placeholder="Enter The Question" class="form-control" /></td><td><input type="text" name="addmore['+i+'][qty]" placeholder="Enter Marks" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
   
       });
   
      
   
       $(document).on('click', '.remove-tr', function(){  
   
            $(this).parents('tr').remove();
   
       });  
   
      
   
   </script>
   
     
   
   </body>
   
   </html>