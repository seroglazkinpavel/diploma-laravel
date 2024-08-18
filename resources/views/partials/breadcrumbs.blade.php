<ul class="breadcrumb"type="circle">
    @foreach ($breadcrumbs as $breadcrumb)
        @if (!is_null($breadcrumb->url) && !$loop->last)
            <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            <li class="separator"> > </li>
        @else
            <li class="active">{{ $breadcrumb->title }}</li>

        @endif
    @endforeach
</ul>

@push('css')
<style>
    .breadcrumb {
        display: flex;
    }
    .separator {
        /*display: inline-block;*/
        margin: 0 5px;
    }

</style>
@endpush
