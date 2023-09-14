<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div>
            <form method="post" action="{{route('student.store')}}">
                @csrf
                @method('post')
                <table>
                    <tr>
                        <th>Name:</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="New Record"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div>
            <h1>List of Students:</h1>
        </div>
    </div>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Grades</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->student_id}}</td>
                <td>{{$student->name}}</td>
                <td>[<a href="{{$student->student_id}}/grades">View Grades</a>]</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>