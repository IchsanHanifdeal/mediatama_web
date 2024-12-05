<div class="drawer-side border-r z-20">
    <label for="aside-dashboard" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul
        class="bg-primary-content menu flex flex-col justify-between p-4 w-64 lg:w-72 min-h-full [&>li>a]:gap-4 [&>li]:my-1.5 [&>li]:text-[14.3px] [&>li]:font-medium [&>li]:text-opacity-80 [&>li]:text-base [&>_*_svg]:stroke-[1.5] [&>_*_svg]:size-[23px]">
        <div>
            <div class="pb-4 border-b border-gray-300">
                @include('components.brands', ['class' => 'btn btn-ghost text-2xl'])
            </div>
            <span class="label text-xs font-extrabold opacity-50">GENERAL</span>
            <li>
                <a href="{{ route('dashboard') }}" class="{!! Request::path() == 'dashboard' ? 'active' : '' !!} flex items-center px-2.5 font-semibold">
                    <x-lucide-bar-chart-2 />
                    Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('article') }}"
                    class="{!! Request::is('dashboard/article*') ? 'active' : '' !!} flex items-center px-2.5 font-semibold">
                    <x-lucide-newspaper />
                    Kelola Artikel
                </a>
            </li>
        </div>
        <div class="flex flex-col">
            <span class="label text-xs font-extrabold opacity-50">ADVANCE</span>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="px-0">
                    @csrf
                    <a class="flex items-center px-2.5 gap-2 font-semibold" href="#"
                        onclick="event.preventDefault(); confirmLogout();">
                        <x-lucide-log-out />
                        Logout
                    </a>
                </form>
            </li>
        </div>
    </ul>
</div>
