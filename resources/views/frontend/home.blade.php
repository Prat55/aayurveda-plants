<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aayurveda</title>
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
                <li><a href="{{ route('medicines') }}">Medicine</a></li>
                <li><a href="{{ route('plants') }}">Plants</a></li>
                <li class="has-dropdown">
                    <a href="#" class="dropdown-btn">Diseses</a>

                    <ul class="dropdown-link">
                        <li><a href="#">Stomach Disease</a></li>
                        <li><a href="#">Diabetes</a></li>
                        <li><a href="#">Heart Disease</a></li>
                        <li><a href="#">Joint Pain</a></li>
                    </ul>
                </li>
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
            <a href="{{ route('plants') }}" class="btn">Plants</a>
            <a href="{{ route('medicines') }}" class="btn">Medicine</a>
            {{-- <a href="#" class="btn">Diseses</a> --}}
        </div>
        <div class="button1">
            @auth
                <a wire:navigate href="{{ route('dashboard') }}" class="btn1">Dashboard</a>
            @endauth
        </div>
    </header>
</body>

</html>
