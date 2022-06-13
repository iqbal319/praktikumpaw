<x-navbar>
    @slot('page', "home")
</x-navbar>

<x-app-layouts>

    @slot("title","Data Mahasiswa")
    
    @slot('content')
        @if(session("status"))
        <div class="flash">
            @if(session("status") == "success")
            <div class="success">
                <p>{{ session("pesan") }}</p>
            </div>
            @else
            <div class="error">
                <p>{{ session("pesan") }}</p>
            </div>
            @endif
            <br>
        </div>
        @endif
        <div class="show-data-mahasiswa">
            @foreach($mahasiswa as $mhs)
            <div class="card">
                <div class="left">
                    <h3>{{ $mhs->nama }}</h3>
                    <p>{{ $mhs->nrp }} </p>
                    <p>{{ $mhs->alamat }}</p>
                    <p>ipk {{ $mhs->ipk }}</p>
                    <span class="status">{{ $mhs->status }}</span>
                </div>
                <div class="right">
                    <div class="btn-group">
                        <form action="/{{ $mhs->nrp }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn-delete"><i class="fi fi-rr-trash"></i></button>
                        </form>
                        <a href="/{{ $mhs->nrp }}/edit" class="btn-edit"><i class="fi fi-rr-edit"></i></a>
                    </div>
                    <p>{{ $mhs->email }}</p>
                </div>
            </div>
            @endforeach
        </div>
    @endslot

</x-app-layouts>