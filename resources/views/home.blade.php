@extends('template')
@section('main')
    <main>
        <div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="color: #0606A7; width: 100%; background-color: #D6DCD7; border-radius: 32px;">
                @foreach ($videos as $rw)
                    <div class="card" style="width: 18rem; padding: 10px; margin: 10px;">
                        <img src="/{{ $rw->video_image }}.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $rw->title_of_video }}</h5>
                            <p class="card-text">{{ $rw->user }}</p>
                            <p class="card-text" style="font-size: 11px;">{{ $rw->views . ' ' . $rw->created_at }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
