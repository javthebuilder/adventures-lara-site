@csrf

    {{-- <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
        value="{{ old('name') }}@isset($content){{ $content->name }}@endisset">
        @error('name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div> --}}


    <div class="mb-3">
        <label for="main_title_header" class="form-label">Main Title</label>
        <input name="main_title_header" type="text" class="form-control @error('main_title_header') is-invalid @enderror" id="main_title_header"
        value="{{ old('main_title_header') }}@isset($content){{ $content->main_title_header }}@endisset">
        @error('main_title_header')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>   


    <div class="mb-3">
        <label for="secondary_title_header" class="form-label">Secondary Header Title</label>
        <input name="secondary_title_header" type="text" class="form-control @error('secondary_title_header') is-invalid @enderror" id="secondary_title_header"
        value="{{ old('secondary_title_header') }}@isset($content){{ $content->secondary_title_header }}@endisset">
        @error('secondary_title_header')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>   

    <div class="mb-3">
        <label for="main_image" class="form-label">Main Image</label>
        <input name="main_image" type="file" class="form-control @error('main_image') is-invalid @enderror" id="main_image"
        value="{{ old('main_image') }}@isset($content){{ $content->main_image }}@endisset">
        @isset($content)
        
        @isset($content->main_image)

        <img  
        src="{{ asset('/uploads/'.$content->main_image) }}" 
        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" 
        >
        @endisset
        @endisset
        @error('main_image')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>   
    
    <div class="mb-3">
        <label for="content_body_text" class="form-label">Content Body Text</label>
        <textarea name="content_body_text" cols="4" class="form-control @error('content_body_text') is-invalid @enderror" id="content_body_text"
        >{{old('content_body_text')}}@isset($content){{ $content->content_body_text }}@endisset</textarea>
        {{--  --}}
        
        @error('content_body_text')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>   





    <button class="" type="submit">
       @isset($create)
            @if ($create)
                {{ 'Create' }}
            @else
                {{ 'Save' }}
            @endif

        @endisset
    </button>
    <br>
