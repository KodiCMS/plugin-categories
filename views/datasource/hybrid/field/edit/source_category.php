<?php 
$categories = array();
foreach ( Datasource_Data_Manager::get_all('category') as $id => $category )
{
	$categories[$id] = $category['name'];
}
?>
<div class="control-group" id="ds_<?php echo $id; ?>">
	<label class="control-label" for="from_ds"><?php echo $category['name']; ?></label>
	<div class="controls">
		<?php echo Form::select( 'from_ds', $categories, $field->from_ds); ?>
	</div>
</div>