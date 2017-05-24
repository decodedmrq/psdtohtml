<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
{{ form()->open(['url' => route('test.put'), 'files' => true, 'method' => 'put']) }}
{{ form()->file('image') }}
{{ form()->submit('Send') }}
{{ form()->close() }}
</body>
</html>