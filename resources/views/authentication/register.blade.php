@include('./.authentication.layout.header')


<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="wrapper" class="wrapper">        
        <div class="fxt-template-animation fxt-template-layout5">
            <div class="fxt-bg-img fxt-none-767" data-bg-image="assets/auth/img/figure/bg5-l.jpg">
                <div class="fxt-intro">
                    <div class="sub-title">Welcome To</div>
                <h1><a href="{{ url('index', []) }}" class="switcher-text switcher-text1 text-white">Workshop</a></h1>
                   
                    <p>Grursus mal suada faci lisis Lorem ipsum dolarorit ametion consectetur elit. Vesti  ulum nec the dumm.</p>
                </div>
            </div>
            <div class="fxt-bg-color">
                <div class="fxt-header">
                    <a href="{{ url('login') }}" class="fxt-logo"><img src="assets/auth/img/logo-5.png" alt="Logo"></a>
                    <div class="fxt-page-switcher">
                        <a href="{{ url('login') }}" class="switcher-text switcher-text1">LogIn</a>
                        <a href="{{ url('register') }}" class="switcher-text switcher-text2 active">Register</a>
                    </div>
                </div>
                
                <div class="fxt-form">
                    @if(count($errors) > 0)
                        <div class='alert alert-danger'>
                            <ul>
                            @foreach ($errors->all as $error)
                                 <li>{{$error}}, Please Attend to it</li>
                                    
                            @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (\Session::has('success'))
                        <div class='alert alert-success'>
                            <p>{{ \Session::get('success') }}</p>
                        </div>
                    @else
                        
                    @endif
                        
                   
                <form method="post" {{-- action('RegisterController', ['id'=>1]) --}} action="{{url('login')}}">
                    {{ csrf_field() }}
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-1">                                                
                            <input type="text" class="form-control" name="name" placeholder="Full Name">
                            <i class="flaticon-user"></i>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-2">                                                
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-3">                                                
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <i class="flaticon-padlock"></i>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-4">
                            <div class="fxt-content-between">
                                <button type="submit" class="fxt-btn-fill">Register</button>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">I agree the terms of services</label>
                                </div>
                            </div>
                        </div>
                    </form>                            
                </div> 
                <div class="fxt-footer">
                        <ul class="fxt-socials">
                            <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6"><a href="{{ url('') }}"
                                    title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-7"><a href="{{ url('') }}" title="twitter"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="fxt-google fxt-transformY-50 fxt-transition-delay-8"><a href="{{ url('') }}" title="google"><i
                                        class="fab fa-google-plus-g"></i></a></li>
                            <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-9"><a href="{{ url('') }}"
                                    title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-9"><a href="{{ url('') }}"
                                        title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                </div>
            </div>   
        </div>
    </div>

    @include('./.authentication.layout.footer')
