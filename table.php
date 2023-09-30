<?php

require __DIR__ . '/data.php';

?>

<table>
    <thead>
        <tr>
            <td>Teams</td>
            <?php foreach ($teams as $key => $value) : ?>
                <th><?php echo $key ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>League</td>
            <?php foreach ($teams as $key => $value) : ?>
                <td><?php echo $value['league'] ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>Last time champions</td>
            <?php foreach ($teams as $key => $value) : ?>
                <td><?php echo $value['last-time-champions'] ?>
                    <?php if ($value['last-time-champions'] == null) {
                        echo 'N/A';
                    } ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>City</td>
            <?php foreach ($teams as $key => $value) : ?>
                <td><?php echo $value['city'] ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>Nickname</td>
            <?php foreach ($teams as $key => $value) : ?>
                <td><?php if ($value['nickname'] == true) {
                        echo $value['nickname'];
                    } else {
                        echo "N/A";
                    };
                    ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>URL</td>
            <?php foreach ($teams as $key => $value) : ?>
                <td><?php echo $value['url'] ?></td>
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>