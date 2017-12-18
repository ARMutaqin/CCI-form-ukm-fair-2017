var chart = Highcharts.chart('chartDivisi', {

    title: {
        text: 'Diagram Pendaftar by Divisi'
    },

    xAxis: {
        categories: ['Data Research', 'Design', 'Games and Gadget', 'Network', 'Students Management', 'Web Development']
    },
    tooltip: {
    		    pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
    		},

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php echo "$totaldr, $totaldesign, $totalgg, $totalnetwork, $totalStudents, $totalWebdev,"; ?>],
        showInLegend: false
    }]

});