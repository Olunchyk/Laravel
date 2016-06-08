@extends('main')
@section('content')
    <div class="bs-example" data-example-id="bordered-table">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Name video</th>
                <th>Likes</th>
                <th>Deslikes</th>
                <th>Deslikes added</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>PHP frameworks Overview</td>
                <td>452</td>
                <td>160</td>
                <td>16</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Create a simple 3D game in Unity</td>
                <td>0</td>
                <td>65</td>
                <td>85</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>HTML5 for Beginners | Lesson # 1 - Introduction to HTML</td>
                <td>18</td>
                <td>116</td>
                <td>11</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Web Programming from scratch: a programmer working place</td>
                <td>110</td>
                <td>19</td>
                <td>9</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Web Programming from scratch: a workplace program Learning CSS / CSS3 from zero to ISTA guru!e</td>
                <td>10</td>
                <td>9</td>
                <td>5</td>
            </tr>
            </tbody>
        </table>
    </div>
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
                    data: [452.0, 0, 18.0, 110.0, 10.0]
                }, {
                    name: 'Dislikes',
                    data: [160.0, 65.0, 116.0, 19.0, 9.0]
                }]
            });
        });
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
                            data: [452.0, 0, 18.0, 110.0, 10.0]
                        }, {
                            name: 'Dislikes',
                            data: [160.0, 65.0, 116.0, 19.0, 9.0]
                        }, {
                            name: 'Dislikes added',
                            data: [16.0, 85.0, 11.0, 9.0, 5.0]
                        }]
                    });
                });
    </script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
@endsection