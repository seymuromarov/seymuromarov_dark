<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description"
          content="Seymur Omarov 's Portfolio. Freelancer web ( PHP - Laravel-CI,Javascript-ES6-Jquery-NodeJS),C#,C++,Android Developer">
    <meta name="keywords"
          content="Seymur Omarov,omarov,seymur,programmer,cv,developer,laravel,portfolio,java,ömərov seymur,ömərov,web,proqramlaşdırma,android proqramlaşdırma,web proqramlaşdırma">
    <meta name="web_author" content="Seymur Omarov">
    <meta name="Robots" content="index, follow">
    <meta name="yandex-verification" content="53f4f2683c352916"/>
    <title>Seymur Omarov - Portfolio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/bulma.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-120973478-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body class="no-select">


<div id="home">
    <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a href="#" class="navbar-item navbar-logo">
                    <img alt="Seymur Omarov" src="svg/solologo.svg"/><span class="hello u-right">Seymur Omarov</span>
                </a>
                <!-- 1245px -->

                <div class="navbar-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="navbar-menu">
                <div class="navbar-end">
                    <a data-scroll href="#home" class="navbar-item">Home</a>
                    <a data-scroll href="#about" class="navbar-item">About me</a>
                    <a data-scroll href="#projects" class="navbar-item">Projects</a>
                    <a data-scroll href="#blogs" class="navbar-item">Blogs</a>
                    <a data-scroll href="#contact" class="navbar-item">Contact me</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="starParent"><img src="svg/star1.svg" alt="star" class="star"></div>
    <div class="starParent"><img src="svg/star2.svg" alt="star" class="star"></div>
    <div class="starParent"><img src="svg/star3.svg" alt="star" class="star"></div>
    <div class="starParent"><img src="svg/star4.svg" alt="star" class="star"></div>
    <div class="starParent"><img src="svg/star5.svg" alt="star" class="star"></div>
    <div class="starParent"><img src="svg/star6.svg" alt="star" class="star"></div>
    {{--<img src="png/bgofhome.png" class="bg" alt="background eclipses">--}}
    <div class="waves">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <!--<div class="sines">-->
    <!--<img class="sinefg" src="svg/sinefg.svg" />-->
    <!--<img class="sinebg" src="svg/sinebg.svg" />-->
    <!--</div>-->
    <div class="container">
        <p class="title">I am a software <span class="secondary-color">developer</span></p>
        <p class="subtitle">Meet with my knowledge and experience</p>
    </div>
    <div class="more">
        <a href="#about">
            <section id="find-more-section" class="scroll-down nav-link">
                <a href="#about"><span></span>
                    <p class="secondary-color">Find out more</p></a>
            </section>

        </a>
    </div>
</div>


<div id="about">
    <div class="container">
        <div class="columns">
            <div class="column">
                <img class="person" alt="seymur omarov" src="png/metransparent.png" height="450"/>

            </div>

            <div itemscope itemtype="http://schema.org/CreativeWork" class="column">
                <p class="title">About <span class="secondary-color">me</span></p>
                <p itemprop="author" itemscope itemtype="http://schema.org/Person" class="plain">My full name is <span
                            itemprop="name"> Seymur
                        Omarov </span> and I am a web and software developer.
                    I started when I was very young to develop apps in Pascal, expanding my knowledge
                    to all the other web system and achieving eventually more elaborated structures.
                </p>
                <p class="plain">I mostly develop in Laravel PHP based framework,native PHP with ajax, Javascript.
                    I've worked on many different technologies too and lately I approached to the wonderful world of
                    Android .
                </p>
                <p class="plain">I current frequent Computer Science's faculty at the University of Baku State
                    University
                </p>
                <a href="#" class="left-square">Read More</a>

            </div>
        </div>
    </div>
    <!--<img src="png/gear.png" alt="gear" class="gear">-->
</div>

