<!DOCTYPE html>
<html lang="en">
<head>
    <title>TRS Cafe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(coffee_homepage.jpg);
            background-size: cover;
            background-position: fixed;
        }

        .navbar {
            background-color: #6F4E37;
        }

        .transparent-bg {
            background-color: transparent !important;
        }

        .card {
            background-color: transparent;
            border: none;
        }

        .list-group {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .list-group-item {
            background-color: transparent;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .delete-button {
            background-color: #bf8445;
            border-color: #dc3545;
            color: #fff;
        }

        .delete-button:hover {
            background-color: #d2a97d;
            border-color: #bd2130;
        }

        .navbar-brand {
            color: #c59058 !important;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            font-size: 2rem;
            border: 1px solid #8B4513;
            padding: 5px 10px;
        }

        .navbar-brand span {
            color: chocolate;
        }

        .card-title {
            color: #c59058 !important;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #c59058 !important;
            border-color: #c59058 !important;
            color: #fff !important;
        }

        .btn-primary:hover {
            background-color: #a5784a !important;
            border-color: #a5784a !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TRS <span style="color: chocolate;">Cafe</span></a>
        </div>
    </nav>

    <section class="container py-5 transparent-bg">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mb-3">
                    <div class="card-header bg-dark text-light">
                        <h5 class="card-title m-0">Our Menu</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php if (!empty($coffeeNames)) {
                            foreach ($coffeeNames as $coffeeName) { ?>
                                <li class="list-group-item">
                                    <span><?php echo $coffeeName; ?></span>
                                    <form action="../controllers/index.php" method="POST" class="d-inline">
                                        <input type="hidden" name="coffee_name" value="<?php echo $coffeeName; ?>">
                                        <button type="submit" name="delete_coffee" class="btn btn-danger btn-sm delete-button">Delete</button>
                                    </form>
                                </li>
                            <?php }
                        } else { ?>
                            <li class="list-group-item">No coffee names found.</li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5 class="card-title m-0">Add Coffee</h5>
                    </div>
                    <div class="card-body">
                        <form action="../controllers/index.php" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="coffee_name" placeholder="Coffee Name" required>
                            </div>
                            <button type="submit" name="add_coffee" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
</body>
</html>
