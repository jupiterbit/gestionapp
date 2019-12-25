<nav>        
    <ul>
        <!-- setActive es una funcion implementada en app/helpers.php -->
        <li class="{{ setActive('home') }}"><a href="{{route('home')}}">{{__('Home')}}</a></li>
        <li class="{{ setActive('about') }}"><a href="{{route('about')}}">{{__('About')}}</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{route('projects.index')}}">{{__('Projects')}}</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{route('contact')}}">@lang('Contact')</a></li>
        @auth
            <li>
                <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>               
        @else     
            <li class="{{ setActive('login') }}"><a href="{{route('login')}}">@lang('Login')</a></li>
        @endauth
        
    </ul>
</nav>  

<form id="logout-form" method="POST" action="{{route('logout')}}" style="display:none;">
    @csrf    
</form>