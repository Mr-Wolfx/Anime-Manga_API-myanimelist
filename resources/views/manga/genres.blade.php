<x-layout>



    <header>
        <h1>Manga</h1>
    </header>
    
    <div class="containerr container-fluid">
        <div class="row justify-content-center">
            
            <a href="/" class=" m-3 row col-10 col-md-2" style="text-decoration: none;">
                <div class=" card card1">
                    <div class="containers">
                        <img  src="/img/Wolf-Gif-2.gif" alt="Progetti">
                    </div>
                    <div class="details text-center">
                        <h3>Homepage</h3>
                        <p>Ritorna alla home di My Anime List</p>
                    </div>
                </div>
            </a>

            <a href="{{route('anime.genres')}}" class=" m-3 row col-10 col-md-2" style="text-decoration: none;">
                <div class=" card card2">
                    <div class="containers">
                        <img src="/img/Wolf-Gif-3.gif" alt="Esperienze">
                    </div>
                    <div class="details text-center" href="hhtps://www.wolf89xx.com">
                        <h3>Anime</h3>
                        <p>Anime di My Anime List</p>
                    </div>
                </div>
            </a>

            <a href="{{route('manga.genres')}}" class=" m-3 row col-10 col-md-2" style="text-decoration: none;">
                <div class=" card card3 opacity-50">
                    <div class="containers">
                        <img src="/img/Wolf-Gif-5.gif" alt="Curriculum">
                    </div>
                    <div class="details text-center">
                        <h3>Manga</h3>
                        <p>Manga di My Anime List</p>
                    </div>
                </div>
            </a>

            <a href="/Dove_trovarci" class=" m-3 row col-10 col-md-2" style="text-decoration: none;">
                <div class=" card card4">
                    <div class="containers">
                        <img src="/img/Wolf-Gif-3.gif" alt="Curriculum">
                    </div>
                    <div class="details text-center">
                        <h3>Servizi</h3>
                        <p>Lorem ipsum.</p>
                    </div>
                </div>
            </a>

            


            <h2 class="text-center my-5">Generi di Manga</h2>
            
            @foreach ($genres as $genre)
            <a href="{{route('manga.index', ['genre_id'=>$genre['mal_id']])}}" class=" m-3 row col-8 col-md-2" style="text-decoration: none;">
                <div class=" card card3">
                    <div class="containers">
                        <img src="/img/Wolf-Gif-5.gif" alt="Curriculum">
                    </div>
                    <div class="details text-center">
                        <h3>{{$genre['name']}}</h3>
                        <p>Manga di My Anime List</p>
                    </div>
                </div>
            </a>
            @endforeach
            


            
        </div>          
    </div>

</x-layout>