@extends('layouts.admin')
@section('content')
<div class="container ">
      <div class="row mt-5">
          <div class="col-12 ">
            <div class="container">
                <div class="row ">
                    <div class="col-5 mb-5">
                        <h2 class="title-show">{{$type->name}}</h2>
                    </div>
                </div>
                <div class="row d-flex flex-column">
                    <div class="col-2">
                        <h5><span class="fw-bold">Slug: </span> {{$type->slug}}</h5>
                    </div>
                    <div class="col-6">
                        <p><span class="fw-bold">Descrizione: </span>  {{$type->description}}</p>
                    </div> 
                </div>
            </div>
          </div>
      </div>
</div>
@endsection