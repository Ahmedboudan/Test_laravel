<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Ajout d'un étudiant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mt-4 mb-4">
                    <div class="card-header text-center bg-info text-white">Ajout d'un etudiant</div>
                    <div class="card-body">
                        <form method="post" action="/ajouter/traitement" class="was-validated">
                            @csrf
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" class="form-control" placeholder='Code' name="code" required>
                                <div class="valid-feedback">Valide</div>
                                <div class="invalid-feedback">Veuillez remplir ce champ</div>
                            </div>
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" name="nom" required placeholder='Nom'>
                                <div class="valid-feedback">Valide</div>
                                <div class="invalid-feedback">Veuillez remplir ce champ</div>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" name="prenom" placeholder='Prenom' required>
                                <div class="valid-feedback">Valide</div>
                                <div class="invalid-feedback">Veuillez remplir ce champ</div>
                            </div>
                            <div class="form-group">
                                <label for="niveau">Niveau</label>
                                <select class="form-control" id="niveau" name="niveau" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="filiere">Filiere</label>
                                <select class="form-control" id="niveau" name="code_f" required>
                                    <option value="GINF">GINF</option>
                                    <option value="GIL">GIL</option>
                                    <option value="GSTR">GSTR</option>
                                </select>
                                <div class="valid-feedback">Valide</div>
                                <div class="invalid-feedback">Veuillez remplir ce champ</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                            <a class="btn btn-info" href="/"><i class="bi bi-house"></i> </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
