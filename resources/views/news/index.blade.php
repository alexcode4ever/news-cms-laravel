<x-news>

    <div class="container my-4">

        <div class="row">
            <!-- News entries-->
            <div class="col-lg-12">

                <!-- Nested row for non-featured news posts-->
                <div class="row">
                        <!-- news post-->
                        @if (count($news))
                        @foreach ($news as $n)
                        <div class="col-lg-4">
                              <div class="card mb-4">
                            <a href="/news/{{ $n->id }}"><img class="card-img-top" src="{{ asset('storage/'.$n['photo']) }}" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">{{explode(" ",$n->created_at)[0]}}</div>
                                <h2 class="card-title h4">{{ $n->title }}</h2>
                                <a class="btn btn-primary" href="/news/{{ $n->id }}">Read →</a>
                            </div>
                        </div>
                        </div>
                        @endforeach
                        @else
                        <h1>No listings found.</h1>
                        @endif

                        <!-- Blog post-->
                </div>
                <!-- Pagination-->
               <div>
                {{ $news->links() }}
               </div>
            </div>

        </div>
    </div>
</x-news>
