@php
    use App\Models\User;
@endphp

@extends('layout.main')

@section('content')

<div class="container">
    <main id="content" role="main" class="middle-align">
      <div class="row">
            <div id="our-services" class="services col-lg-12 col-md-12" style="margin-top: 25px"> 

                  
                  <article id="post-50" class="inner-service post-50 post type-post status-publish format-standard has-post-thumbnail hentry category-blog-content">
                        <div class="post-main-box ">
                              <center>
                                    <div class="row m-0">
                                          <div class="col-lg-12">
                                                <img width="1080" height="1080" 
                                                src="{{ asset('uploads/' . $content->main_image) }}" 
                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" 
                                                alt="" 
                                                loading="lazy"                                            
                                                sizes="(max-width: 1080px) 100vw, 1080px">              
                                          </div>
                                    </div>
                              </center>
                              
                              <div class="row m-0" style="padding-top: 25px;">                                    
                                    <div class="new-text col-lg-12 col-md-12">
                                          <h1 class="section-title">
                                                <a href="/content/" . {{ $content->name }}>{{ $content->main_title_header }}<span class="screen-reader-text">{{ $content->main_title_header }}</span></a></h2>
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
                                                @php
                                                echo     $content->content_body_text;
                                                @endphp
                                                                        {{-- <p>{{ $content->content_body_text }} </p> --}}


                                                                  </div>
                                                
                                          </div>
                              </div>
                        </div>
                  
                        </article>   
                      
                  
                        
                  
                
            </div>

      </div>

    </main>
  </div>


  @endsection