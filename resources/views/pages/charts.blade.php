@extends('main')
@section('content')

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">
        ${demo.css}
    </style>
    <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                xAxis: {
                    categories: ['Mon', 'Tues', 'Wed', 'Thur', 'Fri', 'Saturc',
                        'Sun']
                },
                title: {
                    text: 'Statistics'
                },
                yAxis: {
                    title: {
                        text: 'Likes'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: 'Likes',
                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2]
                }, {
                    name: 'Dislikes',
                    data: [0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8]
                }]
            });
        });
    </script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</body>
</html>

@endsection