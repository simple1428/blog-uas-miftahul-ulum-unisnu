<!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Aqila Jati</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link "  href="{{ url('/blog') }}">Blog</a></li>
                        @guest
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="{{ url('/login') }}">Login</a></li>
                        @endguest
                        
                        @auth
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="{{ url('/admin') }}">Dashboard</a></li> 
                        <form action="/logout" method="post">
                            @csrf
                            <li class="nav-item">
                                <button class="nav-link btn btn-warning" type="submit">Logout</button>
                            </li> 
                            
                            </form>
                        @endauth


                    </ul>
                </div>
            </div>
        </nav>