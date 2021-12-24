<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @can('admin')
        <h1>welcome admin</h1>
    @endcan
    @can('supervisor')
        <h1>welcome supervisor</h1>
    @endcan
</body>
</html>
