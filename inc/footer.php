<footer class="footer">
        <div class="content has-text-centered">
            <p>
                <a href="index.php" target="_blank">Ayoomall Status</a> - <a href="amblog.php" target="_blank">Ayoomall Blog Status</a> - <a href="ab.php" target="_blank">Ayooberita Status</a>
				<br/>
				Status page by <a href="https://www.linkedin.com/in/candrareza/" target="_blank">Gannes</a>.
            </p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("uptime");
        var config = new Chart(ctx,{
            type: 'pie',
            data: {
                datasets: [{
                    data: [<?= $data; ?>],
                    backgroundColor: [<?= $background_colour; ?>],
                    borderColor: [<?= $border_colour; ?>]
                }],
                labels: [<?= $labels; ?>],
            },
			options: {
				responsive: true,
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
        });
    </script>

</body>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9998151850329807",
          enable_page_level_ads: true
     });
</script>
</html>