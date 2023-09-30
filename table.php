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
                <td><?php echo $value['last-time-champions'] ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>City</td>
            <?php foreach ($teams as $key => $value) : ?>
                <td><?php echo $value['city'] ?></td>
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

<!--
<table>
    <thead>
        <tr>
            <th>Teams</th>
            
        </tr>
    </thead>

    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>

    <tfooter>

    </tfooter>
</table>
-->

<!--
<table>
    <thead>
        <tr>
            <th colspan="2">October</th>
            <th colspan="2">November</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Sales</td>
            <td>Profit</td>
            <td>Sales</td>
            <td>Profit</td>
        </tr>
        <tr>
            <td>$200,00</td>
            <td>$50,00</td>
            <td>$300,000</td>
            <td>$70,000</td>
        </tr>
    </tbody>

    <tfoot>
        <tr>
            <th colspan="4">November was more productive</th>
        </tr>
    </tfoot>
</table>
-->