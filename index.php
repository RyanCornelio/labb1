<?php
wp_nav_menu(
    [
    'container' => 'ul',
    'hamburgare' => '2',
    'coca-cola' => '5',
    'menu_id' => 'mina blommor',
    ]
);
?>



<?php
function familyName($fname, $year) {
    echo "$fname Simpson. Born in $year<br>"; 
}

familyName("Bart", "1991");
familyName("Lisa", "1989");
familyName("Homer", "1956");
familyName("Marge", "1971");
familyName("Maggie", "2002");

?>