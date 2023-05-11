<x-news>

    <div class="container my-4">
    <div class="col-lg-6">
                              <div class="card mb-4">
                
                            <div class="card-body">
<p>{{$news->title}}</p>
<p>{{$news->author}}</p>
<p>{{$news->categories}}</p>
<p>{!!$news->content!!}</p>
<img class="card-img-top" src="{{ asset('storage/'.$news->photo) }}" alt="..." />


                            </div>
                        </div>
    </div>
</x-news>
