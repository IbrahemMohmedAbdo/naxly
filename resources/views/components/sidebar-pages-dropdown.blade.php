@props(['id', 'title', 'headingId', 'links'])

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{{ $id }}" aria-expanded="true" aria-controls="{{ $id }}">
        <i class="fas fa-fw fa-folder"></i>
        <span>{{ $title }}</span>
    </a>
    <div id="{{ $id }}" class="collapse" aria-labelledby="{{ $headingId }}" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Index:</h6>
            @foreach($links as $link)
                <a class="collapse-item" href="{{ $link['url'] }}">{{ $link['text'] }}</a>
            @endforeach
        </div>
    </div>
</li>
