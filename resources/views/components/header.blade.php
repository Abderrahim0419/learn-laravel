<header>
    <a class="navbar-brand" href="{{ url('/') }}">
        <h1>{{ config('app.name', 'Laravel') }}</h1>
    </a>
   
    <div class="icons">
        @guest
            @if (Route::has('login'))
                
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
              
            @endif
            @if (Route::has('register'))
                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
        <a href="{{route('posts')}}">Posts</a>
        <a href="{{route('car')}}">Car</a>  
            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <a id="navbarDropdown" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <div class="notification">
                <a href="#">
                    <div class="notBtn" href="#">
                        <!--Number supports double digets and automaticly hides itself when there is nothing between divs -->
                        <div class="number" id="number" ><input type="hidden" value="{{notification()->count()}}"></div>
                        <i class="fas fa-bell"></i>
                        <div class="box">
                            <div class="display">
                                <div class="nothing">
                                    <i class="fas fa-child stick"></i>
                                    <div class="cent">Looks Like your all caught up!</div>
                                </div>
                                <div class="cont">
                                    <!-- Fold this div and try deleting evrything inbetween -->
                                    <a href="#" class="float-right" id="mark-all">
                                        Mark all as read
                                    </a>
                                    @forelse (notification() as $item)
                                    <div class="sec new rem">
                                        <div class="profCont">
                                            {{($item->data['email'] ?  'User'  : 'Car')}} {{ $item->data['name']}}
                                            {{($item->data['email'] ?  $item->data['email']  : '')}}
                                        </div>
                                        <div class="txt"> 
                                            <a href="#" class="mark-as-read" data-id="{{$item->id }}">
                                                Mark as read
                                            </a>
                                        </div>
                                        <div class="txt sub">{{ $item->created_at->diffForHumans() }}</div>
                                    </div>
                                    @empty
                                        <p>There are no new notifications</p>
                                    @endforelse
                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
               
        @endguest
       
    </div>
</header>
