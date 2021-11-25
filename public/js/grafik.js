// <block:setup:1>
const labels = ["08:30","08:31","08:32","08:33","08:34","08:35",];
const data = {
    labels: labels,
    datasets: [
        {
            label: "FHR",
            backgroundColor: "rgb(255, 99, 132)",
            borderColor: "rgb(255, 99, 132)",
            data: [120, 121, 109, 112, 134, 128, 120]
        },
        {
            label: "TOCO",
            backgroundColor: "rgb(0,191,255)",
            borderColor: "rgb(0,191,255)",
            data: [98,82, 94, 82, 85, 91, 93]
        }
    ]
};
// </block:setup>

// <block:config:0>
const config = {
    type: "line",
    data: data,
    options: {}
};
// </block:config>

module.exports = {
    actions: [],
    config: config
};
