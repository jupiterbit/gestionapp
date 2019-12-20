<nav>        
    <ul>
        <!-- setActive es una funcion implementada en app/helpers.php -->
        <li class="{{ setActive('home') }}"><a href="/">{{__('Home')}}</a></li>
        <li class="{{ setActive('about') }}"><a href="/about">{{__('About')}}</a></li>
        <li class="{{ setActive('portfolio') }}"><a href="/portfolio">{{__('Portfolio')}}</a></li>
        <li class="{{ setActive('contact') }}"><a href="/contact">@lang('Contact')</a></li>
    </ul>
</nav>  