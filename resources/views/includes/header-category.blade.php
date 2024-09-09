<header>
    @include('includes.menu')
    <div class="top-info center">
        @foreach($categories as $cat)

            @if($cat->getAttribute('id') == $category_id)
                <div class="top-content">
                    <p class="top-content-uptitle">Платформа онлайн-обучения</p>
                    <p class="top-content-title-category"><strong>Характеристика курса</strong></p>
                    <p class="top-content-txt">
                        Программа рассчитана на новичков, которые хотят изучить язык программирование на {{ $cat->title }}.
                        Вы изучите теорию и на практике научитесь применять свои навыки.
                    </p>
                </div>
                <div class="container">

                    <div class="slide">
                        <div class="content">
                            <h3>{{ $cat->title }}</h3>
                            <p>{{ $cat->description }}</p>
                        </div>
                        <img src="{{ Storage::disk('public')->url($cat->image) }}" alt="category">
                    </div>

                </div>
            @endif
        @endforeach
    </div>
</header>
