<?php require './monitor/monitoring3.php'; ?>

<?php include "./inc/header.php"; ?>

    <div class="container">
        <div class="section">
            <div class="columns">
                <div class="column is-6">
                    <h3 class="subtitle">Details:</h3>
                        <div class="content">
                            <p>Monitoring started: <b><?= $monitor_started; ?></b></p>
                            <p>Current status: <b><?= $monitor_status; ?></b></p>
                            <p><b><?= $monitor_info; ?></b></p>
                            <p>
                                Contact support:
                                <span class="icon is-large">
                                    <a href="mailto:gannescan@bk.ru" class="has-text-success">
                                        <i class="fas fa-lg fa-envelope"></i>
                                    </a>
									&nbsp;
                                    <a href="https://www.linkedin.com/in/candrareza/" target="_blank" class="has-text-success">
                                        <i class="fab fa-lg fa-linkedin"></i>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </ul>
                </div>
                <div class="column is-6">
                    <h3 class="subtitle has-text-centered">Overall uptime: <?= $monitor_uptime; ?>%</h3>
                    <canvas id="uptime"></canvas>
                </div>
            </div>
        </div>
    </div>

    <?php include "./inc/footer.php"; ?>