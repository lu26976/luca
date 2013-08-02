<?php function menu_scroll($ar1){?>
        <ul>
        <?php foreach ($ar1 as $si => $c) { ?>
            <li>
                <?php echo'<a href="' . $c['href'] . '">' . $c['label'] . '</a>' ?>
                <?php if (isset($c['submenu'])): ?>
                    <?php echo '<a href="' . $c['submenu']['href'] . '">' . $c['submenu']['label'] . '</a>'; ?>
                <?php endif; ?>
            </li>
        <?php } ?>
    </ul>
<?php } ?>