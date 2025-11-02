<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Présentation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .presentation-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }

        .presentation-box {
            background-color: #ffffff;
            border: 2px solid #dee2e6;
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.05);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        .presentation-box img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 2rem;
        }

        .presentation-box .btn {
            width: 100%;
            padding: 0.75rem;
            font-size: 1.2rem;
        }

        .presentation-box .btn + .btn {
            margin-top: 1rem;
        }

        @media (max-width: 576px) {
            .presentation-box {
                padding: 1.5rem;
                border-radius: 1rem;
            }

            .presentation-box .btn {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="presentation-container">
        <div class="presentation-box">
            <img src="../Fest_Projet/img/Logo.png" alt="Image de présentation">
            <a href="../Fest_Projet/Inscription/inscription.php" class="btn btn-primary">Inscription</a>
            <a href="../Fest_Projet/Inscription/connexion.php" class="btn btn-success">Connexion</a>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
