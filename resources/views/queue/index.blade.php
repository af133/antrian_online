@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="max-w-3xl mx-auto">

        <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6 shadow-sm">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Nomor Antrean Saat Ini</p>
                    <h2 class="text-4xl font-extrabold text-gray-800 mt-1" id="current">0</h2>
                </div>

                <div class="flex items-center gap-3">
                    <button id="prevBtn" class="px-5 py-2 text-sm font-semibold text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 transition">
                        Sebelumnya
                    </button>
                    <button id="nextBtn" class="px-5 py-2 text-sm font-semibold text-white bg-slate-800 rounded-md hover:bg-slate-700 transition">
                        Panggil Berikutnya
                    </button>
                </div>
            </div>
        </div>

        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Daftar Antrean</h3>
            <button id="createBtn" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Tambah Antrean Baru
            </button>
        </div>

        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm" id="queueTable">
            <x-table :queues="[]" />
        </div>

    </div>
</div>
@endsection
