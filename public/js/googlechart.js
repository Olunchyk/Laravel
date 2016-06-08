/**
 * Created by olya on 28.05.16.
 */
// Load the Visualization API and the piechart package.
google.load('visualization', '1.0', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {

    var jsonData = $.ajax({
        url: "data.php",
        dataType: "json",
        async: false
    }).responseText;

    // Create the data table.
    var data = new google.visualization.DataTable(jsonData);


    // Set chart options
    var options = {
        'title': 'Численность рейсов',
        'width': 400,
        'height': 400,
    };

    // Instantiate and draw our chart, passing in some options.

    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}