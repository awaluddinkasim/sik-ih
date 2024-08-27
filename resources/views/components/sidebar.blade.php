<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="/"><img src="{{ asset('assets/images/logo-light.png') }}" height="24" alt=""></a>
        </div>

        <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
            @foreach (config('menu') as $menu)
                @if (isset($menu['submenu']))
                    <li class="sidebar-dropdown">
                        <a href="{{ isset($menu['route']) ? route($menu['route']) : 'javascript:void(0)' }}">
                            <i class="uil uil-{{ $menu['icon'] }} me-2"></i>
                            {{ $menu['label'] }}
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                @foreach ($menu['submenu'] as $submenu)
                                    <li>
                                        <a
                                            href="{{ isset($submenu['route']) ? route($submenu['route']) : 'javascript:void(0)' }}">
                                            {{ $submenu['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="">
                        <a href="{{ isset($menu['route']) ? route($menu['route']) : 'javascript:void(0)' }}">
                            <i class="uil uil-{{ $menu['icon'] }} me-2"></i>
                            {{ $menu['label'] }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
<!-- sidebar-wrapper  -->
