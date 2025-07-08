<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- 

    This is how we write comments in a blade file

    --}}

    <!-- 
    
    This a html comment    
    
    -->
    <h1>Contact Us</h1>
    <h2>Name: {{request()->name}}</h2>
    <h2>Email: {{request()->id}}</h2>

    @include('SubViews.input', [
        'myName' => $name,
    ])


    @for($i=0;$i<=10;$i++)
        <p>{{ $i }}</p>

    @if ($i==5)
        <p>Hi this is {{ $i }}</p>
    @endif 

    @endfor
</body>
</html>