<?@require_once('header.php');?>
  
  <script src="assets/js/tinymce/tinymce.min.js"></script>

	<div class="row">
			<h2>Edit <small><i class="fa fa-hand-o-right"></i>&nbsp; <?=isset($bin_name)? ucwords($bin_name):''?></small></h2>
	</div>
 <form method="post" name="change_form">
      <input type="hidden" name="action" value="change_bin">
      <div class="form-group">
        <div class="col-md-12">
          <?=bins_dd(isset($_GET['bin'])?$_GET['bin']:false);?>
          <script>
            function change_dd(ele){
              // console.log($(ele).val());
              window.location = "edit.php?action=edit_bin&bin="+$(ele).val();
            }
          </script>
        </div>
      </div>
  </form>
  <br>
  <br>
  <div class="row">
    <!-- place in header of your html document -->
    <script>
    tinymce.init({
        mode : "exact",
        elements : "bin",
        selector: "textarea#bin",
        theme: "modern",
        height: $(document).height()-($(document).height()*.40),
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
       ],
       // content_css: "css/content.css",
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
       style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
     }); 
    </script>

    <!-- place in body of your html document -->
    <form method="post">
        
        <div class="form-group">
          <textarea id="bin" name="bin"><?= isset($content) ? html_entity_decode($content,ENT_COMPAT) : '';?></textarea>
          <input type="hidden" name="bin_file" id="bin_file" value="<?=$bin?>" />
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group pull-right">
              <a href="bins.php" class="btn btn-default">Cancel</a> &nbsp;
              <button class="btn btn-success" type="submit" name="edit_bin" id="edit_bin" value="edit_bin" ><i class="fa fa-upload"></i>&nbsp; Save</button>
            </div>
          </div>
        </div>
    </form>

  </div>

<?@require_once('footer.php');?>