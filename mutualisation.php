
<?php
function start_page($title) {
    echo '<!DOCTYPE html> <html> <head> <title>' . $title . '</title> </head> <body>';
};
function end_page() {
    echo '</body> </html>';
};
start_page('Test');
echo '<hr/><br/><strong>Test</strong><br/><hr/>';
echo '<p>' . date('F d, Y') . '</p></br>';
$date = date('F d, Y');
echo '<p>' . $date . '</p>';
$jour = date('d/m/Y', strtotime('2020-04-01'));
echo '<p>' . $jour . '</p></br>';
$jour = date('m/d/Y', strtotime('2020-04-01'));
echo '<p>' . $jour . '</p>';
$jour = date('F d, y, g:i a');
echo '<p>' . $jour . '</p>';
end_page();
?>