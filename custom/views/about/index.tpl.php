<?php
$count = 0;
$today = Array();
$week = Array();
$month = Array();
$older = Array();
$now = time();
                    
foreach ($items as $item) {
    $age = ($now - $item->get_date('U')) / (60*60*24);
    if ($age < 1) {
        $today[] = $item;
    } elseif ($age < 7) {
        $week[] = $item;
    } elseif ($age < 30) {
        $month[] = $item;
    } else {
        $older[] = $item;
    }
}

header('Content-type: text/html; charset=UTF-8');
?>
<?php
$all_people = &$Planet->getPeople();
usort($all_people, array('PlanetPerson', 'compare'));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

    <title><?php echo $PlanetConfig->getName(); ?></title>
    <?php include(dirname(__FILE__).'/head.tpl.php'); ?>
</head>

<body>
    <div id="page">
        
        <div id="content">
        <?php include(dirname(__FILE__).'/top.tpl.php'); ?>
            <div class="article">
                <h2>About</h2>
                <p>Developer News are list of curated articles for web designers and developers every day, 
                always up-to-date and currently aggregates feeds from <a href="?type=feeds">(<?php echo count($all_people); ?>)</a> websites. Outputs feeds are sorted by date (latest first).</p>
                <p>Powered by <a href="http://moonmoon.org/">moonmoon</a>, an awesome and open-source php app thats showing several feeds on one page.</p>
            </div>
            
        </div>
        
        <?php include_once(dirname(__FILE__).'/sidebar.tpl.php'); ?>
        
        <?php include(dirname(__FILE__).'/footer.tpl.php'); ?>
    </div>
    
    <script src="app/js/mm.js" type="text/javascript"></script>
</body>
</html>
