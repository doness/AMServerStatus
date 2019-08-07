<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $website_name; ?> Status page</title>
	<link rel="icon" href="https://ayoomall.com/public/images/logo/1552362012_store_logo_square.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
</head>
<body>

    <section class="hero is-success is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <a href="<?= $website_url; ?>" target="_blank">
                        <?= $website_name . ' - ' . $website_url; ?>
                    </a>
                </h1>
                <h2 class="subtitle">Website status</h2>
            </div>
        </div>
    </section>