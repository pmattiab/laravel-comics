<header>

    <div class="top_header">
        
        <div class="top_menu">
            <div class="container">
                <ul>
                    <li><a href="#">DC Power<span class="sm">sm</span> Visa<span class="r">&#174;</span></a></li>
                    <li><a href="#">Additional DC Sites <i class="fas fa-sort-down"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="bottom_menu">

                <div class="logo">
                    <img src="{{asset("img/dc-logo.png")}}" alt="dc comics logo">
                </div>

                <div>
                    <nav>
                        <ul>
                            <li><a class="{{ Request::route()->getName() == "characters" ? "active" : "" }}" href="{{route("characters")}}">Characters</a></li>
                            <li><a class="{{ Request::route()->getName() == "home" || Request::route()->getName() == "comics" || Request::route()->getName() == "comic" ? "active" : "" }}" href="{{route("comics")}}">Comics</a></li>
                            <li><a class="{{ Request::route()->getName() == "movies" ? "active" : "" }}" href="{{route("movies")}}">Movies</a></li>
                            <li><a class="{{ Request::route()->getName() == "tv" ? "active" : "" }}" href="{{route("tv")}}">TV</a></li>
                            <li><a class="{{ Request::route()->getName() == "games" ? "active" : "" }}" href="{{route("games")}}">Games</a></li>
                            <li><a class="{{ Request::route()->getName() == "collectibles" ? "active" : "" }}" href="{{route("collectibles")}}">Collectibles</a></li>
                            <li><a class="{{ Request::route()->getName() == "videos" ? "active" : "" }}" href="{{route("videos")}}">Videos</a></li>
                            <li><a class="{{ Request::route()->getName() == "fans" ? "active" : "" }}" href="{{route("fans")}}">Fans</a></li>
                            <li><a class="{{ Request::route()->getName() == "news" ? "active" : "" }}" href="{{route("news")}}">News</a></li>
                            <li><a class="{{ Request::route()->getName() == "shop" ? "active" : "" }}" href="{{route("shop")}}">Shop <i class="fas fa-sort-down"></i></a></li>
                        </ul>
                    </nav>
                </div>
    
                <div class="search">
                    <input type="text" placeholder="Search">
                    <span><i class="fas fa-search"></i></span>
                </div>
    
            </div>
        </div>

    </div>

    <div class="bottom_header">
    </div>

</header>