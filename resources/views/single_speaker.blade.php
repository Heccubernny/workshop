<!DOCTYPE html>
<html lang='en'>
<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>Document</title>
</head>
<body>
@foreach ($id as $no)
<strong>
@foreach ( $speakers as $speaker)
{{$speaker->s_name}} :
@endforeach
</strong><p></p>
        
@endforeach
</body>
</html>