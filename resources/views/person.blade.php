<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
</head>
<body>
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
        
        @foreach ($siblings as $sibling)
            <li>
                Name: {{$sibling['name']}} 
                <br>
                Age: {{$sibling['age']}}
                @if ($sibling['age'] <18)
                    <p style="color: {{$color}}"> Cannot Vote!</p>
                @else
                    <p style="color: green"> Vote Now!</p>
                @endif
            </li>
        @endforeach


    </ol>
</body>
</html>