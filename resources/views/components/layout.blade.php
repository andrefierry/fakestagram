<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Welcome to Instafake</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-4 mt-5">
                <div class="screen">
                    {{$slot}}
                    <x-navbar></x-navbar>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>