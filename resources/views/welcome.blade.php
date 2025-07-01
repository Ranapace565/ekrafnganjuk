@if (Auth::check())
    <p>Halo, {{ Auth::user()->name }} ({{ Auth::user()->role }})</p>
@endif
