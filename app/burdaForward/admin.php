<?php include_once("config.php"); ?>
<?php include_once('scripts/refreshFeed.php'); ?>
<!DOCTYPE html>
<html lang="de">
<head>

    <?php include ('assets/head.php'); ?>
    <title>Admin – AdCheck annalect </title>

</head>

<body>

    <header class="admin-header">
        <div class="row-wrapper upperheader">
            <div class="row">
                <div class="columns small-24 medium-16">
                    <h2><i class="material-icons">settings_applications</i> Adcheck | Einstellungen</h2>
                </div>
            </div>
        </div>
        <div class="row-wrapper subheader">
            <div class="row">
                <div class="columns">
                    <a href="index.php">Zurück zur Seite <i class="material-icons">keyboard_return</i> </a>
                </div>
            </div>
        </div>
    </header>

    <div class="row-wrapper" id="adminpage">
        <div class="row">
            <main class="columns small-24 medium-16">
                <h4>Vorschau</h4>
                <hr />
                <iframe src="index.php?banner=1"></iframe>
            </main>
            <aside class="columns small-24 medium-8">
                <h4>Aktualisierung</h4>
                <hr />
                <form method="GET">
                    <input type="submit" value="RSS Feed Aktualisieren" class="button" name="refreshRSS" />
                    <p><small>Dieser Vorgang kann bis zu 60 Sekunden dauern. Bitte schließe in dieser Zeit diese Seite <strong>nicht</strong>.</small></p>
                </form>
                <hr/>
                <h4>Letzte Aktualisierung </h4>
                <code><?php echo (file_get_contents("data/last-build.json")); ?> Uhr</code>
                <hr/>
                <a href="index.php">Zurück zur Seite <i class="material-icons">keyboard_return</i> </a>
            </aside>
        </div>
    </div>

    <!-- ------ Footer ------ -->
    <?php include_once ('assets/footer.php'); ?>

</body>
</html>