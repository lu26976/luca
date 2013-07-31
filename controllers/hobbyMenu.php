<?php



function hobbyMenu() {
    $hobby = array(
        array(
            'id' => 1,
            'href' => '',
            'label' => 'BATMAN',
            'html' => '<a href="/hobby/Batman.php"><img src="/static/image/batman-banner2.jpg" alt="batman" title="batman"/></a>'
        ),
        array(
            'id' => 2,
            'href' => '',
            'label' => 'Invincible',
            'html' => '<a href="/hobby/Invincible.php"><img src="/static/image/Invincible-banner.jpg" alt="Invincible" title="Invincible"/></a>'
        ),
    );

    $menu = '<ul class="menuhobby">';
    foreach($hobby as $k => $h) {
        $menu .= '<li class="hobby">';
        $menu .= $h['html'];
        $menu .= '</li>';
    }
    $menu .= '</ul>'; 
    
    return $menu;
}





?>
