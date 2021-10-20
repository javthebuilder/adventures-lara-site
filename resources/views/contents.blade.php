@php
    use App\Models\User;
@endphp

@extends('layout.main')

@section('content')

@php
    //dd($contents);
@endphp

<div class="container">
    <main id="content" role="main" class="middle-align">
      <div class="row">
            <div id="our-services" class="services col-lg-8 col-md-8"> 

                  @foreach ($contents as $content)
                  <article id="post-50" class="inner-service post-50 post type-post status-publish format-standard has-post-thumbnail hentry category-blog-content">
                        <div class="post-main-box ">
                              <div class="row m-0">
                                    <div class="box-image col-lg-6 col-md-6">
                                          <img width="1080" height="1080" 
                                          src="{{ asset('uploads/'. $content->main_image) }}" 
                                          class="attachment-post-thumbnail size-post-thumbnail wp-post-image" 
                                          alt="" 
                                          loading="lazy"                                            
                                          sizes="(max-width: 1080px) 100vw, 1080px">              
                                    </div>
                                    <div class="new-text col-lg-6 col-md-6">
                                          <h2 class="section-title"><a href="/content/{{ $content->name }}">{{ $content->main_title_header }}<span class="screen-reader-text">{{ $content->main_title_header }}</span></a></h2>
                                          @auth
                                              
                                                      @php
                                                            $user = User::find($content->created_by);
                                                            
                                                      @endphp
                                                <div class="post-info">
                                                      <span class="entry-date"><i class="fas fa-calendar-alt"></i>
                                                      {{-- <a href="javascript:void(0);"> {{ $content->created_at }}<span class="screen-reader-text">September 23, 2021 {{ $user->name }}</span></a></span> --}}
                                    
                                                      <span class="entry-author"><span>|</span> <i class="far fa-user"></i>
                                                      
                                                      <a href="javascript:void(0);"> {{ $user->name }} <span class="screen-reader-text"></span></a></span>
                                    
                                                      <span class="entry-comments"><span>|</span> <i class="fas fa-comments"></i>0 Comment </span>
                                    
                                                      {{-- <span class="entry-time"><span>|</span> <i class="far fa-clock"></i>{{ date('HH:mm:ss tt', strtotime($content->created_by)); }}</span> --}}
                                                </div>
                                                @endauth
                                          <div class="entry-content">
                                                                        <p>{{ $content->secondary_title_header }} </p>
                                                                  </div>
                                                <div class="more-btn">
                                    <a href="/content/{{ $content->name }}">READ MORE<span class="screen-reader-text">READ MORE</span></a>
                                    </div>
                                          </div>
                              </div>
                        </div>
                  
                        </article>   
                      
                  @endforeach
                        
                  
                  
                  <div class="navigation">
                        <div class="clearfix"></div>
                  </div>
            </div>
          <div class="col-lg-4 col-md-4" id="sidebar">      
            <aside id="block-2" class="widget widget_block widget_search"><form role="search" method="get" action="http://157.245.202.252/" 
            class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
            <label for="wp-block-search__input-1" class="wp-block-search__label">Search</label>
            <div class="wp-block-search__inside-wrapper"><input type="search" id="wp-block-search__input-1" class="wp-block-search__input" name="s" value="" placeholder="" required=""><button type="submit" class="wp-block-search__button ">Search</button></div></form></aside><aside id="block-3" class="widget widget_block">
            <div class="wp-block-group">
                  <div class="wp-block-group__inner-container">
                        <h2>Recent Posts</h2>
                        <ul class="wp-block-latest-posts__list wp-block-latest-posts"><li><a href="http://157.245.202.252/2021/09/23/social-media-in-business/">Social Media in Business</a></li>
                        </ul>
                  </div>
            </div>
            </aside>
            </div>
      </div>

    </main>
  </div>


  

  @endsection