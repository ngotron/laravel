<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mới</title>
</head>

<body>
    <!-- @foreach ($cars as $car) -->
    <h1>Car {{ $car['id'] }}</h1>
    <ul>
        <!-- <li> {{$car -> make}}</li>
        <li> {{$car -> model}}</li>
        <li> {{$car -> id}}</li> -->
        <li>Model: {{ $car['model'] }}</li>
        <img src="../image/{{ $car['image'] }}" alt="" />
        <li>Produced on: {{ $car['produced_on'] }}</li>
    </ul>
    <!-- @endforeach -->
</body>

</html>