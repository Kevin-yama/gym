@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir película
         </div>
         <div class="card-body" style="padding:30px">
        <form class="form-horizontal" method="post" action=" ">
            {{ csrf_field() }}
            <div class="form-group">
               <label for="title">Título</label>
               <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">               
               <label for="title">año</label>
               <input type="text" name="año" id="año" class="form-control">
            </div>
            <div class="form-group">               
               <label for="title">director</label>
               <input type="text" name="director" id="director" class="form-control">
            </div>

            <div class="form-group">               
               <label for="title">poster</label>
               <input type="file" name="poster" id="poster" class="form-control">
            </div>

            <div class="form-group">
               <label for="synopsis">Resumen</label>
               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Añadir película
               </button>
            </div>

            {{-- TODO: Cerrar formulario --}}
            </form>

         </div>
      </div>
   </div>
</div>

@stop