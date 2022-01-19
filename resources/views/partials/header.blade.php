<div class="container">
    <header class="d-flex align-items-center">
        <a href="/">
            <img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics">
        </a>
        
        <nav>
            <ul class="d-flex align-items-center m-0">
                <li class="list-inline-item">
                    <a href="{{ route('home') }}"
                        @if (Request::route()->getName() === 'home') class="active" @endif>
                        COMICS
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('news') }}"
                        @if (Request::route()->getName() === 'news') class="active" @endif>
                        NEWS
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</div>