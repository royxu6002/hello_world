@foreach(['danger', 'warnning', 'info', 'success'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg  }}">
                {{ session()->get($msg) }}
            </p>    
        </div>
    @endif
@endforeach