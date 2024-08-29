<?php require "./base.php";
$sql = "SELECT * FROM studentss";
$query = $pdo->prepare($sql);
$query->execute();
$dataAll = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html, body, .container, .d-flex {
            height: 100%;
        }

        main {
            min-height: 82vh;
        }
    </style>
</head>
<body>
<div>
    <?php require "./layout/header.php"?>
    <main class="d-flex justify-content-center align-items-center">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">course</th>
                    <th scope="col">address</th>
                    <th scope="col">gender</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($dataAll as $data): ?>
                    <tr>
                        <th scope="row"><?php echo htmlspecialchars($data['id']); ?></th>
                        <td><?php echo htmlspecialchars($data['name']); ?></td>
                        <td><?php echo htmlspecialchars($data['age']); ?></td>
                        <td><?php echo htmlspecialchars($data['course']); ?></td>
                        <td><?php echo htmlspecialchars($data['address']); ?></td>
                        <td><?php echo htmlspecialchars($data['gender']); ?></td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php require "./layout/footer.php"?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
