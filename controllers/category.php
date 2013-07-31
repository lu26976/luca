<?php
$Owner = array(
    'id' => 1,
    'first_name' => 'Luca',
    'last_name' => 'Lazzarelli'
);

$category = array(
    array(
        'id' => 1,
        'href' => 'menuitem/chi_sono.php',
        'label' => 'chi sono',
        'submenu' => array(
            'id' => 1,
            'href' => 'CV.php',
            'label' => 'CV',
        ),
    ),
    array(
        'id' => 2,
        'href' => 'menuitem/hobby.php',
        'label' => 'Miei hobby',
    ),
    array(
        'id' => 3,
        'href' => 'menuitem/contatti.php',
        'label' => 'Contatti',
    )
);
?>
