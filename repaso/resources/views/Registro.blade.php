@extends('layuots.platilla')
@section('titulo','registro')
@section('content')
    <div class="container mr-5">

        @if(session()->has('confirmacion'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('confirmacion') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @foreach ( $errors->all() as $error )
            
      
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $error}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        @endforeach
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Formulario') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/guardarLibro"> 
                            @csrf
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ISBN</label>
                            <input type="number" class="form-control" name = "isbn" id="exampleInputEmail1"  value="{{ old('isbn') }}">
                            <div id="emailHelp" class="form-text">.</div>
                            <p class = "text-danger fst-italic"> {{ ($errors->first('isbn')) }}</p>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Titulo</label>
                            <input type="text" class="form-control" name = "titulo" value="{{ old('titulo') }}">
                            <p class = "text-danger fst-italic"> {{ ($errors->first('titulo')) }}</p>
                            </div>
                           
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Autor</label>
                                <input type="text" class="form-control" name= "autor" ivalue="{{ old('autor') }}" >
                                <div id="emailHelp" class="form-text">.</div>
                                <p class = "text-danger fst-italic"> {{ ($errors->first('autor')) }}</p>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Paginas</label>
                                    <input type="number" class="form-control" name= "paginas " value="{{ old('paginas') }}">
                                    <div id="emailHelp" class="form-text">.</div>
                                    <p class = "text-danger fst-italic"> {{ ($errors->first('paginas')) }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Editor</label>
                                        <input type="txt" class="form-control" name= "editorial" value="{{ old('editorial') }}">
                                        <div id="emailHelp" class="form-text">.</div>
                                        <p class = "text-danger fst-italic"> {{ ($errors->first('editor')) }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email de editor</label>
                                            <input type="email" class="form-control" name= "email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                                            <div id="emailHelp" class="form-text">.</div>
                                            <p class = "text-danger fst-italic"> {{ ($errors->first('email')) }}</p>
                                            </div>
                                
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
