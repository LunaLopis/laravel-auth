@extends('layouts.admin')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-12">
           <h1 class=""> modifica progetto</h1>
           <div>
               <a href="{{Route('admin.posts.index')}}" class="btn btn-sm btn-primary">tutti i progetti</a>
           </div>
       </div>
        
       <div class="col-12">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          <form action="{{ route('admin.posts.update', $post->id)}}" method="POST">
            {{-- per provenienza richieste --}}
            @csrf
            {{-- metodo put/patch per update --}}
            @method('PUT')
            <div class="form-group mt-4">
               <label class="control-label">Titolo</label>
               <input type="text" name="title" id="title" placeholder="titolo"  class="form-control @error('title')is-invalid @enderror"  value="{{old('title') ?? $post->title}} ">
               @error('title')
               <div class="text-danger"> {{$message}}</div>
               @enderror
            </div>

            <div class="form-group mt-4">
                <label class="control-label">contenuto</label>
                <textarea type="text" name="content" id="content" placeholder="contenuto"></textarea>
             </div>
             <div class="form-group mt-4">
                <button type="submit" class="btn btn-success">Salva</button>
             </div>
        </form>
       </div>
       
       

   </div>
</div>
@endsection