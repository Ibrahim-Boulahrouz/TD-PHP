<?php
$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$action = $_GET['action'];
function start_page($title) {
    echo '<!DOCTYPE html> <html> <head> <title>' . $title . '</title> </head> <body>';
};
function end_page() {
    echo '</body> </html>';
};
start_page('Calcul');
if ($action == '*') {
    echo $op1 * $op2;
}
elseif ($action == '+') {
    echo $op1 + $op2;
}
elseif ($action == '-') {
    echo $op1 - $op2;
}
else {
    echo $op1 / $op2;
}
end_page();
?>