
            Highcharts.chart('chartFakultas', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Diagram Pendaftar by Fakultas'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                        }
                    }
                },
                yAxis: {
                    min: 0,
                title: {
                    text: 'Jumlah Pendaftar'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    ['FTE', 119],
                    ['FIF', 127],
                    ['FRI', 129],
                    ['FIK', 54],
                    ['FEB', 78],
                    ['FKB', 89],
                    ['FIT', 135],
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        }
                    }
                }]
            });
        