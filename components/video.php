<section class="video-feed">
<div class="wrapper">

    <h2>Click on the links below to view</h2>

<?php 
$d = dir("./video"); 
echo "<ul>";
while (false !== ($entry = $d->read())) {
   echo "<li><a target='_blank' href='{$entry}'>{$entry}</a></li>";
}
echo "</ul>";
$d->close();
?>
</div>
</section>