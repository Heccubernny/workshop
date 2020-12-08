@include('./.authentication.layout.header')


<body>
    <div id="wrapper" class="wrapper">        
        <div class="fxt-template-animation fxt-template-layout5">
            <div class="fxt-bg-img fxt-none-767" data-bg-image="assets/auth/img/figure/bg5-l.jpg">
                <div class="fxt-intro">
                    <div class="sub-title">Welcome To</div>
                    
                        <h1><a href="{{ url('index', []) }}" class="switcher-text switcher-text1 text-white">{{$site_name}}</a></h1>

                    <p>{{ $site_description }}.</p>
                </div>
            </div>
            <div class="fxt-bg-color">
                <div class="fxt-header">
                    <a href="{{ url('login') }}" class="fxt-logo"><img src="assets/auth/img/logo-5.png" alt="Logo"></a>
                    <div class="fxt-page-switcher">
                        <a href="{{ url('login') }}" class="switcher-text switcher-text1 active">LogIn</a>
                        <a href="{{ url('register') }}" class="switcher-text switcher-text2">Register</a>
                    </div>
                </div>
                <div class="fxt-form">
                    <form method="POST">
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-1">                                                
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-2">                                                
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            <i class="flaticon-padlock"></i>
                            <a href="{{ url('forgot') }}" class="switcher-text3">Forgot Password</a>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-3">
                            <div class="fxt-content-between">
                                <button type="submit" class="fxt-btn-fill">Log in</button>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Keep me logged in</label>
                                </div>
                            </div>
                        </div>
                    </form>                            
                </div> 
                <div class="fxt-footer">
                    <ul class="fxt-socials">
                        <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="{{ url('') }}"
                                title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="{{ url('') }}" title="twitter"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="fxt-google fxt-transformY-50 fxt-transition-delay-7"><a href="{{ url('') }}" title="google"><i
                                    class="fab fa-google-plus-g"></i></a></li>
                        <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="{{ url('') }}"
                                title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-9"><a href="{{ url('') }}"
                                title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>  
        </div>
    </div>

    @include('./.authentication.layout.footer')

