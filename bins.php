<?@require_once('header.php');?>
	
	<?php $bins = get_bins(); ?>

	<div class="row">
			<h2>Bin Files</h2>
	</div>

	<div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-10">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>&nbsp; Contents</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                            		<?if($bins):?>
                            			<?foreach ($bins as $k => $f):?>
                            				<?$f = (object)$f;?>
                            				<tr>
		                                    <td>
		                                        <span class="glyphicon glyphicon-folder-open text-success"></span><a href="#">&nbsp;&nbsp; <?=ucwords(str_replace('_', ' ', $f->title))?></a>
		                                    </td>
		                                    <td class="text-default">
		                                    	<a href="edit.php?action=edit_bin&bin=<?=$f->bin?>" class=""><span class="fa fa-pencil "></span></a> &nbsp;
		                                    	<a href="javacript:;" onclick="show('<?=$k?>')" class=""><span class="fa fa-folder-open-o"></span></a>&nbsp;
		                                    	<a href="bins.php?action=delete_bin&bin=<?=$f->bin?>" class=""><span class="fa fa-trash-o"></span></a> &nbsp;
		                                    </td>
		                                </tr>

		                                <div id="bin_<?=$k?>" style="display:none;">
		                                	<?=html_entity_decode($f->content,ENT_COMPAT);?>
		                                </div>
                            			<?endforeach;?>
                            		<?else:?>
                            			<tr>
                                    <td colspan="2" >
                                        <p>No Bins Created</p>
                                        <a href="create.php" class="btn btn-default" ><i class="fa fa-plus"></i>&nbsp; Create</a>
                                    </td>
	                                </tr>
                            		<?endif;?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	function show (bin) {
		custom_modal("Bin Content", $('#bin_'+bin).html());
	}
</script>  

<?@require_once('footer.php');?>