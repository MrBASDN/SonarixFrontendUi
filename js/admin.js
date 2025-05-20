const ctx = document.getElementById('salesChart').getContext('2d');
let chart;

function updateChart() {
    const timeFilter = document.getElementById('timeFilter').value;
    let newData, labels;

    switch (timeFilter) {
        case 'all':
            newData = [1000, 1500, 2000, 1800, 2200, 2500];
            labels = ['Jan', 'Mar', 'May', 'Jul', 'Sep', 'Nov'];
            break;
        case 'year':
            newData = [1200, 1700, 1900, 2100, 2300, 2600];
            labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
            break;
        case 'month':
            newData = [500, 700, 1200, 900];
            labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
            break;
        case 'week':
            newData = [100, 200, 300, 400, 500, 600, 700];
            labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
            break;
        case 'day':
            newData = [50, 70, 90, 110, 130, 150];
            labels = ['8AM', '10AM', '12PM', '2PM', '4PM', '6PM'];
            break;

    }

    if (chart) {
        chart.destroy();
    }

    chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: '',
                data: newData,
                borderColor: 'teal',
                backgroundColor: 'rgba(0, 128, 128, 0.2)',
                borderWidth: 2,
                tension: 0.4,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: false // Disables the title
                },
                legend: {
                    display: false // Disables the legend (dataset box)
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Time Period'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Sales ($)'
                    },
                    beginAtZero: true
                }
            }
        }
    });
}

window.onload = function () { updateChart(); };

function toggleLogoutModal(show) {
  const modal = document.getElementById('logoutModal');
  modal.style.display = show ? 'flex' : 'none';
}

function confirmLogout() {
  toggleLogoutModal(false);
  // Replace with actual logout logic
  alert('Logged out.');
}
