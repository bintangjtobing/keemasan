@if ($notifications)
    @foreach ($notifications as $notification)
        <div class="alert alert_default">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p>
                <strong>{{ $nama_pendek }}</strong>
                <br>
                @if ($action === 'belanja')
                    <small>Baru saja belanja <strong>{{ $inv }}</strong> gram</small>
                @elseif ($action === 'bergabung')
                    <small>Baru saja bergabung</small>
                @endif
            </p>
        </div>
    @endforeach
@endif
