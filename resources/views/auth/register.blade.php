<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Registrati</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-4 mt-5">
                <div class="screen">
                    <div class="container">
                        <div class="row my-5">
                            <div class="col-12 my-3">
                                <img src='/images/IG.png' class="formRegister">
                            </div>
                            <div class="col-12">
                                <form method="POST" action="{{route('register')}}">
                                    @csrf
                                    <div class="form-group mb-2 ">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Inserisci il tuo nome">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Inserisci la tua email">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Scegli una password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Conferma la password">
                                    </div>
                                    <div class="form-check mb-2 ">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary formRegister">Invia</button>
                                </form>
                            </div>
                            <div class="col-12 my-5">
                                <div class="divHr">
                                    <hr>
                                </div>
                                <div class="or">
                                    <p>oppure</p>
                                </div>
                                <p class="mt-5 text-center">Già registrato? <a href="{{route('login')}}" class="text-primary text-decoration-none">Effettua il log-in</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
