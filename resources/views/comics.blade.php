@extends("layouts.app")

@section("tag_title")
    Comics
@endsection

@section("main_content")

    <section id="comics">

        <div class="container">

            <div class="title">
                <h1>Current Series</h1>
            </div>

            <div class="comics_container">

                <ul class="comics_list">

                    @foreach ($comics_array as $comic)

                        <li class="single_comic">

                            <a href="{{route("comic", [
                                "id" => $comic["id"]
                            ]
                            )}}">

                                <div class="comic_img">
                                    <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
                                </div>
    
                                <div class="comic_title">
                                    <span>{{$comic["series"]}}</span>
                                </div>

                            </a>

                        </li>

                    @endforeach

                </ul>

            </div>

            <div class="load_more">
                <button>LOAD MORE</button>
            </div>

        </div>

    </section>

    <section id="links">

        <div class="container">

            <div class="links_container">
                
                <div>
                    <img src="{{asset("img/buy-comics-digital-comics.png")}}" alt="">
                    <span>Digital Comics</span>
                </div>

                <div>
                    <img src="{{asset("img/buy-comics-merchandise.png")}}" alt="">
                    <span>DC Merchandise</span>
                </div>

                <div>
                    <img src="{{asset("img/buy-comics-subscriptions.png")}}" alt="">
                    <span>Subscription</span>
                </div>

                <div>
                    <img src="{{asset("img/buy-comics-shop-locator.png")}}" alt="">
                    <span>Comic Shop Location</span>
                </div>

                <div>
                    <img src="{{asset("img/buy-dc-power-visa.svg")}}" alt="">
                    <span>DC Power Visa</span>
                </div>

            </div>

        </div>

    </section>

@endsection