<ul class="breadcrumb"type="circle">
    @foreach ($breadcrumbs as $breadcrumb)
        @if (!is_null($breadcrumb->url) && !$loop->last)
            <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            <li class="separator"><strong> → </strong></li>
        @else
            <li class="active">{{ $breadcrumb->title }}</li>

        @endif
    @endforeach
</ul>

@push('css')
<style>
    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
    }
    .separator {
        /*display: inline-block;*/
        margin: 0 5px;
    }
    @media (max-width: 460px) {
        /*.breadcrumb {*/
        /*    flex-direction: column;*/
        /*}*/
    }
</style>
@endpush
