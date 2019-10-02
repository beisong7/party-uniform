<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
    <h1 id="colorlib-logo"><a href="{{ route('home') }}" >Party Uniform</a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="{{ @$nav['home'] }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ @$nav['about'] }}" ><a href="{{ route('about') }}">About</a></li>
            <li class="{{ @$nav['service'] }}"><a href="{{ route('services') }}">Services</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Recent Works</a></li>
            <li class="{{ @$nav['faq'] }}"><a href="{{ route('faq') }}">Faq</a></li>
            <li class="{{ @$nav['contact'] }}"><a href="{{ route('contactUs') }}">Contact</a></li>
        </ul>
    </nav>

    <div class="colorlib-footer">
        <p><small>&copy;
                partyuniform.com, <script>document.write(new Date().getFullYear());
                </script> <!--All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
        <ul>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-twitter2"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
        </ul>
    </div>

</aside>