<div class="header">
    <div id="logo">
       <?php echo'<a href="/">'.$logo['first_name'].'  '. $logo['last_name'].'</a>'?>
      
    </div>
    <ul>
        <?php foreach ($menu as $si => $c) { ?>
            <li class="menu">
                <?php echo'<a href="/' . $c['href'] . '">' . $c['label'] . '</a>' ?>
                <?php if (isset($c['submenu'])): ?>
                    <?php echo '<a href="' . $c['submenu']['href'] . '">' . $c['submenu']['label'] . '</a>'; ?>
                <?php endif; ?>
            </li>

        <?php } ?>
    </ul> 
</div>