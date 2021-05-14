<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charts Example</title>
    <style>
        .holder {width: 500px;height: 300px}
    </style>
</head>
<body>
<div class="holder">
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Cheese", "Meat", 'Bread'],
            datasets: [
                {
                    label: 'Meat',
                    data: [40,20,30],
                    backgroundColor: ['rgba(255,0,0, 0.5)'],
                    borderWidth: 0
                },
                {
                    label: 'Bread',
                    data: [10,20,10],
                    backgroundColor: 'transparent',
                    borderWidth: 5,
                    borderColor: '#000',
                    type: 'line'
                }
            ]
        }
    })
</script>
</body>
</html>
