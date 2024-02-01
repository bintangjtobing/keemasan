@if (isset($data) && !empty($data))
    @foreach ($data as $member)
        <div class="alert alert_default">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p>
                <strong>{{ $member['nama_pendek'] }}</strong>
                <br>
                @if ($member['action'] === 'belanja')
                    <small>Baru saja belanja <strong>{{ $member['inv'] }}</strong> gram</small>
                @else
                    <small>Baru saja bergabung</small>
                @endif
            </p>
        </div>
    @endforeach
@endif