<div id="pb">
    <div class="container">
        <label id="projectsSwitch" class="switchpills">
            <input class="hide-me" type="checkbox">
            <span class="slider"></span>
            <span>Projects</span>
            <span>Packages</span>
        </label>
        <div id="projectsLoader">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
            <p>Loading</p>
        </div>
        <div id="projects">
            <div id="item-lists">

                @include('parts.projects')

            </div>
        </div>
        {{--<nav class="pagination is-rounded" role="navigation" aria-label="pagination">--}}
        {{--<a class="pagination-previous">Prev</a>--}}
        {{--<a class="pagination-next">Next</a>--}}
        {{--<ul class="pagination-list">--}}
        {{--<li><a class="pagination-link projectsPag is-current" aria-label="Goto page 1">1</a></li>--}}
        {{--<li><a class="pagination-link projectsPag" aria-label="Goto page 2">2</a></li>--}}
        {{--<li><a class="pagination-link projectsPag" aria-label="Goto page 3">3</a></li>--}}
        {{--<li><a class="pagination-link projectsPag" aria-label="Goto page 4">4</a></li>--}}
        {{--</ul>--}}
        {{--</nav>--}}
        <div id="blogs">
            <p class="title">My <span class="secondary-color">Blogs</span></p>
            <div class="columns">
                @foreach($blogs as $blog)
                    <div class="column blog is-4">
                        <img data-value="{{$blog->id}}" class="showBlog" src="/storage/{{$blog->image}}"
                             alt="Blog image">
                        <div class="desc">
                            <a data-value="{{$blog->id}}" class="showBlog"><h3
                                        class="secondary-color showBlog">{{$blog->title}}</h3></a>
                            <p>{{$blog->excerpt}}</p>
                            <a data-value="{{$blog->id}}" class="blog-link showBlog">Read More <i
                                        class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--<a class="button is-primary is-rounded">Show More</a>--}}
        </div>
    </div>
</div>

<div id="contact">
    <div class="container">
        <div class="columns">
            <div class="column">
                <img class="logo_footer" src="svg/seymur_02_without.svg" alt="Seymur Omarov">
            </div>
            <div class="column contact-info">
                <h4>CONTACT ME</h4>
                {{--<div><i class="fa fa-map-marker-alt fai"></i>--}}
                {{--<p>Address: Lorem lorem lorem lorem lorem</p></div>--}}
                <div><i class="fa fa-phone fai"></i>
                    <p>Phone: +994513073940</p></div>
                <div><i class="fa fa-envelope fai"></i>
                    <a href="mailto:omarov.seymur@outlook.com">Email: omarov.seymur@outlook.com</a><br>
                </div>
                <div><i class="fa fa-envelope fai"></i>
                    <a href="mailto:me@seymuromarov.com">Email: me@seymuromarov.com</a>
                </div>
                <div><i class="fa fa-clock fai"></i>
                    <p>Monday - Friday: 10.00 am to 18.00 pm<br/>
                        {{--Saturday - Sunday : Closed--}}
                    </p>
                </div>
                <div class="social-icons">
                    <a href="https://github.com/seymuromarov"><img alt="github" class="social-icon"
                                                                   src="social-icons/circle-white/github.png"></a>
                    <a href="https://www.instagram.com/seymuromarov/"><img alt="instagram" class="social-icon"
                                                                           src="social-icons/circle-white/instagram.png"></a>
                    <a href="https://www.facebook.com/seymuromaroff"><img alt="facebook" class="social-icon"
                                                                          src="social-icons/circle-white/facebook.png"></a>
                    <a href="https://api.whatsapp.com/send?phone=994513073940"><img alt="whatsapp" class="social-icon"
                                                                                    src="social-icons/circle-white/whatsapp_grey.png"></a>
                    {{--<a href="https://twitter.com/OmarovSeymur"><img class="social-icon" src="social-icons/circle-white/twitter.png"></a>--}}
                    <a href="https://www.linkedin.com/in/seymuromarov/"><img alt="linkedin" class="social-icon"
                                                                             src="social-icons/circle-white/linkedin.png"></a>
                </div>

            </div>
            <div class="column write-us">
                <h4>WRITE ME</h4>
                <p>Use forum below to contact me.</p>
                <div class="form-left">
                    <div class="field">
                        <div class="control has-icons-left">
                            <input id="name" class="input" type="text" placeholder="Name" value="">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control has-icons-left">
                            <input id="email" class="input" type="text" placeholder="Email" value="">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                        </div>
                    </div>
                    <div class="control">
                        <button id="sendMessage" class="button is-primary">Send Us</button>
                    </div>
                </div>
                <div class="form-right">
                    <div class="field">
                        <div class="control has-icons-left">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                            <textarea id="message" class="textarea" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="footer">
    <p>Made with <span class="red">hate</span> by me. © 2018. All Rights Reserved.</p>
</div>
<p class="hide-me">seymur omarov , seymur,Seymur,Omarov,portfolio,omarov seymur,seymur
    omarov,cv,resume,seymur omarov cv,seymur cv,seymur omarov developer</p>
<h1 class="hide-me">
    Seymur,Omarov,Seymur Omarov CV,cv,portfolio,Seymur Omarov Portfolio,Resume
</h1>

<div id="blog-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div id="blog-content" class="content">

                    </div>
                </div>
            </article>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>

<script src="{{ asset('js/jquery3.3.1.js')}}"></script>
<script src="{{ asset('js/axios.min.js')}}"></script>
<script src="{{ asset('js/anix.umd.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="{{ asset('js/seymur.js')}}"></script>

<!--<script src="js/index.js"></script>-->
</body>

</html>
