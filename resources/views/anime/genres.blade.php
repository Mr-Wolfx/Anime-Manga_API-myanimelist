<x-layout>



    <header>
        <h1>Anime</h1>
    </header>
    

    <div class="containerr container-fluid" >
        <div class="row justify-content-center" >
            
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
                <div class=" card card2 opacity-50">
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
                <div class=" card card3 ">
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

            


            <h2 class="text-center my-5" >Generi di Anime</h2>

            <div href="/" id="wrapper" class="row justify-content-center" style="text-decoration: none;">
            
            </div>

                {{-- <a href="" class=" m-3 row col-8 col-md-2"  style="text-decoration: none;">
                    <div class=" card card2" >
                        <div class="containers" >
                            <img src="/img/Wolf-Gif-5.gif" alt="Curriculum">
                        </div>
                        <div class="details text-center" >
                            <h3></h3>
                            <p>Manga di My Anime List</p>
                        </div>
                    </div>
                </a> --}}

{{-- 
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
            @endforeach --}}
            


            
        </div>          
    </div>

    <script>
        fetch('/api/anime/genres')
        .then(response => response.json())
        .then(data => {
            
            const wrapper = document.querySelector('#wrapper');


            data.forEach(element => {

            // const col = document.createElement('div');
            // col.classList.add('card', 'card2', 'text-center');
            
            // const h3 = document.createElement('h3');
            // h3.classList.add();
            
            // h3.textContent = element.name;
            
            // col.appendChild(h3);
            // wrapper.appendChild(col);

            
            const col = document.createElement('div');
            col.classList.add('details', 'text-center', 'col-10', 'col-md-3', 'mx-2');
            
            const h3 = document.createElement('h3');
            h3.classList.add();
            
            const col2 = document.createElement('div');
            col.classList.add('card', 'card2');

            const img = document.createElement('div');
            col.classList.add('containers');



            h3.textContent = element.name;
            

            col2.appendChild(img);
            h3.appendChild(col2);
            col.appendChild(h3);
            wrapper.appendChild(col);                                    


            });
                
        })
        .catch(error => {
            console.error(`Ho trovato questo errore ${error}`);
        })
    </script>

</x-layout>