@props(['queues'])
<div class="overflow-x-auto">
    <table class="min-w-full bg-white">
        <thead>
            <tr class="bg-slate-50 border-b border-slate-200">
                <th class="py-4 px-6 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider">No</th>
                <th class="py-4 px-6 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider">Nomor Antrean</th>
                <th class="py-4 px-6 text-center text-xs font-semibold text-slate-500 uppercase tracking-wider">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @forelse($queues as $queue)
            <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 text-sm text-slate-600">
                    {{ $loop->iteration }}
                </td>
                <td class="py-4 px-6 text-sm font-medium text-slate-900">
                    {{ $queue->queue_number }}
                </td>
                <td class="py-4 px-6 text-center">
                    @php
                        $statusClasses = [
                            'processing' => 'bg-emerald-100 text-emerald-700 border-emerald-200',
                            'done' => 'bg-slate-100 text-slate-600 border-slate-200',
                            'waiting' => 'bg-amber-100 text-amber-700 border-amber-200',
                        ][$queue->status] ?? 'bg-gray-100 text-gray-600 border-gray-200';
                    @endphp
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border {{ $statusClasses }}">
                        {{ ucfirst($queue->status) }}
                    </span>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="py-10 text-center text-slate-400 text-sm">
                    Belum ada data antrean hari ini.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
