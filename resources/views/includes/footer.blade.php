

    <footer class="footer">
        <div class="footer-information center">
            <div class="footer_item">
                <div class="line">
                    <p>КАТАЛОГ</p>
                    <hr>
                </div>
                <ul>
                    <li><a href="{{ route('category.show', ['category' => 1]) }}">SQL</a></li>
                    <li><a href="{{ route('category.show', ['category' => 2]) }}">JAVASCRIPT</a></li>
                    <li><a href="{{ route('category.show', ['category' => 3]) }}">PHP</a></li>
                </ul>
            </div>
            <div class="footer_item">
                <div class="line">
                    <p>ИНФОРМАЦИЯ</p>
                    <hr>
                </div>
                <ul>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="{{ route('menu.contact') }}">Контакты</a></li>
                    <li><a href="">Статьи</a></li>
                </ul>
            </div>
            <div class="footer_item">
                <div class="line">
                    <p>АККАУНТ</p>
                    <hr>
                </div>
                <ul>
                    <li><a href="{{ route('login') }}">Войти</a></li>
                    <li><a href="{{ route('register') }}">Регистрация</a></li>
                    <li><a href="{{ route('menu.contact') }}">Обратная связь</a></li>
                </ul>
            </div>
        </div>
        <div id="social-buttons">
            <noindex><a href="https://www.facebook.com/programsLife/" target="_blank" rel="nofollow">
                    <i class="fab fa-facebook-f"></i>
                </a></noindex>
            <noindex><a href="https://twitter.com/GoshaDudar" target="_blank" rel="nofollow">
                    <i class="fab fa-twitter"></i>
                </a></noindex>
            <noindex><a href="https://www.youtube.com/user/PlurrimiTube" target="_blank" rel="nofollow" class="mt-4 mt-md-0">
                    <i class="fab fa-youtube"></i>
                </a></noindex>
            <noindex><a href="http://t.me/itProger_official" target="_blank" rel="nofollow" class="mt-4 mt-md-0">
                    <i class="fab fa-telegram-plane"></i>
                </a></noindex>
            <noindex><a href="https://www.instagram.com/itproger_official/" target="_blank" rel="nofollow" class=" mt-4 mt-md-0">
                    <i class="fab fa-instagram"></i>
                </a></noindex>
        </div>
    </footer>
    <div class="footer_block">
        <div class="copyright center">
            <p>© Онлайн-курсы самоподготовки для IT профессий,  {{ config('app.name') }} {{ date('Y') }}.</p>
        </div>
    </div>

