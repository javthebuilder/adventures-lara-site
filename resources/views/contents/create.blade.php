@extends('layout.main')

@section('content')

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="/contents_list">Contents</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<br>
<div class="container">

      <div class="login-reg-form-wrap sign-up-form">
        <h5>Create a Post</h5>
        <form method="POST" action="{{ route('content-save') }}" enctype="multipart/form-data">
            @include('contents.partials.form',[
                'create' => true
            ])
        </form>
    </div>
</div>
@endsection
