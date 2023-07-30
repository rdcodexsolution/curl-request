<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RD CODEX</a>
            <button type="button" class="btn btn-primary">Add User</button>
        </div>
    </nav>
    <div class="container mt-5" style="width:30%">
        <ol class="list-group list-group-numbered">
            <?php foreach($users as $user){?> 
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold"><?php echo ucfirst($user['name']); ?></div>
                    <input type="checkbox" name="check_".<?php echo $user["id"]; ?>[] />
                    &nbsp;<?php echo $user['email']; ?>
                </div>
                <span class="badge bg-primary rounded-pill"><?php echo $user['count']; ?></span>
            </li>
            <?php } ?>
        </ol>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>