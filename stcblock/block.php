<?php

// That is a file that i create to display on the blog the custom block
//
//
?>
<table>

<tr><td class="stc-viewer-header"><b>Vision:</b> </td><td>
<?php block_field( 'vision' ); ?>
</td></tr>

<tr>
	<td>Due :</td><td> <?php block_field( 'dtdue' ); ?></td>
</tr>
<tr>
	<td><b>Current Reality:</b></td><td>
<?php block_field( 'current_reality' ); ?>
</td>
</tr>
</table>

<?php
/*--@issue The check of the field prints it on the web
 *
if (block_field('mmot_01_analyze_how')){
	echo "<hr>Analyze on how it got to be that way<hr>";
	echo block_field('mmot_01_analyze_how');
}
 */
?>

