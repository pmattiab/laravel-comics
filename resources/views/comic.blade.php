@extends("layouts.app")

@section("tag_title")
    Comic
@endsection

@section("main_content")

    <section id=comic_info>

        <div class="banner">
            <div class="small_container">
                <div class="comic_poster">
                    <img src="{{$comic["thumb"]}}" alt="">
                </div>
            </div>
        </div>

        <div class="comic_details">
            <div class="small_container">

                <div class="col_sx">

                    <div class="comic_title">
                        <h1>{{$comic["title"]}}</h1>
                    </div>
    
                    <div class="comic_shop">

                        <div class="comic_price">
                            <span class="us_price">U.S. Price: </span>
                            <span>{{$comic["price"]}}</span>
                        </div>
    
                        <div class="disponibility">
                            <span>AVAILABLE</span>
                        </div>

                        <div class="check_availability">
                            <span>Check Availability <i class="fas fa-sort-down"></i></span>
                        </div>
                        
                    </div>

                    <div class="comic_description">
                        <p>{{$comic["description"]}}</p>
                    </div>

                </div>

                <div class="col_dx">

                    <div class="adv">
                        <span>ADVERTISEMENT</span>
                    </div>

                    <div class="adv_img">
                        <img src="{{asset("img/adv.jpg")}}" alt="">
                    </div>

                </div>

            </div>
        </div>

    </section>

@endsection