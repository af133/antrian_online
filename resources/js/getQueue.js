async function fetchQueue() {
    const res = await fetch('/queue/json');
    const data = await res.json();

    document.getElementById('current').innerText = data.current?.queue_number || '-';

    const tbody = document.querySelector('#queueTable tbody');
    if(!tbody) return;

    tbody.innerHTML = '';
    data.waiting.forEach((q, index) => {
        console.log(q.queue_number);
        const tr = document.createElement('tr');
        tr.className = 'text-center';

        tr.innerHTML = `
            <td class="py-2 px-4 border-b">${index + 1}</td>
            <td class="py-2 px-4 border-b">${q.queue_number}</td>
            <td class="py-2 px-4 border-b">
                <span class="px-2 py-1 rounded bg-yellow-200 text-yellow-800">${q.status}</span>
            </td>
        `;
        tbody.appendChild(tr);
    });
}
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
document.getElementById('nextBtn').addEventListener('click', async () => {
    await fetch('/queue/next', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Accept': 'application/json',
        },
    });
    fetchQueue();
});

document.getElementById('prevBtn').addEventListener('click', async () => {
    await fetch('/queue/prev', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Accept': 'application/json',
        },
    });
    fetchQueue();
});

document.getElementById('createBtn').addEventListener('click', async () => {
    await fetch('/queue/create', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Accept': 'application/json',
        },
    });
    fetchQueue();
});
setInterval(fetchQueue, 2000);

