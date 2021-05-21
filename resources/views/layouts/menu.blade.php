
<li class="nav-item">
    <a href="{{ route('qurans.index') }}"
       class="nav-link {{ Request::is('qurans*') ? 'active' : '' }}">
        <p>Qurans</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('shweSins.index') }}"
       class="nav-link {{ Request::is('shweSins*') ? 'active' : '' }}">
        <p>Shwe Sins</p>
    </a>
</li>


