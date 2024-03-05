<!DOCTYPE html>
<html lang="en">

<head>
    <title>aayurveda</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('user-assets/css/style.css') }}" />
</head>

<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="{{ asset('user-assets/img/1.png') }}" />
            </div>

            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#">Medicine</a></li>
                <li><a href="#">Plants</a></li>
                <li><a href="#">Diseses</a></li>
                <li><a href="{{ route('user.register') }}">Register</a></li>
            </ul>
        </div>
        <div class="title">
            <h1>Importance Of Ayurveda</h1>
            <p class="description">
                Ayurveda translates to knowledge of life. Based on the idea that
                disease is due to an imbalance or stress in a person's consciousness,
                Ayurveda encourages certain lifestyle interventions and natural
                therapies to regain a balance between the body, mind, spirit, and the
                environment.
            </p>
        </div>
        <div class="button">
            <a href="#" class="btn">Plants</a>
            <a href="#" class="btn">Medicine</a>
            <a href="#" class="btn">Diseses</a>
        </div>
        <div class="button1">
            <a wire:navigate href="{{ route('login') }}" class="btn1">Login</a>
        </div>
    </header>
</body>

</html>
