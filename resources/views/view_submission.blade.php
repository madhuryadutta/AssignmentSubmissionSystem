<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>

   
    {{print_r($submission)}}
    {{-- {{print_r($students)}}
    {{print_r($questions)}} --}}
    
    <table class="table">
        <thead>
            <tr>
                <th>Student</th>
                <th>View Submissions</th>
               
            </tr>
        </thead>
        <tbody>
                {{-- @foreach($students as $student)
                <tr>
                <td>{{$student->name}}</td>
                <button class="badge badge-primary">
                    View Submissions
                </button>
               
               <a href="{{route('view_submissions', ['id'=>$assignments->id] , ['s_id'=>$student->id])}}" > <button class="badge badge-primary">
                   
                </button>
            </tr>
           @endforeach --}}
        </tbody>
    </table>
</pre>
</body>
</html>