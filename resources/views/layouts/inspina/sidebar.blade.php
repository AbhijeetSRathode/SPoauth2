

<li class="nav-header">
    <div class="dropdown profile-element">
    <span>
        @if(Auth::User()->client)
        <img alt="image" class="organisation_logo img-circle" src="{{asset('uploads/clients/' . Auth::user()->client->id . '.'.  Auth::user()->client->logo_extension)}}" style="height: 75px; width: 75px;"  />
        @endif
    </span>
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{!! session('username')!!}</strong>
            </span> <span class="text-muted text-xs block">{{Auth::user()->surname}} {{Auth::user()->name}} <b class="caret"></b></span> </span> </a>
            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                <li><a href="{!!URL::to('/users/'.\Auth::user()->id)!!}">Profile</a></li>
                <li class="divider"></li>
                <li><a href="{!!URL::to('/logout')!!}">Logout</a></li>
            </ul>
        </div>
        <div class="logo-element">
            @if(Auth::User()->client)
            <img alt="image" class="organisation_logo img-circle" src="{{asset('uploads/clients/' . Auth::user()->client->id . '.'.  Auth::user()->client->logo_extension)}}" style="height: 50px; width: 50px;"  />
            @endif
        </div>
    </li>
    {{-- <li>
        <a href="/Opportunity-Direct"><i class="fa fa-dashboard"></i> <span class="nav-label"># Dashboard</span></a>
    </li> --}}
        @if(Auth::user()->id == 2)
        <li><a href="{{route('dev')}}"><i class="fa fa-code"></i> dev</a></li>
        @endif
    <li>
        <a href="{{route('member.dashboard')}}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
    </li>

    <li>
       <a href="#"><i class="fa fa-folder fa-fw"></i> <span class="nav-label">Opportunity</span><span class="fa arrow"></span></a>
       <ul class="nav nav-second-level collapse">
           <li><a href="{!!URL::to('/Opportunity-Direct')!!}">Direct</a></li>
           <li><a href="{!!URL::to('/Opportunity-Funds')!!}">Funds</a></li>
           <!-- <li><a href="{!!URL::to('/Opportunity-Debt')!!}">Debt</a></li>
           <li><a href="{!!URL::to('/Opportunity-RealEstate')!!}">Real Estate</a></li> -->

       </ul>

   </li>


@if(true)
    @if(Request::root() == 'http://pe-manager.app' || Request::root() == 'https://dev.pemanager.eu' )
        <li><a href="/middle/#!/operations">  Liste des operations</a></li>
        <li><a href="/middle/#!/operation/1">  operation 1</a></li>

    @endif
@endif

    <!--
    <li>
        <a href="{{route('member.contacts')}}"><i class="fa fa-user fa-fw"></i> <span class="nav-label">Contacts</span></a>
    </li>
     <li>
        <a href="{{route('member.companies')}}"><i class="fa fa-building-o fa-fw"></i> <span class="nav-label">Companies</span></a>
    </li>
     <li>
        <a href="{{route('member.events')}}"><i class="fa fa-clock-o fa-fw"></i> <span class="nav-label">Meetings</span></a>
    </li>
    <li>
        <a href="/tasks-list-nd"><i class="fa fa-tasks fa-fw"></i> <span class="nav-label">Tasks</span></a>
    </li>
     <li>
        <a href="#"><i class="fa fa-folder fa-fw"></i> <span class="nav-label">Opportunity</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="{!!URL::to('/Opportunity-Direct')!!}">Direct</a></li>
            <li><a href="{!!URL::to('/Opportunity-Funds')!!}">Funds</a></li>
            <!--
            <li><a href="{{ route('member.opportunity.direct_crud')}}">Direct</a></li>
            <li><a href="{{ route('member.opportunity.funds_crud')}}">Funds</a></li>
            -->
            <!--
            <li><a href="{!!URL::to('/Opportunity-Debt')!!}">Debt</a></li>
            <li><a href="{!!URL::to('/Opportunity-RealEstate')!!}">Real Estate</a></li>

        </ul>

    <li>
        <a href="#"><i class="fa fa-wrench fa-fw"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="{!!URL::to('/user')!!}">Users</a></li>
            <li><a href="/paramtables">fixed variables</a></li>
            <li>------*------</li>
            <li><a href="{{ route('member.settings_core') }}">Client</a></li>
            <li><a href="{{ route('member.settings.users') }}">Users</a></li>
            <li><a href="{{ route('member.settings.fixed_variables') }}">fixed variables</a></li>
            <li><a href="{{ route('member.settings_providers') }}">settings_providers</a></li>
            <li><a href="{{ route('member.bugs') }}">Report Bug</a></li>

        </ul>
    </li>
-->
