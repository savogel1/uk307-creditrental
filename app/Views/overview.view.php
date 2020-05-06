<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kreditverleihe Übersicht</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <div class="container">
        <div id="title" class="item">
            <h1>Kreditverleihe Übersicht</h1>
        </div>
        <div id="overview-table" class="item">
            <table>
                <?php foreach($creditrentals as $creditrental) : ?>
                <tr>
                    <td><?= $creditrental['name'] ?></td>
                    <td><?= $creditrental['email'] ?></td>
                    <td><?= $creditrental['phone'] ?></td>
                    <td><?= $creditrental['noOfInstallments'] ?></td>
                    <td><?= $creditrental['creditPackage'] ?></td>
                    <td><?= $creditrental['creationDate'] ?></td>
                    <td id="table-button">
                        <a href="editcredit?id=<?= $creditrental['id'] ?>"><button>Bearbeiten</button></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div id="buttons">
            <a href="addcredit"><button>Kreditverleih hinzufügen</button></a>
        </div>
    </div>
</body>

</html>