@include("layouts.header")

<div class="bar-holder">

    <div class="bar fill1"></div>

    <div class="bar fill2"></div>

    <div class="bar fill3"></div>

    <div class="bar fill4"></div>

    <div class="bar fill1"></div>

    <div class="bar fill5"></div>

    <div class="bar fill6"></div>

    <div class="bar fill1"></div>

    <div class="bar fill2"></div>

    <div class="bar fill3"></div>

</div>

<div class="container panel">
    <div class="row">
        <div class="col-md-12">

            <div class="spacer20"></div>

            {{ Auth::user()->name }}
            {{ Auth::user()->email }}

            <div class="spacer20"></div>  

        </div>
    </div>
</div>
@include("layouts.footer")