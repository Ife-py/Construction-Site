<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Construction</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
        .navbar-custom {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-custom img {
            max-height: 50px;
        }

        .navbar-custom ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navbar-custom ul li {
            margin-left: 20px;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        .footer .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer .footer-links li {
            margin: 0 0 10px ;
        }

        .footer .footer-links a {
            color: white;
            text-decoration: none;
        }

        .footer .footer-links a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <nav class="p-3 m-2 bg-dark-subtle text-dark-emphasis navbar-custom">
        <div>
            <a href="{{ route('index') }}">
                <img src="{{ asset('Construction Machine.png')}}" alt="Logo">
            </a>
        </div>
        <ul>
            <li>
                <a href="{{ route('index') }}"><p class="fw-bold">Index</p></a>
            </li>
            <li>
                <a href="{{ route('services') }}" ><p class="fw-bold">services</p></a>
            </li>
            <li>
                <a href="{{ route('about_us') }}" ><p class="fw-bold">About_us</p></a>
            </li>
            <li>
                <a href="{{ route('contact_us') }}" ><p class="fw-bold">Contact_us</p></a>
            </li>
        </ul>
    </nav>






    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5> Contact Us</h5>
                    <p> Email:test@example.com </p>
                    <p> Phone : +234 802 856 454 84</p>
                    <p> Address : 123 Test street Example avenue </p>
                </div>

                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li>
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('about_us') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact_us') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <p>
                        <a href="#" class="btn btn-social-icon btn-facebook">
                            <img src="{{ asset('facebook.svg') }}" alt="Facebook">
                            Facebook</a>

                        <a href="#" class="btn btn-social-icon btn-facebook">
                            <img src="{{ asset('instagram.svg') }}" alt="Facebook">
                            Instagram</a>
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
