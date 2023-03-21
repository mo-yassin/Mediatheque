<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/accueil.css">
    <title>Mediatheque</title>
</head>
<body>
    <header class="p-2">
        <nav class="navbar">
            <div class="container">
                <img src="assets/images/mediathequelogo.png" class="navbar-brand" alt="logo" width="220" height="70">
                <a class="btn btn-danger btn-outline-light p-2"><b>Account</b></a>
            </div>
        </nav>
        <div class="container text-center p-4">
            <h1>Welcome to Mediatheque Paradise</h1>
            <p>Mediatheque Paradise met votre bibliothèque publique à portée de main.<br>À tout moment. Partout!</p>
        </div>
        <div>
            <form class="d-flex justify-content-around" action="">
                <input class="form-control ms-1 me-1 w-25" type="text" name="auteur" placeholder="Auteur">
                <input class="form-control ms-1 me-1 w-25" type="text" name="titre" placeholder="Titre">
                <select class="form-select ms-1 me-1 w-25" name="" id="">
                    <option selected>Etat d’ouvrages</option>
                    <option value="Neuf">Neuf</option>
                    <option value="Bon">Bon état</option>
                    <option value="Acceptable">Acceptable</option>
                    <option value="Assez">Assez usé</option>
                    <option value="Déchiré">Déchiré</option>
                </select>
            </form>
        </div>
    </header>
    <main>
        <section class="p-5 d-flex justify-content-around">
            <a class="rounded bg-danger p-3 text-reset text-decoration-none font-weight-bold" href=""><i class="fa-solid fa-book-bookmark"></i> Livres</a>
            <a class="rounded bg-danger p-3 text-reset text-decoration-none font-weight-bold" href=""><i class="fa-solid fa-book-atlas"></i> Revues</a>
            <a class="rounded bg-danger p-3 text-reset text-decoration-none font-weight-bold" href=""><i class="fa-solid fa-book-open"></i> Magazine</a>
            <a class="rounded bg-danger p-3 text-reset text-decoration-none font-weight-bold" href=""><i class="fa-solid fa-book"></i> Romans</a>
            <a class="rounded bg-danger p-3 text-reset text-decoration-none font-weight-bold" href=""><i class="fa-solid fa-compact-disc"></i> Livre Audio</a>
        </section>
        <section class="ms-5 me-3">
            <h3>Titre</h3>
            <div class="row">
                <div class="affiche col-md-2 mb-4 p-0">
                    <div class="">
                        <img class="rounded" src="https://covers.openlibrary.org/b/id/12501319-L.jpg" alt="Card image cap">
                    </div>
                    <a href="" class="btn btn-danger mt-2">Emprunt</a>
                </div>
                <div class="affiche col-md-2 mb-4 p-0">
                    <div>
                        <img class="rounded" src="https://covers.openlibrary.org/b/id/12501319-L.jpg" alt="Card image cap">
                    </div>
                    <a href="" class="btn btn-primary mt-2">Emppppp</a>
                </div>
                <div class="affiche col-md-2 mb-4 p-0">
                    <div>
                        <img class="rounded" src="https://covers.openlibrary.org/b/id/12501319-L.jpg" alt="Card image cap">
                    </div>
                    <a href="" class="btn btn-primary mt-2">Emppppp</a>
                </div>
                <div class="affiche col-md-2 mb-4 p-0">
                    <div>
                        <img class="rounded" src="https://covers.openlibrary.org/b/id/12501319-L.jpg" alt="Card image cap">
                    </div>
                    <a href="" class="btn btn-primary mt-2">Emppppp</a>
                </div>
                <div class="affiche col-md-2 mb-4 p-0">
                    <div>
                        <img class="rounded" src="https://covers.openlibrary.org/b/id/12501319-L.jpg" alt="Card image cap">
                    </div>
                    <a href="" class="btn btn-primary mt-2">Emppppp</a>
                </div>
                <div class="affiche col-md-2 mb-4 p-0">
                    <div>
                        <img class="rounded" src="https://covers.openlibrary.org/b/id/12501319-L.jpg" alt="Card image cap">
                    </div>
                    <a href="" class="btn btn-primary mt-2">Emppppp</a>
                </div>
                <div class="affiche col-md-2 mb-4 p-0">
                    <div>
                        <img class="rounded" src="https://covers.openlibrary.org/b/id/12501319-L.jpg" alt="Card image cap">
                    </div>
                    <a href="" class="btn btn-primary mt-2">Emppppp</a>
                </div>
                <div class="affiche col-md-2 mb-4 p-0">
                    <div>
                        <img class="rounded" src="https://covers.openlibrary.org/b/id/12501319-L.jpg" alt="Card image cap">
                    </div>
                    <a href="" class="btn btn-primary mt-2">Emppppp</a>
                </div>
            </div>
        </section>
    </main>
    <!-- SCRIPTS -->
    <script src="https://kit.fontawesome.com/972f63b1c4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>