<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Ashik</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="ml-auto navbar-nav nav">
                    <li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="/about" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="/view-cv" class="nav-link"><span>Resume</span></a></li>

                    <li class="nav-item"><a href="/skill" class="nav-link"><span>Skills</span></a></li>

                    <li class="nav-item"><a href="/Products" class="nav-link"><span>My Products</span></a></li>
                    <li class="nav-item"><a href="/cart" class="nav-link"><span>Cart Item</span></a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link"><span>Contact</span></a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>
