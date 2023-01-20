<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Assignment</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .container {
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ url('create_assignment') }}" method="POST">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif

            <div class="form-group">
            Assignment Id<input type="text" name="id" id="">
        </div>
            <div class="form-group">
            t_id<input type="text" name="t_id" id="">
        </div>
            <div class="form-group">
            d_id<input type="text" name="d_id" id="">
        </div>
            <div class="form-group">
              Assignment Name <input type="text" name="assignment_name" id="" class="form-control" >
            </div>
            
            <div class="form-group">
                Semester <input type="text" name="semester" id="" class="form-control" >
              </div>
             
              Submission Date  <input type="date" name="submission_d_t" id="">

            




            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th>Question</th>
                    <th>Marks</th>
                    <th>Action</th>
                </tr>
                <tr>
                             
                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-outline-success btn-block">Save</button>
        </form>
    </div>
</body>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /> </td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
</html>