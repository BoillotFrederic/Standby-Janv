<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Standby-Janv</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="style">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jScript.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h1>Lorem ipsum dolor sit amet</h1>
          <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
          </p>
          <button type="button" class="btn btn-primary btn-lg btn-block">
            Lorem ipsum
          </button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" src="//www.youtube.com/embed/liTSRH4fix4"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div id="answer">
      <div class="container">
        <div class="row">
          <h2>Lorem ipsum dolor sit amet</h2>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 onclick="response(this);">Lorem ipsum dolor sit amet, consectetur adipiscing elit ?</h3>
            <p>
              Nullam eget posuere velit, finibus porttitor dolor. Pellentesque
              at turpis risus. Suspendisse sagittis lacinia molestie. Vestibulum
              imperdiet tortor in volutpat mattis. Vestibulum ut convallis
              dolor. In fringilla finibus velit ac tempor. Proin aliquam odio
              sodales magna hendrerit scelerisque.
            </p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 onclick="response(this);">Lorem ipsum dolor sit amet, consectetur adipiscing elit ?</h3>
            <p>
              Nullam eget posuere velit, finibus porttitor dolor. Pellentesque
              at turpis risus. Suspendisse sagittis lacinia molestie. Vestibulum
              imperdiet tortor in volutpat mattis. Vestibulum ut convallis
              dolor. In fringilla finibus velit ac tempor. Proin aliquam odio
              sodales magna hendrerit scelerisque.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="contact">
      <div class="container">
        <div class="row">
          <h2>Contact</h2>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <form>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label for="name">Nom</label>
                  <span id="nameErr"></span>
                  <input type="name" class="form-control" id="name" placeholder="Votre nom">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label for="lastname">Prénom</label>
                  <span id="lastnameErr"></span>
                  <input type="lastname" class="form-control" id="lastname" placeholder="Votre prénom">
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label for="email">Email address</label>
                  <span id="emailErr"></span>
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label for="subject">Sujet</label>
                  <span id="subjectErr"></span>
                  <input type="subject" class="form-control" id="subject" placeholder="Votre sujet">
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label for="subject">Message</label>
                  <span id="msgErr"></span>
                  <textarea id="msg" class="form-control" rows="5"></textarea>
                </div>
                <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <button onclick="testField(); return false;" type="submit" class="btn btn-default">Envoyer</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="copyright">
      <div class="container">
        <div class="row text-center">
          Tous droits réservés
        </div>
      </div>
    </div>
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            Votre message a bien été envoyé !
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
