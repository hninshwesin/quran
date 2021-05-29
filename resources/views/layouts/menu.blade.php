<li class="nav-item">
    <a href="{{ route('shwes.index') }}" class="nav-link {{ Request::is('shwes*') ? 'active' : '' }}">
        <p>Shwes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('shweFootnotes.index') }}" class="nav-link {{ Request::is('shweFootnotes*') ? 'active' : '' }}">
        <p>Shwe Footnotes</p>
    </a>
</li>