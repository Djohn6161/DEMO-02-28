
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="container">
    <h1 style="color: {{$color}}">Person</h1>
    <p>This is the person view</p>
    <p>this is a sample webpage in laravel</p>
    <hr>
    <h4>My name is {{$name}}</h4>
    <h5>I'm currently {{$age}} years old</h5>
    <h6>i will turn {{$age + 1}} on {{$birthday}}</h6>
    <hr>
    @if ($age<18)
        <p style="color: {{$color}}"> Cannot Vote!</p>
    @else
        <p style="color: green"> Vote Now!</p>
    @endif

    <hr>
    <h3>Siblings</h3>
    <ol>
        
        
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Can Vote or not</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siblings as $sibling)
                <tr>
                    
                    <td>1</td>
                    <td>{{$sibling['name']}}</td>
                    <td>{{$sibling['age']}}</td>
                    <td>
                        @if ($sibling['age'] <18)
                            <p style="color: {{$color}}"> Cannot Vote!</p>
                        @else
                            <p style="color: green"> Vote Now!</p>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
            
            {{-- <li>
                Name: {{$sibling['name']}} 
                <br>
                Age: {{$sibling['age']}}
                
            </li> --}}


    </ol>
</body>
</html>