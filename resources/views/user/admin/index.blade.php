@include('layouts.header')
@include('layouts.includes.bar')
<div class="hero-head">

    <div class="hero-content">
    
        <h1 class="logo">{{ $title }}</h1>
    
        <div class="spacer20"></div>

            <div class="container panel">

                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="spacer20"></div>

                            <div class="col-md-6">

                                @if(count($users) > 0)
                                    @foreach ($users as $user)
                                        <span class=""><a href="/user/{{$user->id}}">{{$user->name}}</a></span><br>
                                        {{-- <span class="">{{$user->name}}</span> --}}
                                    @endforeach
                                @else 
                                    <span>No Users Found</span>
                                @endif

                            </div>

                        <div class="spacer20"></div>  

                    </div>

                </div>

                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="spacer20"></div>

                            <div class="col-md-6">

                                <div class="">
                                    <a href="{{ route('user.create')}}" class="btn btn-gradient-purple">Create User</a>
                                </div>

                            </div>

                        <div class="spacer20"></div>  

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@include('layouts.footer')