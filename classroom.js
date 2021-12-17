
Chart.defaults.global.defaultFontColor = "#fff";

// for pie chart
var xValues = ["COVISHIELD", "COVAXIN", "SPUTNIK V", "NONE"];
var yValues = [2, 4, 1, 3];
var barColors = [
    "#abfc7c",
    "#00aba9",
    "#2b5797",
    "#13474A",
];

new Chart("piechart", {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        title: {
            display: true,
            text: "Types of Vaccine taken by Students"
        }
    }


});




//for horizontal barchartics based on branch
var xValues = ["CSE", "ECE", "ME", "BT", "ISE", "EEE"];
var yValues = [2, 4, 1, 3, 7, 9];
var barColors = [
    "#7CC6FE",
    "#abfc7c",
    "#00aba9",
    "#2b5797",
    "#13474A",
    "#d9ed92"
];

new Chart("horizontalbarchart", {
    type: "horizontalBar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Not Vaccinated"
        }
    }
});




