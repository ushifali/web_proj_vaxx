Chart.defaults.global.defaultFontColor = "#fff";

// for pie chart
var xValues = ["COVISHIELD", "COVAXIN", "SPUTNIK V", "NONE"];
var yValues = [552, 440, 93,56];
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


//for barchartics based on branch
var xValues = ["CSE", "ECE", "ME", "BT", "ISE","EEE"];
var yValues = [55, 49, 44, 24, 30,8];
var barColors = [
    "#7CC6FE",
    "#abfc7c",
    "#00aba9",
    "#2b5797",
    "#13474A",
    "#d9ed92"
];

new Chart("barchart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: { display: false },
        
        title: {
            display: true,
            text: "Vaccine taken Branch Wise"
        }
        
    }

  
});

//for horizontal barchartics based on branch
var xValues = ["CSE", "ECE", "ME", "BT", "ISE", "EEE"];
var yValues = [5, 49, 74, 24, 30, 8];
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
        legend: { display: false },
        title: {
            display: true,
            text: "Not Vaccinated"
        }
    }
});
