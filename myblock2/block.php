<?php

// That is a file that i create to display on the blog the custom block
//
//
?>
<table>

<tr><td style="min-width:100px">Vision: </td><td>
<?php block_field( 'vision' ); ?>
</td></tr>

<tr>
	<td>Due <br>Date:</td><td> <?php block_field( 'dtdue' ); ?></td>
</tr>
<tr>
	<td>Current Reality:</td><td>
<?php block_field( 'current_reality' ); ?>
</td>
</tr>
</table>

<?php

if (block_field('mmot_01_analyze_how')){
	echo "<hr>Analyze on how it got to be that way<hr>";
	echo block_field('mmot_01_analyze_how');
}

?>

