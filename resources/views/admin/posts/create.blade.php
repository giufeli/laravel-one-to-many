@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="uploaded_img" class="form-label">Immagine</label>
                    <input type="file" class="form-control" id="uploaded_img" name="uploaded_img">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="content" class="form-label">Contenuto</label>
                   <input type="text" class="form-control" id="content" name="content">
                    <div class="valid-feedback">
                      Looks good!
                    </div>


                  </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Crea</button>
                </div>
              </form>
        </form>
    </div>
@endsection
