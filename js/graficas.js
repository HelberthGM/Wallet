// Grafica linear
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
            labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado','Domingo'],
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
            },
        }
    }
});
// Grafica Barras
const ctx1 = document.getElementById('myChart1').getContext('2d');
const myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        datasets: [{
            axis: 'y',
            label: 'Ingresos',
            data: [2000000, 1900000, 3000000, 4900000, 2200000, 3500000,2000000, 1900000, 3000000, 4500000, 2200000, 3500000],
            backgroundColor: [
                'rgba(182, 255, 0,0.8)',
                'rgba(54, 162, 235,0.8)',
                'rgba( 26, 188, 156,0.8)',
                'rgba(255, 99, 132,0.8)',
                'rgba(255, 206, 86,0.8)',
                'rgba(231, 76, 60,0.8)',
                'rgba(255, 159, 64,0.8)',
                'rgba(128, 139, 150 ,0.8)',
                'rgba( 46, 204, 113 ,0.8)',
                'rgba( 241, 196, 15,0.8)',
                'rgba(153, 102, 255,0.8)',
                'rgba( 243, 156, 18 ,0.8)',
            ],
            //borderColor: 'rgb(153, 102, 255)',
            borderWidth: 1
        },
    ]
    },
    options: {
        indexAxis: 'y',
        scales: {
            y: {
                beginAtZero: true
            },
            
        }
    }
});
