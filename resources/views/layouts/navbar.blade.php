<div class="logo">
    <span><i class='bx bx-notepad'></i></span>
</div>
<nav>

    <ul>
        <li>
            <a href="{{ route('welcome') }}" @class([
                'activeLink' => request()->routeIs('welcome'),
            ])>Welcome</a>
        </li>
        <li>
            <a href={{ route('note.index') }} @class([
                'activeLink' => request()->routeIs('note.*'),
            ])>Notes</a>
        </li>
    </ul>
</nav>
