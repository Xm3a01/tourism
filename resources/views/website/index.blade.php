@extends('website.layouts.master')

@section('content')
<div id="home">
    <div class="container-fluid s-home">
        <div class="row">
            <div class="col-sm-12 col-md-12 p-0 m-0">
                <div class="home-background"> 
                    <div class="home-transparent">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center home-content">
                                    <h1> السياحه   <span id="typedcreative"> في  </span> السودان </h1>
                                    <h5> تشجيعا لمفهوم السياحه في السودان   </h5>
                                    <div>
                                        {{-- <button class="btn btn-lg btn-getstarted"> Get Started </button>
                                        <a class="btn btn-lg btn-readmore" class="js-scroll-trigger" href="#team"> Read More  </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about" class="s-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <img class="aboutImg" src="assets/img/sudan2.jpg" alt="...">
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="aboutContent">
                    <h1 class="title-about"> من نحن   </h1>
                    <div class="p-about">
                        Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.
                        <ul class="list-about">
                            <li>
                                <span class="icon-about icofont-check"></span>
                                <span class="txt-about"> Quis varius quam quisque id lementum.</span>
                            </li>
                            <li>
                                <span class="icon-about icofont-check"></span>
                                <span class="txt-about"> Quis varius quam quisque id lementum.</span>
                            </li>
                            <li>
                                <span class="icon-about icofont-check"></span>
                                <span class="txt-about"> Quis varius quam quisque id lementum.</span>
                            </li>
                            <li>
                                <span class="icon-about icofont-check"></span>
                                <span class="txt-about"> Quis varius quam quisque id lementum.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- form blogs -->
<div id="blog">
    <div class="container s-blog mt-5">
    <h1 class="mainTitle"> أفضل الاماكن السياحيه  </h1>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img src="assets/img/blogs/nursery1.jpg" alt="..." />
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li>
                                <span class="icofont-user"></span>
                                Gaassis Ahmed
                            </li>
                            <li>
                                <span class="icofont-user"></span>
                                12-2010
                            </li>
                            <li>
                                <span class="icofont-comment"></span>
                                23
                            </li>
                        </ul>
                        <h3 class="blog-title"> Program natinal testing</h3>
                        <p class="blog-p"> Setup your platform or integrate our payment solution?
                            Choose one of our MANGOPAY
                        </p>
                    </div>
                    <div class="blog-footer"  >
                        <a href="#"> Read Article </a><i  class="icofont-long-arrow-right"></i>
                    </div>
                </div>
            </div>	
                    <div class="col-sm-12 col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img src="assets/img/blogs/nursery3.jpg" alt="..." />
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li>
                                <span class="icofont-user"></span>
                                Gaassis Ahmed
                            </li>
                            <li>
                                <span class="icofont-user"></span>
                                12-2010
                            </li>
                            <li>
                                <span class="icofont-comment"></span>
                                23
                            </li>
                        </ul>
                        <h3 class="blog-title"> Program natinal testing</h3>
                        <p class="blog-p"> Setup your platform or integrate our payment solution?
                            Choose one of our MANGOPAY
                        </p>
                    </div>
                    <div class="blog-footer"  >
                        <a href="#"> Read Article </a><i  class="icofont-long-arrow-right"></i>
                    </div>
                </div>
            </div>	
                    <div class="col-sm-12 col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img src="assets/img/blogs/nursery2.jpg" alt="..." />
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li>
                                <span class="icofont-user"></span>
                                Gaassis Ahmed
                            </li>
                            <li>
                                <span class="icofont-user"></span>
                                12-2010
                            </li>
                            <li>
                                <span class="icofont-comment"></span>
                                23
                            </li>
                        </ul>
                        <h3 class="blog-title"> Program natinal testing</h3>
                        <p class="blog-p"> Setup your platform or integrate our payment solution?
                            Choose one of our MANGOPAY
                        </p>
                    </div>
                    <div class="blog-footer"  >
                        <a href="#"> Read Article </a><i  class="icofont-long-arrow-right"></i>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</div>

<div id="feature">
    <div  class="container s-pricing mt-5" id="pricing">
        <h1 class="mainTitle"> شركات السياحه الرائده </h1>
        <div class="row">
            <div class="col-sm-6 col-md-4 text-center col-pricing">
                <div class="p-4 content-pricing">
                    <span class="d-inline-block icofont-car"></span>
                    <h5> basique Table </h5>										
                    <ul class="list-pricing">
                        <li><span> Lifetime  Usage </span></li>
                        <li><span>  More then 21 template bootstrap</span></li>
                        <li><span>  3 monthes memberships </span></li>
                        <li><span> Lifetime  Usage </span></li>
                        <li><span>  More then 21 template bootstrap</span></li>
                        <li><span>  3 monthes memberships </span></li>
                    </ul>
                    <h1> 59 $</h1>										
                    <a href="#" class="btn"> purchase Now </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 text-center col-pricing">
                <div class="p-4 center-content-pricing">
                    <span class="d-inline-block icofont-airplane-alt"></span>
                    <h5> Entreprise plan </h5>	
                    <ul class="center-list-pricing">
                        <li><span> Lifetime  Usage </span></li>
                        <li><span>  More then 21 template bootstrap</span></li>
                        <li><span>  3 monthes memberships </span></li>
                        <li><span> Lifetime  Usage </span></li>
                        <li><span>  More then 21 template bootstrap</span></li>
                        <li><span>  3 monthes memberships </span></li>
                    </ul>
                    <h1> 59 $</h1>										
                    <a href="#" class="btn"> purchase Now </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 text-center col-pricing">
                <div class="p-4 content-pricing">
                    <span class="d-inline-block icofont-rocket"></span>
                    <h5> Developers </h5>	
                    <ul class="list-pricing">
                        <li><span> Lifetime  Usage </span></li>
                        <li><span>  More then 21 template bootstrap</span></li>
                        <li><span>  3 monthes memberships </span></li>
                        <li><span> Lifetime  Usage </span></li>
                        <li><span>  More then 21 template bootstrap</span></li>
                        <li><span>  3 monthes memberships </span></li>
                    </ul>
                    <h1> 59 $</h1>										
                    <a href="#" class="btn"> purchase Now </a>
                </div>
            </div>
    </div>
</div>
</div>

<!-- Featured Works  -->
<div id="gallery">
    <div class="container s-work">
        <h1 class="mainTitle"> Gallery   </h1>
        <div class="row">
            <div class="col-xs-3 col-sm-6 col-md-4">
                <div class="content-work">
                    <div><a href="assets/img/gallery/galery1.jpg" target="_blank" class="icofont-link">  </a></div>
                    <img alt="..." src="assets/img/gallery/galery1.jpg"/>
                </div>
            </div>
            <div class="col-xs-3 col-sm-6 col-md-4">
                <div class="content-work">
                    <div><a href="assets/img/gallery/galery3.jpg" target="_blank" class="icofont-link">  </a></div>
                    <img alt="..." src="assets/img/gallery/galery3.jpg" />
                </div>
            </div>
            <div class="col-xs-3 col-sm-6 col-md-4">
                <div class="content-work">
                    <div><a href="assets/img/gallery/galery2.jpg" target="_blank" class="icofont-link">  </a></div>
                    <img alt="..." src="assets/img/gallery/galery2.jpg" />
                </div>
            </div>
            <div class=" col-xs-3 col-sm-6 col-md-4">
                <div class="mt-4 content-work">
                    <div><a href="assets/img/gallery/galery4.jpg" target="_blank" class="icofont-link">  </a></div>
                    <img src="assets/img/gallery/galery4.jpg" alt="..."/>
                </div>
            </div>
            <div class=" col-xs-3 col-sm-6 col-md-4">
                <div class="mt-4 content-work">
                    <div><a href="assets/img/gallery/galery5.jpg" target="_blank" class="icofont-link">  </a></div>
                    <img src="assets/img/gallery/galery5.jpg" alt="..." />
                </div>
            </div>
            <div class=" col-xs-3 col-sm-6 col-md-4">
                <div class="mt-4 content-work">
                    <div><a href="assets/img/gallery/galery6.jpg" target="_blank" class="icofont-link">  </a></div>
                    <img src="assets/img/gallery/galery6.jpg" alt="..."  />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Teams -->
<!--Contact us-->
<div class="container-fluid" id="contact">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3 class=" mainTitle">Contact Us</h3>
                        </div>
                    </div>
                    <form class="contactForm">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name"> Your Name</label>
                                    <input class="form-control"  type="text" id="name">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name"> Last name</label>
                                    <input class="form-control"  type="text" id="last">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name"> Last name</label>
                                    <textarea class="form-control"  type="text" id="name"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 mt-3">
                                <div class="form-group">
                                    <input class="btn btn-getstarted form-control" type="submit" id="submit"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3 class=" mainTitle"> Office</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="d-flex mt-5" style="">
                                <div class="contactIcon pr-3"><span class="icofont-pin" style="font-size: 20px;color: white;background: #ff007a;padding: 10px;"></span></div>
                                <div class="contacttext"><p><strong> Address:</strong> 1234 - Bandit . New York</p></div>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="contactIcon pr-3"><span class="icofont-telephone" style="font-size: 20px;color: white;background: #ff007a;padding: 10px;"></span></div>
                                <div class="contacttext"><p>+213 550 78 02 48</p></div>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="contactIcon pr-3"><span class="icofont-fax" style="font-size: 20px;color: white;background: #ff007a;padding: 10px;"></span></div>
                                <div class="contacttext"><p>+215 550 78 12</p></div>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="contactIcon pr-3"><span class="icofont-envelope" style="font-size: 20px;color: white;background: #ff007a;padding: 10px"></span></div>
                                <div class="contacttext"><p>support@gmail.com</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- payments methods-->
<!--SVG Wave -->
<div>
    <div class="container-fluid svgWave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff007a" fill-opacity="1" d="M0,96L40,122.7C80,149,160,203,240,229.3C320,256,400,256,480,245.3C560,235,640,213,720,186.7C800,160,880,128,960,149.3C1040,171,1120,245,1200,250.7C1280,256,1360,192,1400,160L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
</div>
@endsection