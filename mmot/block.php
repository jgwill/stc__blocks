<?php

// That is a file that i create to display on the blog the custom block
//
//
?>
<table>

<tr>
	<td class="stc-viewer-header">
		<b>MMOT:</b>
		<br>
		<img src="http://img.jgwill.com/ico/icons8-registry-editor-26.png" class="stc-viewer-header-icon">
	</td>

<!--	<p class="stc-viewer-content">  -->

<!-- getting variable fix because it print them
<?php 
$ico_base = "http://img.jgwill.com/ico";
//Get variable bellow
$acceptable = block_field( 'mmotacceptable' );
$trend = block_field( 'mmottrend' );
$analyze = block_field( 'mmotanalyze' );
$plan =  block_field( 'mmotplan');
$feedback =  block_field( 'mmotfeedback');

//stop getting variable here
echo "-->";
$acceptable_icon = "112_Tick_Green.ico";
$getting_better_icon = "112_UpArrowLong_Green.ico";
$stay_icon = "next-orange.png";
$getting_worse_icon = "112_DownArrowLong_Orange.ico";
$unacceptable_icon = "channel-mode-off.ico";
$mmot_icon = "icons8-yoga-208.png";

$acceptability_icon = $unacceptable_icon;

if ($acceptable == "Yes") 
	$acceptability_icon = $acceptable_icon;

echo "<td><img src=$ico_base/$acceptability_icon>";
//echo "</td>";

//trend
$trend_icon = $stay_icon;
if ($trend == "Getting worse") $trend_icon = $getting_worse_icon; 
else if ($trend == "Getting better") $trend_icon = $getting_better_icon;

//echo "<td>";
echo "<img src=$ico_base/$trend_icon></td>";

echo "</tr>";
//Analyze
echo '<tr><td class="stc-viewer-header">Analyze:</td>';
echo "<td><p>$analyze</p></td>";
echo "</tr>";
//Plan
echo '<tr><td class="stc-viewer-header">Plan:</td>';
echo "<td><p>$plan</p></td>";
echo "</tr>";


//Feedback
echo '<tr><td class="stc-viewer-header">Feedback:</td>';
echo "<td><p>$plan</p></td>";
echo "</tr>";



//mmotthrees, mmotanalyze, mmotplan, mmotfeedback, mmotdiscussion

?>

</tr></table>


	</td>
</tr>
</table>


