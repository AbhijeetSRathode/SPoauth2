

            <header id="header" class="header-mobile-nav-only" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{ asset('sites/'.Config::get("inlinr.config.site").'/img/logo_mlm_valley.jpg')}}">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                
                                </div>
                                <div class="header-row">

                                    <div class="header-nav header-nav-top-line">
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <ul class="header-social-icons social-icons hidden-xs">
                                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-3 header-nav-main-sub-effect-1 collapse">
                                            <nav>
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <!--<li>
                                                        <a data-hash data-hash-offset="70" href="#home">Accueil</a>
                                                    </li>-->
                                                    <li>
                                                        <a data-hash data-hash-offset="70" href="/#constat">@lang('sites/mlm-valley/www/menu.constat')</a>
                                                    </li>
                                                    <li>
                                                        <a data-hash data-hash-offset="70" href="/#solution">@lang('sites/mlm-valley/www/menu.solution')</a>
                                                    </li>
                                                    <li>
                                                        <a data-hash data-hash-offset="70" href="/#fonctionnement">@lang('sites/mlm-valley/www/menu.howItWoks')</a>
                                                    </li>
                                                    <!-- <li>
                                                        <a data-hash data-hash-offset="70" href="/blog">@lang('sites/mlm-valley/www/menu.blog')</a>
                                                    </li> -->
                                                    <li>
                                                        <a data-hash data-hash-offset="70" href="/#contact">@lang('sites/mlm-valley/www/menu.contact')</a>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            {{ Config::get('languages')[App::getLocale()] }}
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            @foreach (Config::get('languages') as $lang => $language)
                                                                @if ($lang != App::getLocale())
                                                                    <li>
                                                                        {!! link_to_route('lang.switch', $language, $lang) !!}
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>

                                                    @if(! \Auth::check())

                                             
                                                    <li>
                                                        <a data-hash data-hash-offset="70" href="{{ URL::to('register') }}">{{Lang::get('auth/message.signin')}}</a>
                                                    </li>
                                                
                                                    <li ><!--class="dropdown dropdown-mega dropdown-mega-signin signin" id="headerAccount"-->
                                                        <a href="/login">
                                                            <i class="fa fa-sign-in"></i> {{Lang::get('auth/message.login.title')}}
                                                        </a>
                                            
                                                    </li>    
                                                    @else
                                                       <li class="dropdown dropdown-mega dropdown-mega-signin signin logged" id="headerAccount">
                                                           <a class="dropdown-toggle" href="page-login.html">
                                                               <i class="fa fa-user text-primary"></i>@lang('core.hello'), {{\Auth::getUser()->first_name }}
                                                           </a>
                                                           <ul class="dropdown-menu">
                                                               <li>
                                                                   <div class="dropdown-mega-content">
                                                                       <div class="row">
                                                                         <div class="col-md-12 text-center">
                                                                              <h4 class="text-primary"><strong>{{\Auth::getUser()->first_name}} {{\Auth::getUser()->last_name}}</strong></h4>
                                                                         </div>
                                                                       </div> 

                                                                       <div class="row">
                                                                           <div class="col-md-6">
                                                                               <div class="user-avatar">
                                                                                   <div class="img-thumbnail">
                                                                                        @if(\Auth::getUser()->pic)
                                                                                           <img src="{!! '/uploads/users/'.\Auth::getUser()->pic !!}" alt="img"
                                                                                                class="img-circle pull-left" height="60" width="60"/>
                                                                                       @else
                                                                                           <img src="{{ asset('sites/'.Config::get('inlinr.config.site').'/standard_avatar.jpg') }}" alt="img"
                                                                                                class="img-circle pull-left" height="60" width="60"/><!--http://api.adorable.io/avatars/35/{!! \Auth::getUser()->email !!}-->
                                                                                       @endif
                                                                                   </div>
                                                                                   
                                                                               </div>
                                                                           </div>
                                                                           <div class="col-md-6">
                                                                               <ul class="list-account-options">
                                                                                  <li>
                                                                                    <a href=""><i class="fa fa-sign-in"></i> @lang('auth/message.accessToAdmin')</a>
                                                                                  </li>
                                                                                   <li>
                                                                                       <a href=""><i class="fa fa-user"></i> @lang('auth/message.myAccount')</a>
                                                                                   </li>
                                                                                   <li>
                                                                                       <a href="/logout"><i class="fa fa-power-off"></i> {{ Lang::get('auth/message.logout.title')}}</a>
                                                                                   </li>
                                                                               </ul>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </li>
                                                           </ul>
                                                       </li> 
                                                    @endif   
                                                       

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
