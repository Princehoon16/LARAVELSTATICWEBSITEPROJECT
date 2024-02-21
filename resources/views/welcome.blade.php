{{-- <h1>hello world!</h1> --}}
@include('pages.header')
    <article>
        <h1 id="h1"> Home </h1>
        <p>Laravel is a free open-source PHP framework. It provides web developers tools and resources for building modern PHP web applications.</p>
        <p>Laravel is a free open-source PHP framework. It provides web developers tools and resources for building modern PHP web applications.Laravel is a web application framework created by Taylor Otwell in 2011 and like all other modern frameworks, it also follows the Model-View-Controller (MVC) architectural pattern. Laravel values Elegance, Simplicity, and Readability and if one talks of building applications with PHP frameworks, Laravel is second to none. Since Laravel is open-source, one can find the source code in its Github.</p>
        <p>
            <ul>
                <li><h3 align="left" style="background-color: black;color:ghostwhite;padding-left:30px;">Scheduler:</h3> <p id="p1" >It includes support for scheduling periodically executed tasks.</p></li>
                <li><h3 align="left" style="background-color: black;color:ghostwhite;padding-left:30px;">Cashier:</h3> <p id="p1">For managing subscription billing services.</p></li>
                <li><h3 align="left" style="background-color: black;color:ghostwhite;padding-left:30px;">Filesystem:</h3> <p id="p1">Allows remote storage to be used as in the same way as local file systems.</p></li>
                <li><h3 align="left" style="background-color: black;color:ghostwhite;padding-left:30px;">Socialite:</h3> <p id="p1">Simplified mechanism for OAuth authentication with providers like Facebook, Github, Google, etc.</p></li>
            </ul>
        </p>
    </article>
@include('pages.sidebar')
@include('pages.footer')

