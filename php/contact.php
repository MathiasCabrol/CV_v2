<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <title>Contact</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>CONTACT</span>
                        </div>
                        <div class="app-contact">CONTACT : mathiascabrol@gmail.com</div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <form method="post" action="">
                                <div class="app-form-group">
                                    <input class="app-form-control" name="name" placeholder="NOM">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" name="email" placeholder="EMAIL">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" name="phone" placeholder="TELEPHONE">
                                </div>
                                <div class="app-form-group message">
                                    <textarea class="app-form-control" name="message" placeholder="MESSAGE"></textarea>
                                </div>
                                <div class="app-form-group buttons">
                                    <button class="app-form-button">RETOUR</button>
                                    <button class="app-form-button">ENVOYER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>