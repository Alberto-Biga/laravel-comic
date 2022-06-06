<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Home</title>
</head>

<body>
    {{-- header --}}
    <header>
        <div class="nav">
            <div class="nav-container">
                <!-- LEFT NAV -->
                <div class="nav-img">
                    <img src="{{ asset ('images/dc-logo.png')}}" alt="">
                </div>
                <!-- RIGHT NAV -->
                <div>
                    <ul>
                        <li>CHARACTERS</li>
                        <li>COMICS</li>
                        <li>MOVIES</li>
                        <li>TV</li>
                        <li>GAMES</li>
                        <li>COLLECTIBLES</li>
                        <li>VIDEOS</li>
                        <li>FANS</li>
                        <li>NEWS</li>
                        <li>SHOP</li>
                    </ul>
                </div>
            </div>
        </div>   
    </header>
    {{-- main --}}
    <main>
        <section class="jumbotron"></section>

        <div class="container">
            <div class="row">
                @foreach ($comic as $info )
                    <div class="col card">
                        <img src="{{$info['thumb']}}" alt="">
                        <h4>
                            {{$info['title']}}    
                        </h4>
                        
                    </div>
                @endforeach    
            </div>    
        </div>
        
        
    </main>
    {{-- footer --}}
    <footer>

    </footer>
</body>

</html>
