import Chart from 'chart.js/auto';
new Chart(document.getElementById('daily'),
    {
    type: 'bar',
    data: {
        labels: data.map(row => row.hour),
        datasets: [
        {
            label: 'Sessions',
            data: data.map(row => row.sessions)
        },
        {
            label: 'Pages',
            data: data2.map(row => row.pages)
        }
        ]
    }
});