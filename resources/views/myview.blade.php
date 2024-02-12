<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is my view</title>
</head>
<body>
    <h1>this is my view</h1>
    @if (isset($name))
    {{ $name }}
    @elseif (isset($geet))
    {{$geet}}
    @elseif (isset($abc))
    {{$abc['name']}}
    @else
    I don't have any records!
    @endif
</body>
</html>
