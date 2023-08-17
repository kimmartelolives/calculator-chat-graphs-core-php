


  <canvas width="90" id="myChart" ></canvas>

<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: 'rgba(255, 0, 0, 0.3)',
            borderColor: [
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        },
        {
            label: '# of test',
            data: [26, 33, 7, 3, 7, 12],
            backgroundColor: 'rgba(0, 0, 255, 0.3)',
            borderColor: [
                'rgba(0, 0, 255, 1)',
            ],
            borderWidth: 1
        }]
    },   
});
</script>