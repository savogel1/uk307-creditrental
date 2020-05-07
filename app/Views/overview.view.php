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
                <tr>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Kreditpaket</th>
                    <th>Erfassungsdatum</th>
                    <th>Rückzahlung bis</th>
                    <th>Status</th>
                </tr>
                <?php foreach ($creditrentals as $creditrental) : ?>
                    <tr>
                        <td><?= $creditrental['name'] ?></td>
                        <td><?= $creditrental['email'] ?></td>
                        <td><?= $creditPackages[$creditrental['creditPackage'] - 1]["name"]; ?></td>
                        <td><?= $creditrental['creationDate'] ?></td>
                        <td><?= $dueDate = date('Y-m-d', strtotime($creditrental['creationDate'] . " + " . ($creditrental['noOfInstallments'] * 15) . " days"));
                            ?></td>
                        <td>
                            <?php if ($dueDate > date("Y-m-d")) {
                                echo "<g-emoji class=\"g-emoji\" alias=\"sun_with_face\" fallback-src=\"https://github.githubassets.com/images/icons/emoji/unicode/1f31e.png\">🌞</g-emoji>";
                            } else {
                                echo "<g-emoji class=\"g-emoji\" alias=\"zap\" fallback-src=\"https://github.githubassets.com/images/icons/emoji/unicode/26a1.png\">⚡</g-emoji>";;
                            } ?>
                        </td>
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