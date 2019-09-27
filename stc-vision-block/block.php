<?php

// That is a file that i create to display on the blog the custom block
//
//

$vision_value = block_value('vision');
$vision = str_replace("@STCGoal","",$vision_value);
?>

<table>

<tr>
	<td class="stc-viewer-header">
		<b>Vision:</b>
		<br>
		<img src="http://img.jgwill.com/ico/vision.png" class="stc-viewer-header-icon">
	</td>
	<td>
	<p class="stc-viewer-content"> 	<?php echo $vision ?></p>
	</td>

</tr>
</table>



<!-- @STCGoal Print out the mmot if filled in the vision -->

<!-- getting variable fix because it print them

<?php

$ico_base = "http://img.jgwill.com/ico";
//Get variable bellow
$acceptable = block_field( 'mmotacceptable' );
$trend = block_field( 'mmottrend' );
$analyze = block_field( 'mmotanalyze' );
$plan =  block_field( 'mmotplan');
$feedback =  block_field( 'mmotfeedback');

echo "-->";



if ($acceptable == "Yes" || $acceptable == "No")
{
//echo "<hr>";
	//require the php

	require_once( dirname(__FILE__) . '/../mmot/block.php');

}

?>





