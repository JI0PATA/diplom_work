var SESSIONS = ['Session 1', 'Session 2', 'Session 3', 'Session 4', 'Session 5', 'Session 6', 'Session 7', 'Session 8', 'Session 9'];
var barChartData = {
    labels: SESSIONS,
    datasets: [{
        label: 'Attendees',
        data: [
            2, 3, 4, 5, 6, 7, 5, 6, 7
        ],
        backgroundColor: ['red', 'blue', 'green', 'red', 'blue', 'green', 'red', 'blue', 'green', 'red', 'blue', 'green']
    }, {
        label: 'Capacity',
        backgroundColor: 'gray',
        data: [
            2, 3, 6, 7, 8, 9, 4, 5,
            {
                value: 8,
                fillColor: 'red'
            }
        ]
    }]

};

window.onload = function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            legend: {
                position: 'right',
            },
            title: {
                display: true,
                text: 'Capacity',
            },
            scales: {
                yAxes: [{
                    display: true,
                    ticks: {
                        min: 0,
                    }
                }]
            }
        },
    });

};