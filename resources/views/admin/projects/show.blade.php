@extends('layouts.app')
@section('content')
<div class="container">   
        <div class="">
            <div class="card-title"><h2 class="p-3 m-2">Images For {{ $images->name }}</h2></div>
                <div class="image ">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($images->images as $key => $image )
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img class="d-block" src="{{ asset('storage/image/' . $image->image_path)}}" alt="{{ $images->name }}" >
                                </div>
                            @endforeach
                        </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                {{-- <span class="sr-only">Previous</span> --}}
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            {{-- <span class="sr-only">Next</span> --}}
                            </a>
                        </div>
                </div>
            </div>
        </div>
</div>
@endsection
