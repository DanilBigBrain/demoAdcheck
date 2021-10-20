<?php /* Header template file @annalectAdcheck
--------------------------------------------- */ ?>
<div class="sticky-margin"></div>
<header class="sticky" id="mastHead">
    <div class="grid-wrapper" id="upperheader">
        <div class="grid-container">
            <div class="grid-x align-middle">
                <div class="cell auto">
                    <a href="index.php?<?php echo $query; ?>">
                        <img class="logo" src="assets/img/logo.svg" alt="Logo Illustrierte Online" width="140px">
                    </a>
                </div>
                <div class="cell shrink">
                    <?php if($login) { ?>
                        <span class="material-icons">account_circle</span> <span>Abonnement-Profil</span>
                    <?php } else { ?>
                        <button class="button secondary tiny">Abo Login+</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-wrapper" id="subheader">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell auto">
                    <span>Nachrichten aus Politik, Wirtschaft, Gesellschaft, Kultur und Sport.</span>
                </div>
                <div class="cell shrink">
                    <?php if($login) { ?>
                        <span>Herzlich Willkommen, lieber/liebe Abonnent/in.</span>
                    <?php } else { ?>
                        <span>Sie sind zurzeit nicht eingeloggt.</span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>