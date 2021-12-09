@if (isset($breadcrumbs))
<ul class="breadcrumbs pull-left">
    @foreach ($breadcrumbs as $breadcrumb)
        @if (isset($breadcrumb['url']))
            <li><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a></li>
        @else
            <li><span>{{ $breadcrumb['title'] }}</span></li>
        @endif
    @endforeach
</ul>
@endif
