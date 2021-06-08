@extends("layouts.app")

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

                            <div class="comic_img">
                                <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
                            </div>

                            <div class="comic_title">
                                <span>{{$comic["series"]}}</span>
                            </div>

                        </li>

                    @endforeach

                </ul>

            </div>

            <div class="load_more">
                <button>
                    LOAD MORE
                </button>
            </div>

        </div>

    </section>

    <section id="links">

    </section>

@endsection