var options = {
    chart: {
        height: 346,
        type: "line",
        zoom: {
            enabled: !1
        },
        toolbar: {
            show: !1
        }
    },
    dataLabels: {
        enabled: !1
    },
    stroke: {
        width: 3,
        curve: "smooth",
        dashArray: [0, 8]
    },
    series: [{
        name: "2019",
        data: [45, 52, 38, 24, 33, 56, 42, 20, 6, 18, 22, 10]
    }, {
        name: "2018",
        type: "area",
        data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
    }],
    colors: ["#3d8ef8", "#11c46e"],
    fill: {
        opacity: [1, .15]
    },
    markers: {
        size: 0,
        hover: {
            sizeOffset: 6
        }
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
    },
    grid: {
        borderColor: "#f1f1f1"
    }
};
