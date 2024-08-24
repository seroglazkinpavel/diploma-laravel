<header>
@include('includes.menu')
<div class="top-info center">
    <div class="top-content">
        <p class="top-content-uptitle">Платформа онлайн-обучения</p>
        <p class="top-content-title"><strong>Онлайн-курсы самоподготовки для IT профессий</strong></p>
        <p class="top-content-txt">Самоподготовка по обучению языков программирования и дизайн-интерьеров. Начальный и продвинутый уровень .</p>

    </div>
    <div class="container">

        @foreach($categories as $category)
            <div class="slide-container {{ $loop->first ? 'active' : '' }}">
                <div class="slide">
                    <div class="content">
                        <h3>{{ $category->title }}</h3>
                        <p>{{ $category->description }}</p>
                    </div>
                    <img src="{{ asset($category->image) }}" alt="" width="2917" height="1710">
                </div>
                <a href="{{ route('category.show', ['category' => $category->id]) }}" class="btn">Вперед</a>
            </div>
        @endforeach
        <div id="next" onclick="next()"> ► </div>
        <div id="prev" onclick="prev()"> ◄ </div>
    </div>

</div>
</header>


