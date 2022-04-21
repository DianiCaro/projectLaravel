@extends('layouts.admin')
@section('title','Crear categoria')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{route('categories.index')}}">Categorias</a>
    </li>
    <li class="breadcrumb-item active"> @yield('title')</li>
@endsection
@section('content')
       <div class="card">
           <div class="card-header">
               <h3 class="card-title">Registro de categoria</h3>
               <div class="card-tools">

               </div>
           </div>
       </div>
@endsection
