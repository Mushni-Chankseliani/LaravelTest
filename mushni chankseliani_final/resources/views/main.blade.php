<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mushni Chankseliani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <form>
            <div class="mb-3">
                <label class="form-label">name</label>
                <input type="text" name="name" class="form-control">
            </div>
        
            <button class="btn btn-primary">ძებნა</button>
        </form>
        
        {{-- student --}}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Course Name</th>
                <th scope="col">Room Name</th>
                <th scope="col">Students count</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                <tr>
                    <th>{{ $classroom->id }}</th>
                    <th>{{ $classroom->course_name }}</th>
                    <th>{{ $classroom->room_name }}</th>    
                    <th>{{ $classroom->students_count }}</th>    
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- classroom --}}
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>lastname</th>
                <th>lastname</th>
                <th>classroom id</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <th>{{ $student->id }}</th>
                    <th>{{ $student->name }}</th>
                    <th>{{ $student->lastname }}</th>    
                    <th>{{ $student->address }}</th>    
                    <th>{{ $student->classroom_id }}</th>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>