<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kreditverleihe Übersicht</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <div>
        <h1>Kreditverleihe Übersicht</h1>
    </div>
    <div>
        <table>
            <?php foreach($creditrentals as $creditrental) : ?>
            <tr>
                <td><?= $creditrental['name'] ?></td>
                <td><?= $creditrental['email'] ?></td>
                <td><?= $creditrental['phone'] ?></td>
                <td><?= $creditrental['noOfInstallments'] ?></td>
                <td><?= $creditrental['creditPackage'] ?></td>
                <td><?= $creditrental['creationDate'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>