<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Pet Service</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li {{(Request::is('/') ? 'class="active"' : '') }}><a href="{{url('/')}}">Home</a></li>
                <li {{ (Request::is('*pets') ? 'class="active"' : '') }}><a href="{{url('pets')}}">Pets</a></li>
                <li {{ (Request::is('*services') ? 'class="active"' : '') }}><a href="{{url('services')}}">Services</a></li>
            </ul>
        </div>
    </div>
</div>
