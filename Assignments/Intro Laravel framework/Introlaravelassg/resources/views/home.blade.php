<h1>Homepage</h1>

<ul>


    <li><a href="home">home</a></li>


    @guest
    <li><a href="register">register</a></li>
    <li><a href="login">login</a></li>
    @else
    <li><a href="logout">logout</a></li>
    @endguest

    <li><a href="contact">contact us </a></li>
    <li><a href="gallery">gallery</a></li>
    <li><a href="about">about us</a></li>
</ul>
