@extends('layout.main')

@section('content')

<div class="container">
    <main id="content" role="main" class="middle-align">
        <br>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="wp-block-columns alignwide">
        <div class="wp-block-column article-inner-box p-4 mb-lg-0 mb-4">
        <div class="wp-block-image"><figure class="aligncenter size-large">
            <img  style="width: 45%; height:45%"
            src="{{ asset('services/blogs.png') }}"             
            alt="" class="wp-image-6496"></figure></div>     
                
        <hr class="wp-block-separator alignwide has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color">
        
        
        
        <h3 class="has-text-align-center mb-2 has-text-color" style="color:#121212"><a href="{{ route('content-list') }}">Contents</a></h3>
        
        </div>
        
        
        
        <div class="wp-block-column article-inner-box p-4 mb-lg-0 mb-4">
        <div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img loading="lazy" src="https://157.245.202.252/wp-content/themes/sirat/inc/block-patterns/images/services2.png" alt="" class="wp-image-6498" width="50" height="50"></figure></div>
        
        
        
        <hr class="wp-block-separator alignwide has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color">
        
        
        
        <h3 class="has-text-align-center mb-2 has-text-color" style="color:#121212">Social Media Marketing</h3>
        
        
        
        <ul class="has-black-color has-text-color"><li>Content Publishing</li><li>Online Presence</li><li>Analyze Outcomes</li><li>Branding</li><li>ROI</li></ul>
        </div>
        
        
        
        <div class="wp-block-column article-inner-box p-4 mb-lg-0 mb-4">
        <div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img src="https://157.245.202.252/wp-content/themes/sirat/inc/block-patterns/images/services3.png" alt="" class="wp-image-6499"></figure></div>
        
        
        
        <hr class="wp-block-separator alignwide has-text-color has-background has-cyan-bluish-gray-background-color has-cyan-bluish-gray-color">
        
        
        
        <h3 class="has-text-align-center mb-2 has-text-color" style="color:#121212">Outcome</h3>
        
        
        
        <p></p>
        
        
        
        <ul class="has-black-color has-text-color"><li>Sales Boost</li><li>Customer Engagement</li></ul>
        </div>
        
        
        
        
        </div>
</main>
</div>
<br>
<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
@endsection
