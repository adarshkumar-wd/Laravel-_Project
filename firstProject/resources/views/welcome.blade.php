<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Use success Component Here -->
     <x-message-box msg="Message passed Successfully"/>



    <!-- @include('common.Header')    // include Sub View -->

    <!-- This line checks first is view exist or not. -->
    @include('common.Header')  

    <h1>My First Project</h1>
</body>
</html>