
<?php
$operateurs = '*+-/';
function start_page($title) {
    echo '<!DOCTYPE html> <html> <head> <title>' . $title . '</title> </head> <body>';
};
function end_page() {
    echo '</body> </html>';
};
start_page('Calculator');
?>

<form action="calcul.php" method="get">
    <input type="text" name="op1" value="num 1">
    <input type="text" name="op2" value="num 2"></br>

    <?php
    for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
    {
        echo '<input ';
        echo 'type="submit" name="action" value="' . $operateurs[$cpt] . '"/><br/>' . "\n";
    }
    ?>
</form>

<?php
end_page();
?>