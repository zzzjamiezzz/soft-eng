<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="/css/base.css">
    <link rel="Stylesheet" href="/css/basicuser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="createaccount-page">
            <img src="/assets/cat database logo.jpg" class="createaccount-image"/>
            <form class="createaccount-form-layout" action="{{route("resetPassword.post") }}" method="POST">
                @if($errors->Any())
                    @foreach($errors->all() as $error)
                        <p class="error-return">{{$error}}</p>
                    @endforeach
                @endif
                @csrf
                <input type="text" hidden value="{{$tokenID}}" name="token">
                <input type="email" placeholder="Email" class="createaccount-form-password-input" name="email"/>
                <input type="password" placeholder="Password" class="createaccount-form-password-input" name="password"/>
                <input type="password" placeholder="Re-Enter Password" class="createaccount-form-reenterpassword-input" name="password_confirmation"/>
                <input type="submit" value="Reset Password" class="createaccount-form-submit-input">
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
