<nav>        
    <ul>
        <!-- setActive es una funcion implementada en app/helpers.php -->
        <li class="{{ setActive('home') }}"><a href="/">Home</a></li>
        <li class="{{ setActive('about') }}"><a href="/about">About</a></li>
        <li class="{{ setActive('portfolio') }}"><a href="/portfolio">Portfolio</a></li>
        <li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>
    </ul>
</nav>  