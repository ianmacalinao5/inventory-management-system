export function renderStocksChart(el, labels, data) {
    if (!el) return;

    new Chart(el, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Stock Quantity",
                    data: data,
                    borderWidth: 1,
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
            },
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
}
