<?php

// That is a file that i create to display on the blog the custom block
//
//
?>
<table class="stc-viewer-container">

<tr>
	<td class="stc-viewer-header">

<b>Action:</b><br>
 <img src="http://img.jgwill.com/ico/next7.png" class="stc-viewer-header-icon">
<font size="-1">
<?php block_field( 'dtdue' ); ?>
</font>
</td>
<td class="stc-viewer-content stc-viewer-content-action">
<p class="stc-viewer-content">	<?php block_field( 'action' ); ?></p>
</td>
</tr>
</table>


