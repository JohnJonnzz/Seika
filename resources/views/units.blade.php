<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEIKA Co Living</title>
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/page.css">
    <script src="https://kit.fontawesome.com/c4254a8.js" crossorigin="anonymous"> </script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <nav id="navBar" class="navbar-white">
        <a href="/">
            <img src="{{ url('/') }}/assets/img/logoseika.png" class="logo">
        </a>
        <ul class="nav-links">
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/properties">Property</a></li>
        </ul>
        <a href="https://api.whatsapp.com/send?phone=6281519310755" title="Order" target="_blank" class="register-btn"><i class="ri-whatsapp-line"></i> Book Now</a>
        <i class="ri-menu-line" onclick="togglebtn()"></i>
    </nav>
    <div class="house-details">
        @if ($unitDetails)
        <div class="house-title">
            <h1>{{ $unitDetails->unit_name }}</h1>
        </div>

        <div class="gallery">
            @for ($i = 1; $i <= 8; $i++) <div><img src="{{ url('/') }}/assets/img/{{ $unitDetails->{'display' . $i} }}"></div>
        @endfor
    </div>

    <div class="small-details">
        <h2>{{ $unitDetails->subjudul }}</h2>
        <p>{{ $unitDetails->room }}</p>
        <h4>{{ $unitDetails->price }}</h4>
    </div>
    <hr class="line">

    <ul class="details-list">
        <li><i class="ri-door-open-line"></i>Self check-in
            <span>Check yourself in with the lockbox.</span>
        </li>

        <li><i class="ri-map-pin-line"></i>Great location
            <span>Strategic in BSD</span>
        </li>

        <li><i class="ri-bookmark-line"></i>Availability
            <span>{{ $unitDetails->availability }}</span>
        </li>
    </ul>
    <hr class="line">
    <p class="home-description">
        {{ $unitDetails->units_desc }}
    </p>
    <hr class="line">
    <div class="map">
        <h3>Location on map</h3>
        <iframe src="{{ $unitDetails->location_link }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <b></b>
    </div>
    @else
    <p>Unit details not found.</p>
    @endif
    </div>

    <div class="container">
        <div class="order-buttons">
            <a href="https://api.whatsapp.com/send?phone=6281519310755" title="Order" target="_blank">
                <img src="https://4.bp.blogspot.com/-U89MxZECHCk/XDq9ncY2LEI/AAAAAAAAAmo/6G8db2IzjykuTIO5__8vACsD5WFq9VAiwCLcBGAs/s1600/Order-via-Whatsapp.png" title="Order" width="200" />
            </a>
            <br>Or Via<br />
            <a href="https://www.instagram.com/seika_coliving/" target="_blank" class="social-btn">
                <img src="{{ url('/') }}/assets/img/instagram.jpeg" alt="Instagram" width="100" height="80">
            </a>
        </div>



        <div class="footer">
            <p>SEIKA Co Living</p>
        </div>
    </div>

    <script>
        var navBar = document.getElementById("navBar");

        function togglebtn() {
            navBar.classList.toggle("hidemenu");
        }
    </script>

</body>

</html>