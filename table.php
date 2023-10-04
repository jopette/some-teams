<?php

require __DIR__ . '/data.php';
require __DIR__ . '/number-of-teams.php';

?>

<body>
    <table>
        <caption><?php echo $totalTeams ?></caption>
        <thead>
            <tr>
                <th class="top" scope="col">Teams</th>
                <th>League</th>
                <th>Last time champions</th>
                <th>City</th>
                <th>Nickname</th>
                <th>Website</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($teams as $key => $value) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $value['league'] ?></td>
                    <td><?php echo $value['last-time-champions'] ?>
                        <?php if ($value['last-time-champions'] == null) {
                            echo 'N/A';
                        } ?></td>
                    <td><?php echo $value['city'] ?></td>
                    <td><?php if (empty($value['nickname'])) {
                            echo 'N/A';
                        } else {
                            echo $value['nickname'];
                        } ?></td>
                    <td><?php echo $value['url'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot></tfoot>
    </table>
</body>

</html>