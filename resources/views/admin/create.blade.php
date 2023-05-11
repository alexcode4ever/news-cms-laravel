

    <x-app-layout>
<main id="main" class="main">

<div class="pagetitle">
  <h1>{{ __('News > Create') }}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">{{ __('News > Create') }}</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body my-3">
        <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-5">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter title">
            @error('title')
            <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group col-5">
              <label for="author">Author</label>
              <input type="text" class="form-control" id="author" name="author" placeholder="Author">
              @error('author')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
                <div class="col-5">
                     <label for="keywords">Categories (comma seperated)</label>
                <input type="text" class="form-control" id="categories" name="categories" placeholder="Categories">
                @error('categories')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
                </div>

              </div>
              <div class="form-group col-5">
                <label for="email">Author Email</label>
                <input type="text" class="form-control" id="mail" name="mail" placeholder="Mail">
                @error('mail')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group col-5">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control form-control-lg tinymce-editor" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              @error('content')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
              <div class="form-group col-5">
                <label for="exampleFormControlFile1">Photo for the news</label>
                <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="ml-3"><button type="submit" class="btn btn-primary">Submit</button></div>
            @if (session('message'))
            <div class="form-text text-success">{{ session('message') }}</div>
            @endif
          </form>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
</x-app-layout>



