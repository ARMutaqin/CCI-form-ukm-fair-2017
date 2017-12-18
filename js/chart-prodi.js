// Make monochrome colors and set them as default for all pies
Highcharts.getOptions().plotOptions.pie.colors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[0],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
    }
    return colors;
}());

// Build the chart
Highcharts.chart('chartProdi', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Diagram Pendaftar by Prodi'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Pendaftar',
        data: [
            { name: 'S1 Teknik Informatika', y: 56.33 },
            { name: 'S1 MBTI', y: 24.03 },
            { name: 'S1 Teknik Elektro', y: 10.38 },
            { name: 'S1 Sistem Informasi', y: 4.77 },
            { name: 'S1 Administrasi Bisnis', y: 0.91 },
            { name: 'S1 Desain Produk', y: 0.2 }
        ]
    }]
});