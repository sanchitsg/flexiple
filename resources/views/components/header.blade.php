<nav class="navbar navbar-expand-lg">
    <input type="hidden" id="bg-color" value="{{ array_get($header_data,'background-color','') }}">
    <input type="hidden" id="bt-color" value="{{ array_get($header_data,'brand-name-color','') }}">
    <input type="hidden" id="ft-color" value="{{ array_get($header_data,'other-font-color','') }}">
    <a class="navbar-brand" href="/base-layout">
        @if(!empty($header_data['image']))
        <img src="{{ url(array_get($header_data,'image','')) }}"></img>
        @else
        <span class="icon icon-library"></span>
        @endif
        <span>{{  array_get($header_data,'brand_name','BRAND NAME') }}</span>
    </a>
    <div class="collapse navbar-collapse" id="header-menu">
        <ul class="navbar-nav mr-auto">
            @if(!empty($header_data['names']))
            @foreach($header_data['names'] as $names)
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);"> {{ $names }} </a>
            </li>
            @endforeach
            @else
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);">Menu 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);">Menu 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true">Menu 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true">Menu 4</a>
            </li>
            @endif
        </ul>
    </div>
    <a class="navbar-brand edit" data-edit-object="header" href="javascript:void(0);">
        <span class="icon-pencil"></span>
    </a>
</nav>