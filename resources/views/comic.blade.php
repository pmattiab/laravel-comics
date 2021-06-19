@extends("layouts.app")

@section("tag_title")
    Comic
@endsection

@section("main_content")

    <section id="comic">

        <div class="banner">
            <div class="small_container">
                <div class="comic_poster">
                    <img src="{{$comic["thumb"]}}" alt="">
                </div>
            </div>
        </div>

        <div class="comic_info">

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

        <div class="comic_specs">

            <div class="small_container">

                <div class="col_sx">

                    <div class="talent">
                        <h2>Talent</h2>
                    </div>

                    <div class="artists">

                        <div class="artists_title">
                            Art by:
                        </div>

                        <div class="artists_list">
                            <ul>
                                @foreach ($comic["artists"] as $artist)
                                    <li><a href="#">{{$artist}}</a>{{!$loop->last ? "," : ""}}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    <div class="writers">

                        <div class="writers_title">
                            Written by:
                        </div>

                        <div class="writers_list">
                            <ul>
                                @foreach ($comic["writers"] as $writer)
                                    <li><a href="#">{{$writer}}</a>{{!$loop->last ? "," : ""}}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="col_dx">

                    <div class="specs">
                        <h2>Specs</h2>
                    </div>

                    <div class="series">
                        <div class="series_title">
                            Series:
                        </div>

                        <div class="series_link">
                            <a href="#">{{$comic["series"]}}</a>
                        </div>
                    </div>

                    <div class="price">
                        <div class="price_title">
                            U.S. Price:
                        </div>

                        <div>
                            {{$comic["price"]}}
                        </div>
                    </div>

                    <div class="sale_date">
                        <div class="sale_date_title">
                            On Sale Date:
                        </div>

                        <div>
                            {{date('F d Y', strtotime($comic["sale_date"]))}}
                        </div>
                    </div>

                </div>

            </div>

    </section>

    <section id="links_comic">

        <div class="small_container">

        </div>

    </section>

@endsection