<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="/dashboard" class="simple-text logo-small">
         <div class="logo-image-big">
             Jungle-Dashboard
          {{-- <img src="/assets/images/favico.ico" height="90" width="100" class="col-md-6 offset-md-3"> --}}
        </div>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class=" {{ request()->is('dashboard') ? 'active' : '' }} ">
                <a href="/dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="{{ request()->is('*companies*') ? 'active' : '' }}">
                <a href="{{ route('companies.index') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Companies</p>
                </a>
            </li>
            <li class="{{ request()->is('*places*') ? 'active' : '' }}">
                <a href="{{ route('places.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Places</p>
                </a>
            </li>
            <li class="{{ request()->is('*settings*') ? 'active' : '' }}">
                <a href="{{ route('settings.index') }}">
                    <i class="nc-icon nc-edit-02"></i>
                    <p>Setting</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
    .sidebar[data-active-color="danger"] .nav li.active>a,
    .sidebar[data-active-color="danger"] .nav li.active>a i,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a i,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a {
        color: #51cbce;
        opacity: 1;
    }

</style>
