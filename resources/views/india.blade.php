<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/india.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    
<header class="overlay" style="background-image: url('package/{{ $template->image }}');">

    <nav class="navbar">
    <a href="Homepage.html" class="logo"><h1>Expedia</h1></a>
    <ul>
        <li><a href="Homepage.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="packageView">Package</a></li>
        <!-- <div class="dropdown-container">
            <li><a href="#">Service</a></li>
            <div class="dropdown-content">
                <a href="#">Adventure</a>
                <a href="#">Tour Guide</a>
                <a href="#">Trekking</a>
                <a href="#">Camp Fire</a>
                <a href="#">Off Road</a>
                <a href="#">Camping</a>
            </div>
        </div> -->
        <li><a href="/contact">Contact</a></li>
    </ul>
    <div class="navbar-right">
        @if(session('user'))
            <div class="dropdown-container">
                <a href="#" class="log-in">{{ session('user') }}</a>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="/logout">Logout</a>
                </div>
            </div>
        @else
            <a href="login.html" class="log-in">Log In</a>
        @endif
        <a href="{{ url('show_cart') }}"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
</nav>
    
        <div class="caption center">
            <h1>{{$template->heading}}</h1>
        </div>
            
        </header>
        <main>
            <div class="card-container">
            <?php $serial_count=1 ?>
            @foreach($package as $item)
                <div class="card">
                    <a href="{{ url('/package_description', $item->id) }}">
                        <div class="card-head">
                            <div class="card-serial">
                                <h1><?php echo $serial_count ?></h1>
                            </div>
                            <div class="card-title">
                                <p>{{ $item->title1 }}</p>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star star">&nbsp;</i>{{ $item->rating }}
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="package/{{ $item->image }}">
                        </div>
                        <div class="card-footer">
                            <div class="clock">
                                <i class="fa-solid fa-clock icon-clock"></i>&nbsp;{{ $item->tour_length }}
                            </div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot icon-location"></i>&nbsp;{{ $item->location }}
                            </div>
                            <div class="price">
                                <div><i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>{{ $item->price }}</del>&nbsp;</div>
                                <div><i class="fa-sharp fa-solid fa-bangladeshi-taka-sign taka">&nbsp;{{ $item->discount_price }}</i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $serial_count=$serial_count + 1 ?>
            @endforeach
            </div>
        </main>
        <footer>
            <h1 id="footer-text"><span>E</span>xpedia</h1>
            <div class="links">
                <a href="#"><i class="fa-brands fa-facebook link-icon"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram link-icon"></i></a>
                <a href="#"><i class="fa-brands fa-square-twitter link-icon"></i></a>
                <a href="#"><i class="fa-brands fa-youtube link-icon"></i></a>
            </div>
            <h2 class="center">© 2023 Expedia.com All rights reserved.</h2>
            <p class="center">The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.</p>
        </footer>
</body>
</html>