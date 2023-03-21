<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://kit.fontawesome.com/972f63b1c4.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Mediatheque</title>
</head>
<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="assets/images/library.jpeg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <div class="brand-wrapper">
                            <img src="assets/images/mediathequelogo.png" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Inscrivez-vous</p>
                            <form action="#!">
                                <div class="form-group d-flex justify-content-between">
                                    <div>
                                        <label for="Nom" class="sr-only">Nom</label>
                                        <input type="text" name="Nom" id="Nom" class="form-control" placeholder="Nom">
                                    </div>
                                    <div>
                                        <label for="Prenom" class="sr-only">Prenom</label>
                                        <input type="text" name="Prenom" id="Prenom" class="form-control" placeholder="Prenom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Adresse" class="sr-only">Adresse</label>
                                    <input type="text" name="Adresse" id="Adresse" class="form-control" placeholder="Adresse">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div>
                                        <label for="telephone" class="sr-only">Telephone</label>
                                        <input type="tel" name="telephone" id="telephone" class="form-control" placeholder="Telephone">
                                    </div>
                                    <div>
                                        <label for="CIN" class="sr-only">CIN</label>
                                        <input type="text" name="CIN" id="CIN" class="form-control" placeholder="CIN">
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div>
                                        <label for="date" class="sr-only">Date de naissance</label>
                                        <input type="date" name="date" id="date" class="form-control">
                                    </div>
                                    <div>
                                        <label for="type" class="sr-only">Type</label>
                                        <select class="form-select" name="type" id="type">
                                            <option selected>Type</option>
                                            <option value="Etudiant">Etudiant</option>
                                            <option value="Fonctionnaire">Fonctionnaire</option>
                                            <option value="Employé">Employé</option>
                                            <option value="Femme au foyer">Femme au foyer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="surnom" class="sr-only">Surnom</label>
                                        <input type="text" name="surnom" id="surnom" class="form-control" placeholder="Surnom">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">Confirm Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="checkbox" id="conditions" name="conditions">
                                    <label for="scales" data-toggle="modal" data-target="#exampleModalCenter"><a href="#">Conditions d'utilisation</a></label>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Conditions d'utilisation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <b>1.</b> La plateforme est destinée uniquement aux adhérents de la médiathèque.<br>
                                                <b>2.</b> Les adhérents ne sont autorisés à emprunter que trois ouvrages à la fois.<br>
                                                <b>3.</b> Une réservation est obligatoire avant tout emprunt d'un ouvrage.<br>
                                                <b>4.</b> Les adhérents ne sont autorisés à réserver que des ouvrages disponibles dans la médiathèque et qui ne font pas l'objet d'une réservation en cours.<br>
                                                <b>5.</b> La durée d'emprunt ne doit pas dépasser 15 jours. Si un ouvrage n'est pas restitué dans les délais impartis, des pénalités seront facturées à l'adhérent concerné.<br>
                                                <b>6.</b> Les adhérents ne sont autorisés à effectuer des opérations sur la plateforme qu'après s'être authentifiés.<br>
                                                <b>7.</b> La plateforme ne doit être utilisée que dans un but légal et approprié, conformément à toutes les lois et règlements en vigueur.<br>
                                                <b>8.</b> Les adhérents sont entièrement responsables de toutes les informations qu'ils fournissent lors de leur inscription sur la plateforme, et doivent s'assurer qu'elles sont exactes et à jour.<br>
                                                <b>9.</b> Toutes les données collectées sur les adhérents seront traitées conformément aux lois et règlements en vigueur en matière de protection des données personnelles.<br>
                                                <b>10.</b> La bibliothécaire en charge des opérations de back-office est la seule autorisée à mettre à jour la liste des ouvrages et à enregistrer les opérations d'emprunt et de retour.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-2" type="button" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>