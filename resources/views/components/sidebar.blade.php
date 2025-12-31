<header class="lg:hidden bg-white border-b px-4 py-3 flex items-center justify-between sticky top-0 z-50">
    <div class="flex items-center gap-2">
        <div class="w-8 h-8 bg-indigo-600 rounded flex items-center justify-center">
            <span class="text-white font-bold text-sm">A</span>
        </div>
        <span class="font-bold text-slate-800 tracking-tight">Admin Panel</span>
    </div>

    <button id="hamburger" class="p-2 rounded-md hover:bg-slate-100 focus:outline-none transition">
        <svg id="nav-icon" class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path id="line1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"></path>
            <path id="line2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
            <path id="line3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"></path>
        </svg>
    </button>
</header>

<div id="sidebar-overlay" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-40 hidden lg:hidden transition-opacity"></div>

<aside id="sidebar" class="fixed inset-y-0 left-0 w-72 bg-white border-r border-slate-200 z-50 transform -translate-x-full lg:translate-x-0 lg:static lg:inset-0 transition-transform duration-300 ease-in-out">
    <div class="h-full flex flex-col">
        <div class="hidden lg:flex p-6 border-b items-center gap-3">
            <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center shadow-lg shadow-indigo-200">
                <span class="text-white font-bold text-xl">A</span>
            </div>
            <h1 class="text-xl font-bold text-slate-800 tracking-tight">Admin Panel</h1>
        </div>

        <nav class="flex-1 p-4 space-y-1 overflow-y-auto mt-4 lg:mt-0">
            <p class="px-4 text-[10px] font-semibold text-slate-400 uppercase tracking-widest mb-2">Main Menu</p>

            <a href="{{ route('queue.index') }}"
                class="flex items-center px-4 py-3 rounded-xl text-sm font-medium transition-all duration-200
                {{ request()->routeIs('queue.*')
                    ? 'bg-indigo-50 text-indigo-700 shadow-sm shadow-indigo-100'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('queue.*') ? 'text-indigo-600' : 'text-slate-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Kelola Antrean
            </a>
        </nav>

        <div class="p-4 border-t border-slate-100">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full flex items-center px-4 py-3 rounded-xl text-sm font-medium text-rose-600 hover:bg-rose-50 hover:text-rose-700 transition-all">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</aside>
