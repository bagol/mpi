
<script type="text/javascript">
	try {

    // single bar chart
    var ctx = document.getElementById("chartLaporan");
    if (ctx) {
      ctx.height = 200;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
          	<?php foreach ($perbulan as $bulan): ?>
          		'<?= bulan($bulan['tanggal']) ?>',
          	<?php endforeach ?>
          ],
          datasets: [
            {
              label: "Pengaduan Masuk Perbulan",
              data: [
              	<?php foreach ($perbulan as $jumlah): ?>
              		<?= $jumlah['jumlah'] ?>,
              	<?php endforeach ?>
              ],
              borderColor: "rgba(0, 123, 255, 0.9)",
              borderWidth: "0",
              backgroundColor: "rgba(0, 123, 255, 0.5)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins"

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
      });
    }

  } catch (error) {
    console.log(error);
  }
</script>

</body>
</html>