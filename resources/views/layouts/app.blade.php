<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://codelapan.com/post/how-to-use-sweet-alert-in-laravel-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    @yield('script')
    <title>Document</title>
</head>
<body>
    @include('components.header')
    <div id="app">

        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>

                            <li>
                                <a id="navbarDropdown" class="nav-link"href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div> 
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
         --}}
        
        <main class="py-4">
            @include('sweetalert::alert')
            @yield('content')

        </main>
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('js')
    <script>
        $( document ).ready(function() {
            var number = $('#number').find('input').val();  
            $('#number').text(number);
            // console.log(number-1);
            $('.mark-as-read').click(function() {
                    var id = $(this).data('id');

                    $(this).parents('div.rem').remove();
                    
                    $(this).each(function(index){
                        var new_num = number--;
                        $('#number').text(new_num);           
                    });
                $.ajax({
                url: "{{ route('markNotification') }}?id="+id,
                context: {}
                }).done(function() {
                    alert('"sdfsdfsdf');
                });
            });
            $('#mark-all').click(function() {
                    $('div.cont').remove();
                    $('#mark-all').remove();
                    var number = $('#number').data('num');  
                    $('#number').text("0");    
                    $.ajax({
                    url: "{{ route('markNotification') }}",
                    context: {}
                    }).done(function() {
                        // alert('"sdfsdfsdf');
                    });
                });
                      
        });
         
       
        //   function sendMarkRequest(id = null) {
        //         return $.ajax("{{ route('markNotification') }}", {
        //             method: 'POST',
        //             data: {
        //                 _token,
        //                 id
        //             }
        //         });
        //     }
        //     $(function() {
        //         $('.mark-as-read').click(function() {
        //             let request = sendMarkRequest($(this).data('id'));
        
        //             request.done(() => {
        //                 $(this).parents('div.alert').remove();
        //             });
        //         });
        //         $('#mark-all').click(function() {
        //             let request = sendMarkRequest();
        //             request.done(() => {
        //                 $('div.alert').remove();
        //             })
        //         });
        //     });
           
        </script> 
</body>
</html>