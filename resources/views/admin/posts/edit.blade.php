@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.posts.update', ['post' => $post]) }}" method="post">
            @method('PUT')
            @csrf
            <form class="row g-3 needs-validation" novalidate>

                <div class="col-md-4">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old ('title', $post->title)}}">
                  @error('title')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old ('slug', $post->slug)}}">
                    @error('slug')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="image" class="form-label">URL immagine</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ old ('image', $post->image)}}">
                    @error('image')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Categoria</label>
                    <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        @error('category_id')
                            <ul>
                                @foreach ($errors->get('category_id') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="content" class="form-label">Contenuto</label>
                   <textarea class="form-control" id="content" name="content">{{ old ('content', $post->content)}}</textarea>
                   @error('content')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                   <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="excerpt" class="form-label">Riassunto</label>
                   <input type="text" class="form-control" id="excerpt" name="excerpt" value="{{ old ('excerpt', $post->excerpt)}}">
                   @error('excerpt')
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                   <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Modifica</button>
                </div>
              </form>
        </form>
    </div>
@endsection
