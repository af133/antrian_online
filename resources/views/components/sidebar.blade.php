<aside class="w-64 bg-white shadow-md">
    <div class="p-6 border-b">
        <h1 class="text-xl font-bold text-gray-800">
            Admin Panel
        </h1>
    </div>

    <nav class="p-4 space-y-2">
        <a href="#"
            class="block px-4 py-2 rounded hover:bg-blue-100 text-gray-700">
            📊 Dashboard
        </a>

        <a href="#}"
            class="block px-4 py-2 rounded hover:bg-blue-100 text-gray-700">
            📋 Kelola Antrian
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="w-full text-left px-4 py-2 rounded hover:bg-red-100 text-red-600">
                🚪 Logout
            </button>
        </form>
    </nav>
</aside>
