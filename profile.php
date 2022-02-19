<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Profile -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        BLOCK ALL
                    </label>
                </div>
            </th>
            <th scope="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        UMBLOCK ALL
                    </label>
                </div>
            </th>
            <th scope="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        DELETE ALL
                    </label>
                </div>
            </th>
            <th scope="col">ID</th>
            <th scope="col">USER</th>
            <th scope="col">DATE REGISTRATION</th>
            <th scope="col">LAST DATE LOGIN</th>
            <th scope="col">STATUS</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </th>
            <th scope="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </th>
            <th scope="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </th>
            <td><?php echo 'ID' ?></td>
            <<td><?php echo 'USER' ?></td>
            <td><?php echo 'DATE' ?></td>
            <td><?php echo 'DATE LOGIN' ?></td>
            <td><?php echo 'STATUS' ?></td>
         </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
    <form>

    </form>

</body>
</html>