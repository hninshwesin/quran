
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


<li class="nav-item">
    <a href="{{ route('htayLwinOos.index') }}"
       class="nav-link {{ Request::is('htayLwinOos*') ? 'active' : '' }}">
        <p>Htay Lwin Oos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('testings.index') }}"
       class="nav-link {{ Request::is('testings*') ? 'active' : '' }}">
        <p>Testings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tests.index') }}"
       class="nav-link {{ Request::is('tests*') ? 'active' : '' }}">
        <p>Tests</p>
    </a>
</li>


