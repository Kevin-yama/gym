@extends('layouts.master')
@section('content')
<div class="row">        
    @foreach( $arrayPeliculas as $key => $pelicula )  
      @if($pelicula['title'][0] == 'e' || $pelicula['title'][0] == 'E')         
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">            
          <a href="{{ url('/catalog/show/' . $key ) }}">               
              <img src="{{$pelicula['poster']}}" style="height:200px"/>               
              <h4 style="min-height:45px;margin:5px 0 10px 0">                   
                  {{$pelicula['title']}}               
              </h4>           
            </a>        
          </div>       
      @endif
    @endforeach 
</div>
@stop