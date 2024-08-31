<div class="top">
        <div class="header">
            <div class="center">
                <div class="header-section">
                    <div class="header-section-left">
                        <div class="header-left-logo">
                            <a href="http://localhost:7777" class="menu-link"><img src="http://localhost:7777/images/logo.png" alt="logo"></a>
                        </div>
                        <ul class="menu-list">
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{ route('home') }}" class="menu-link"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>--}}
{{--                            </li>--}}
                            <li class="menu-item">
                                <a href="" class="menu-link">Услуги</a>
                            </li>
                            <li class="menu-item">
                                <a href="" class="menu-link">О нас</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('reviews') }}" class="menu-link">Отзывы</a>
                            </li>
                            <li class="menu-item">
                                <a href="" class="menu-link">Статьи</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('feedback.index') }}" class="menu-link">Контакты</a>
                            </li>

                        </ul>
                        <form action="{{ route('search') }}" class="left_header_search_form">
                            <input
                                class="left_header_search_btn"
                                name="search"
                                id="search_btn"
                                type="text"
                                placeholder="Search..."
                                value="{{ request()->get('search') }}"
                                aria-describedby="button-addon2"/>
                            <label for="search_btn">
                                <svg width="27" height="28" viewBox="0 0 27 28"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.0589 17.6249C20.6705 15.8648 21.6275 13.6038 21.769 11.2215C21.9106 8.8392 21.2281 6.48075 19.8362 4.5422C18.4443 2.60365 16.4278 1.20306 14.1252 0.575643C11.8227 -0.0517774 9.37437 0.132183 7.19143 1.09663C5.0085 2.06108 3.22389 3.74727 2.1373 5.87205C1.05071 7.99682 0.728322 10.4308 1.22426 12.7652C1.72021 15.0996 3.00428 17.1922 4.86085 18.6917C6.71741 20.1912 9.0334 21.0063 11.4199 20.9999C13.6723 21.003 15.8638 20.269 17.6599 18.9099L25.4079 26.7169C25.4934 26.806 25.5958 26.8771 25.7091 26.926C25.8225 26.975 25.9444 27.0008 26.0679 27.0019C26.1916 27.0023 26.314 26.9772 26.4276 26.9282C26.5411 26.8792 26.6434 26.8072 26.7279 26.7169C26.9018 26.536 26.999 26.2949 26.999 26.0439C26.999 25.793 26.9018 25.5518 26.7279 25.3709L19.0589 17.6249ZM2.88589 10.4999C2.89873 8.81465 3.41021 7.17089 4.35586 5.77587C5.30151 4.38086 6.63899 3.29703 8.1997 2.66102C9.76042 2.02501 11.4745 1.86529 13.1258 2.202C14.7772 2.53871 16.2919 3.35678 17.479 4.55307C18.6661 5.74935 19.4725 7.27031 19.7965 8.92421C20.1204 10.5781 19.9475 12.2909 19.2995 13.8467C18.6515 15.4024 17.5574 16.7315 16.1551 17.6664C14.7529 18.6013 13.1052 19.1001 11.4199 19.0999C9.14843 19.0891 6.97409 18.1774 5.3741 16.5651C3.77412 14.9527 2.87924 12.7714 2.88589 10.4999V10.4999Z"/>
                                </svg>
                            </label>
                        </form>
                    </div>
                    <div class="header-right">
                        <nav class="drop_down_menu">
                            <label class="menu-btn" for="menu-switch">
                                <span></span>
                            </label>
                            <input id="menu-switch" type="checkbox">
                            <ul class='menu-list-portable'>
                                <li class="menu-list-item">
                                    <span class="menu-list-title">menu</span>
                                </li>
                                <li class="menu-list-item"><a href="#">Услуги</a></li>
                                <li class="menu-list-item"><a href="#">О нас</a></li>
                                <li class="menu-list-item"><a href="{{ route('reviews') }}">Отзывы</a></li>
                                <li class="menu-list-item"><a href="#">Статьи</a></li>
                                <li class="menu-list-item"><a href="{{ route('feedback.index') }}">Контакты</a></li>
                            </ul>
                        </nav>
                        <div class="header-right-item headerButton"><img src="{{ asset('images/entrance.png') }}" alt=""></div>
                        <div class="header-right-item headerButton">
                            @if (empty(Auth::user()->name))
                                <a class="menu-link" href="{{ route('login') }}">Вход \ </a><a class="menu-link" href="{{ route('register') }}">регистрация</a>
                            @else
                                @if (Auth::user()->name === "Admin")
                                    <a href="{{ route('index') }}">{{ Auth::user()->name }}</a>
                                @else
                                    <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                                @endif
                                <form method="POST" action="{{ route('logout') }}" style="display:inline-block;">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"><span style="margin-right:5px;">\</span>Выход</a>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
