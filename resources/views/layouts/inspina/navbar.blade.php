


<center><span class="m-r-sm text-muted welcome-message">Welcome to <b>{{Auth::user()->client->name}}</b></span></center>
<div class="navbar-header">
    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    <form role="search" class="navbar-form-custom" action="{{route('member.search')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" placeholder="Search for something..." class="form-control" name="search" id="top-search" v-model="query">
            <button type="submit"  class="btn btn-info" id="top-search" v-if="query.length">Search</button>

        </div>
    </form>
</div>

<ul class="nav navbar-top-links navbar-right">

    <li>
            <ui-icon-button icon="business" type="flat" color="primary" @click="goToPage('{{route('member.companies')}}')"></ui-icon-button>
            {{-- <a href="{{route('member.companies')}}"><i class="fa fa-building-o fa-fw"></i> <span class="nav-label"></span></a> --}}
    </li>
    <li>
            <ui-icon-button icon="supervisor_account" type="flat" color="primary" @click="goToPage('{{route('member.contacts')}}')"></ui-icon-button>
            {{-- <a href="{{route('member.contacts')}}"><i class="fa fa-user fa-fw"></i> <span class="nav-label"></span></a> --}}
    </li>
    <li>
            <ui-icon-button icon="event" type="flat" color="primary" @click="goToPage('{{route('member.events')}}')"></ui-icon-button>
            {{-- <a href="{{route('member.events')}}"><i class="fa fa-calendar"></i> <span class="nav-label"></span></a> --}}
    </li>
    <li>
            <ui-icon-button icon="check" type="flat" color="primary" @click="goToPage('/tasks-list-nd')"></ui-icon-button>
            {{-- <a href="/tasks-list-nd"><i class="fa fa-check fa-fw"></i> <span class="nav-label"></span></a> --}}
    </li>
    @if(in_array(Auth::user()->email,  ['thibault@testflandrin.onmicrosoft.com', 'jleleu@flandrinsystems.com', 'testeur@flandrinsystems.com']))

    <li class="dropdown">
        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <i class="fa fa-gear"></i>
        </a>
        <ul class="dropdown-menu">
            <li> <a href="{{ route('member.settings_core') }}"> Client </a> </li>
            <li><a href="{!!URL::to('/user')!!}">Users</a></li>
            <li class="divider"></li>
            <li><a href="/paramtables">fixed variables</a></li>
            <li><a href="{{ route('member.settings_core') }}">Client</a></li>
            <li><a href="{{ route('member.settings.users') }}">Users</a></li>
            <li><a href="{{ route('member.settings.fixed_variables') }}">fixed variables</a></li>
            <li><a href="{{ route('member.settings_providers') }}">settings_providers</a></li>
            <li><a href="{{ route('member.bugs') }}">Report Bug</a></li>

        </ul>
    </li>
    @endif
    <!-- <li class="dropdown">
        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
        </a>
        <ul class="dropdown-menu dropdown-messages">
            <li>
                <div class="dropdown-messages-box">
                    <a href="profile.html" class="pull-left">
                        <img alt="image" class="img-circle" src="img/a7.jpg">
                    </a>
                    <div class="media-body">
                        <small class="pull-right">46h ago</small>
                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li>
                <div class="dropdown-messages-box">
                    <a href="profile.html" class="pull-left">
                        <img alt="image" class="img-circle" src="img/a4.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right text-navy">5h ago</small>
                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li>
                <div class="dropdown-messages-box">
                    <a href="profile.html" class="pull-left">
                        <img alt="image" class="img-circle" src="img/profile.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right">23h ago</small>
                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li>
                <div class="text-center link-block">
                    <a href="mailbox.html">
                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                    </a>
                </div>
            </li>
        </ul>
    </li>
   <li class="dropdown">
        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <li>
                <a href="mailbox.html">
                    <div>
                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                        <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="profile.html">
                    <div>
                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                        <span class="pull-right text-muted small">12 minutes ago</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="grid_options.html">
                    <div>
                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                        <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <div class="text-center link-block">
                    <a href="notifications.html">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </li>
        </ul>
    </li> -->


    <li>

        <ui-icon-button icon="power_settings_new" type="flat" color="default" @click="goToPage('/logout')"></ui-icon-button>
        {{-- <a href="{!!URL::to('/logout')!!}" title="logout">
            <i class="fa fa-power-off"></i>
        </a> --}}


    </li>
    <!--<li>
        <a class="right-sidebar-toggle">
            <i class="fa fa-tasks"></i>
        </a>
    </li>-->
</ul>
