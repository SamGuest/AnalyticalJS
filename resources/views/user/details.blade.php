@include("layouts.header")
@include('layouts.includes.bar')
<div class="hero-head">

    <div class="hero-content">
    
        <h1 class="logo">My Details</h1>
    
        <div class="spacer20"></div>

            <div class="container panel">

                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="spacer20"></div>

                            <div class="col-md-6">

                                {{ $username }}

                            </div>

                        <div class="spacer20"></div>  

                    </div>

                </div>

                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="spacer20"></div>

                            <div class="col-md-6">

                                {{ $email }}

                            </div>

                        <div class="spacer20"></div>  

                    </div>

                </div>
                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="spacer20"></div>

                            <div class="col-md-6">

                                <div class="CustomBtn">
                                    <a href="{{ route('user.index') }}" class="btn btn-gradient-purple">Users</a>
                                </div>

                            </div>

                        <div class="spacer20"></div>  

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@include("layouts.footer")