const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado','Domingo'],
        datasets: [{
            label: 'Esta semana',
            data: [120000, 190000, 300000, 500000, 220000, 350000,200000],
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
        },
        {
            label: 'Semana pasada',
            data: [300000, 120000, 100000, 50000, 520000, 750000,700000],
            backgroundColor:  [
                'rgb(54, 162, 235)',
                'rgb(203, 25, 10)',
                'rgb(255, 99, 132)',
                'rgb(255, 206, 86)',
                'rgb(118, 247, 5)',
                'rgb(255, 159, 64)',
                'rgb(118, 247, 5)',
                
            ],
            borderColor:'rgb(203, 25, 10)',
          }
      
    ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
