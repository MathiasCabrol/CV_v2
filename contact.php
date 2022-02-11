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
                            <form method="post" action="https://formspree.io/f/myyoeany">
                                <div class="app-form-group">
                                    <input class="app-form-control" id="nameInput" name="name" placeholder="NOM" required="required">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" id="emailInput" name="email" placeholder="EMAIL" required="required">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" id="phoneInput" name="phone" placeholder="TELEPHONE" required="required">
                                </div>
                                <div class="app-form-group message">
                                    <textarea class="app-form-control" id="messageInput" name="message" placeholder="MESSAGE" required="required"></textarea>
                                </div>
                                <div class="app-form-group buttons">
                                    <button id="undo" type="button" class="app-form-button">RETOUR</button>
                                    <button id="send" type="submit" class="app-form-button">ENVOYER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../assets/js/formControl.js"></script>
</html>