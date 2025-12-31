<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Antrean Realtime</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-slate-50 text-slate-900 font-sans">

    <div class="min-h-screen flex flex-col items-center justify-center p-4">

        <div class="w-full max-w-md bg-white shadow-xl rounded-2xl overflow-hidden border border-slate-200">

            <div class="bg-indigo-600 p-6 text-center">
                <h1 class="text-white text-lg font-medium opacity-90">Antrean Sekarang</h1>
            </div>

            <div class="p-10 text-center">
                <div class="text-7xl font-black text-indigo-600 tracking-tight" id="currentQueue">
                    --
                </div>

            </div>

            <div class="bg-slate-50 p-4 border-t border-slate-100 flex items-center justify-center gap-2">
                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                <span class="text-xs text-slate-400 uppercase tracking-widest font-semibold">Update Otomatis</span>
            </div>
        </div>


    </div>

    <script>
         async function fetchCurrentQueue() {
        const response = await fetch('/queue/json');
        const data = await response.json();
        const currentQueue = data.current || null;
        console.log(currentQueue);
        document.getElementById('currentQueue').innerText = currentQueue ? currentQueue.queue_number : '-';
    }
    setInterval(fetchCurrentQueue, 2000);
    fetchCurrentQueue();
    </script>
</body>
</html>
