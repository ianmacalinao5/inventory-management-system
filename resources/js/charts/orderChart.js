export function renderOrdersChart(el, labels, data) {
    new Chart(el, {
        type: "line",
        data: {
            labels,
            datasets: [
                {
                    label: "Orders",
                    data,
                },
            ],
        },
    });
}
