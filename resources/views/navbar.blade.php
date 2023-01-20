<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<script>
  const openNav = () => {
    document.getElementById("sidebar").style.width = "200px";
  }
  const closeNav = () => {
    document.getElementById("sidebar").style.width = "0";


  }
</script>
<style type="text/css">
  /*.nb{
	
	    background-image:url("{{asset('assets/img/green_bgt.jpg')}}");
	}*/
  .sidebar {

    color: white;
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 2;
    top: 0;
    bottom: 0;
    overflow-x: hidden;
    transition: all 0.5s;
    /*        background: transparent;*/


  }

  .sidebar a {
    color: white;

    /*text-decoration: none;
         padding-top: 40px;
         padding-left: 20px;*/

  }

  .sidebar a:hover {
    color: seagreen;
    text-decoration: none;
  }

  #closebtn {


    position: absolute;
    top: 0;
    right: 3px;
    font-size: 30px !important;
    color: rgb(255, 193, 7);
  }

  #closebtn :hover {
    color: white;
  }
</style>

<body>
  <nav class=" text-white font-weight-bold fixed-top shadow " style="background-color: seagreen;z-index: 0;">
    <div class="row mt-3">
      <img src="{{asset('asset/img/logo.jpg')}}" height="20px" class="col-sm-3 ml-3" style="width: auto;">
      <p class="col-sm-10">Assignment Submission System</p>
      <span class="col ml-5 float-right" style="font-size:15px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
  </nav>


  <div class="sidebar  " id="sidebar" style="background-color: #004953">

    <div class="modal-header">
      <a role="button" onclick="closeNav()" class="float-right" id="closebtn">
        <span class="text-success">&times;</span>
      </a>
      <div class="col-sm-4 mt-3">
        WELCOME
        <br>
        {{$data->name}}
      </div>

    </div>
    <ul class="nav nav-pills flex-column mb-auto mt-4">
      <li class="nav-item text-left">
      <li>
        <a href="{{url('dashboard')}}" class="nav-link"><i class="fas fa-store"></i> Home </a>
      </li>
      <li>
        <a href="" class="nav-link " data-toggle="modal" data-target="#myModal"><i class="fas fa-user-circle"></i> Profile</a>
      </li>
      <li>
        <!-- <a href="" class="nav-link"><i class="fas fa-file-import"></i> Missed Assignments</a> -->
      </li>
      <li>
        <a href="{{url('submitted-assignments')}}" class="nav-link"><i class="fas fa-medal"></i> Submitted Assignments</a>
      </li>
      <!-- <li>
        <a href="" class="nav-link">
          <i class="fas fa-shopping-bag"></i> Create Purchase</a>
      </li>
      <li>
        <a href="" class="nav-link">
          <i class="fas fa-shopping-cart"></i> Create Sale</a>
      </li> -->
      </li>
    </ul>

    <div class="container mt-3 text-white text-center text-capitalize">
      <a class="p-1 btn btn-outline-success btn-sm btn-block mt-1 font-weight-bold mb-2" href="{{url('logout')}}"> Log Out</a>
    </div>
  </div>

  <!-- --------------------modal-------------------- -->
  <div class="modal fade" id="myModal" role="dialog">
  <div class="container-fluid">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-header">
          <h4 class="modal-title"> <i class="fas fa-user-graduate"></i> Student Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="col">
            <div class="row">
              <label for="signup-name" class="col">Full Name</label>
              <input id="signup-name" class="col form-control-plaintext" type="text" name="name" value="{{$data->name}}" />
            </div>

            <div class="row mt-2">
              <label for="signup-email" class="col">Email Address</label>
              <input id="signup-email" class="col form-control-plaintext" type="email" name="email" autocomplete="off" value="{{$data->email}}"></input>
            </div>
            <div class="row mt-2">
              <label for="address" class="col">Address</label>
              <input id="address" class="col form-control-plaintext" type="text" name="address" value="{{$data->Address}}" readonly></input>
            </div>

            <div class="row mt-2">
              <label for="Select semester" class="col">Semester</label>
              <input id="signup-email" class="col form-control-plaintext" type="text" name="semester" autocomplete="off" value="{{$data->semester}}" readonly />
            </div>

            <div class="row mt-2">
              <label for="Select department" class="col">Core Subject</label>
              <input id="signup-email" class="col form-control-plaintext" type="text" name="department" autocomplete="off" value="{{$data1->d_name}}" readonly />

            </div>
            <div class="row mt-2">
              <label for="roll-no" class="col">Roll-No</label>
              <input id="roll-no" type="number" name="rollno" class="col form-control-plaintext" value="{{$data->roll_no}}" readonly />
            </div>
            <div class="row mt-2">
              <label for="Date Of Birth" class="col">Date Of Birth</label>
              <input id="dob" type="text" name="dob" class="col form-control-plaintext" value="{{$data->dob}}" readonly />
            </div>
            <div class="row mt-2">
              <label for="Select department" class="col"> Gender</label>
              <div class="col-sm-6">

                 <label for="male">male</label>
                <input type="radio" id="male" name="gender" value="M" {{$data->gender =="M" ? "checked":""}} />

                 <label for="female">female</label>
                <input type="radio" id="female" name="gender" value="F" {{$data->gender =="F" ? "checked":""}} />

                 <label for="others">other</label>
                <input type="radio" id="others" name="gender" value="O" {{$data->gender =="O" ? "checked":""}} />
              </div>
            </div>
          </div>
        </div>
        <div class="row  mt-2 mb-2">
          <a href="{{route('updatedetails',['id'=>$data->id])}}" class="col-sm-3 ml-3"><button class="btn btn-secondary"><i class="fas fa-user-tie"></i> Update</button></a>
          <a href="{{route('changePass',['id'=>$data->id])}}" class="col-sm-3 ml-3"><button class="btn btn-secondary"><i class="fas fa-user-cog"></i> Settings</button></a>
          <button class="btn btn-secondary col-sm-3 ml-5" data-dismiss="modal"><i class="far fa-window-close"></i> Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</body>

</html>