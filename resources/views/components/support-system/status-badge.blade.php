@switch($status)
    @case('Critically Low')
        <button type="button" class="btn btn-danger btn-sm">{{ $status }}</button>
        @break

    @case('Low')
        <button type="button" class="btn btn-warning btn-sm">{{ $status }}</button>
        @break

    @case('Medium')
        <button type="button" class="btn btn-info btn-sm">{{ $status }}</button>
        @break

    @case('High')
        <button type="button" class="btn btn-primary btn-sm">{{ $status }}</button>
        @break

    @case('Very High')
        <button type="button" class="btn btn-success btn-sm">{{ $status }}</button>
        @break

    @default
        <button type="button" class="btn btn-secondary btn-sm">{{ $status }}</button>
@endswitch
