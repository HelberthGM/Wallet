const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado','Domingo'],
        datasets: [{
            label: 'Dinero gastado',
            data: [12, 19, 3, 5, 2, 3,30],
            backgroundColor: [
                'rgb(153, 102, 255)',
                'rgb(54, 162, 235)',
                'rgb(255, 99, 132)',
                'rgb(255, 206, 86)',
                'rgb(118, 247, 5)',
                'rgb(255, 159, 64)',
                'rgb(118, 247, 5)'
            ],
            borderColor: 'rgb(153, 102, 255)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});