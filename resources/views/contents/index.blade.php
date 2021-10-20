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
                                <li class="breadcrumb-item">
                                    
                                    <a href="/">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    

                                    <a href="/home">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">contents</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <br>

    <!-- page main wrapper start -->

    <div class="container" style="display: block">
        <div class="row">
            <div class="col-12">
                <h4>contents</h4>
                <a class="float-right" style="color: green" href="{{ route ('content-create')}}" role="button"><i class="fa fa-save"></i> &nbsp; CREATE A POST</a>

            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contents as $content)
                        <tr>
                            <th scope="row">{{ $content->id }}</th>
                            <td>{{ $content->name }}</td>
                            
                            <td>
                                @php
                                    
                                @endphp
                                <a href="{{ route ('content-edit', $content->id)}}" role="button"><i class="fa fa-pencil"></i> &nbsp; EDIT</a>
                                &nbsp;
                                <button type="button" style="color: red"
                                onclick="event.preventDefault();
                                document.getElementById('delete-content-form-{{ $content->id }}').submit();"><i class="fa fa-trash"></i> &nbsp; REMOVE</button>
                                <form id="delete-content-form-{{ $content->id }}" action="{{ route('content-destroy', $content->id) }}" method="POST" style="display: none">
                                    @csrf
                                    @method("DELETE")
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
                </table>
                {{ $contents->links() }}
        </div>


    </div>

 


@endsection

