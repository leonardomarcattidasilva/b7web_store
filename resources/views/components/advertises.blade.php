        <div class="categories-area">
            <div class="title">Categorias</div>
            <div class="buttons">
                <button class="cars">
                    <img src="{{asset('temp/icons/carIcon.png')}}" alt="Ícone Carros" />
                    Carros
                </button>
                <button class="eletronics">
                    <img
                        src="{{asset('temp/icons/eletronicsIcon.png')}}"
                        alt="Ícone Eletrônicos" />
                    Eletrônicos
                </button>
                <button class="clothes">
                    <img src="{{asset('temp/icons/clothesIcon.png')}}" alt="Ícone Roupas" />
                    Roupas
                </button>
                <button class="sports">
                    <img src="{{asset('temp/icons/sportsIcon.png')}}" alt="Ícone Esportes" />
                    Esportes
                </button>
                <button class="babies">
                    <img src="{{asset('temp/icons/babiesIcon.png')}}" alt="Ícone Bebês" />
                    Bebês
                </button>
            </div>
        </div>
        <div class="ads">
            <div class="ads-title">Anúncios recentes</div>
            <div class="ads-area">
                <x-singleAdvertise img="https://place-hold.it/250x250" title="Bola de Futebol Americano Wilson" price="R$ 138,61" href="#" />
                @foreach($advertiseList as $item)
                <x-singleAdvertise :img="$item['img']" :title="$item['title']" :price="$item['price']" :href="$item['href']" />
                @endforeach
            </div>
        </div>
