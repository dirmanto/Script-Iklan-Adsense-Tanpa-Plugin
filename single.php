<div style="float:left; margin:0 20px 10px 0;">
TEMPATKAN UNIT IKLAN 300X250 DISINI
</div>
<?php
$where =0;
$content = apply_filters('the_content', get_the_content());
$content = explode("</p>", $content);
for ($i = 0; $i <count($content); $i++) {
if ($i == $where) { ?>
<div style="float:left; margin:-10px 0 0 0;">
</div>
IKLAN NATIVE IN-ARTICLE DISINI
<?php
}
echo $content[$i] . "</p>";
}
?>
</script>
<p></p>
IKLAN 336x280 DISINI
<p></p>
