<x-app-layout>
<main id="main" class="main">
@if (session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    @endif
<div class="pagetitle">
  <h1>All news</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">News</li>
      <li class="breadcrumb-item active">Show all</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Records</h5>
          <p>Showing all news in the database below</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Categories</th>
                <th scope="col">Author</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @if (count($news))
                        @foreach ($news as $n)
                        <tr>
                <th scope="row">{{$n->id}}</th>
                <td><a href="/admin/{{ $n->id }}/edit">{{ $n->title }}</a></td>
                <td>{{$n->categories}}</td>
                <td>{{$n->author}}</td>
                <td>{{explode(" ",$n->created_at)[0]}}</td>
                <td> 
                <a class="btn btn-primary" href="{{route('admin.edit',$n->id)}}" role="button">Edit</a>
                <a class="btn btn-secondary" href="{{route('news.show', $n->id)}}" role="button" target="_blank">Preview</a>
                <form action="/admin/{{ $n->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>


                </td>
              </tr>
                        @endforeach
                        @else
                        <!-- <h1>No news found.</h1> -->
                        @endif


            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
</x-app-layout>
