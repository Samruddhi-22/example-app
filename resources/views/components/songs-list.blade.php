<section>
            <div>
                <div>Serial No</div>
                <div>Song Title</div>
                <div>Artist Name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            @foreach($songs as $song)
            <div>
                <div>{{$song-> id}}</div>
                <div>{{$song-> title}}</div>
                <div>{{$song-> artist}}</div>
                <div>Album 1 </div>
                <div>03:30</div>
            </div>
            @endforeach
        </section>