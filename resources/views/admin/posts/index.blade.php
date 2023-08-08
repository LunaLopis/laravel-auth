@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <h1>post</h1>
        </div>
 
        <div class="col-12 mt-5">
             <table class="table table-stripped">
                 <tr>
                     <th>ID</th>
                     <th>titolo</th>
                     <th>slug</th>
                     <th>strumenti</th>
                 </tr>
 
             </table>
        </div>
         <tbody>
             @foreach($posts as $post)
                 <tr>
                     <td>{{$post->id}}</td>
                     <td>{{$post->title}}</td>
                     <td>{{$post->slug}}</td>
                     <td>
                         <form action="" class="d-inline-block" method="POST">
                             @csrf
                             @method('DELETE')
                             <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                         </form>
                         <form action="" class="d-inline-block" method="POST">
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="fas fa-eye"></i>
                            </a>
                        </form>
                         

                     </td>
                 </tr>
             @endforeach
         </tbody>
    </div>
</div>
@endsection



