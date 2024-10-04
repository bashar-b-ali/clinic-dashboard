<div class="container-fluid mt-3">
    <div class="bg-theme-1-subtle rounded px-3 py-3">
        <div class="row gx-3 align-items-center">
            <div class="col col-sm mb-2 mb-sm-0">
                <p class="h5">{{ $page_title }}</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi"><a href="{{ route('main') }}">Home</a></li>
                        @if ($parent_page)
                            <li class="breadcrumb-item bi"><a href="{{ $parent_link }}">{{ $parent_page }}</a></li>
                        @endif
                        <li class="breadcrumb-item active bi" aria-current="page">{{ $page_title }}</li>
                    </ol>
                </nav>
            </div>
            @if ($plus)
                <div class="col-auto py-1">
                    <a href="javascript:void(0)" class="btn btn-theme" {{ $plus }}>
                        <i data-feather="plus" class="me-0 me-md-1"></i> <span class="d-none d-md-inline-block">{{ $plus_title }}</span>
                    </a>
                </div>
                
            @endif
        </div>
    </div>
</div>

