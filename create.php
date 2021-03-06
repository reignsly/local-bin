<?@require_once('header.php');?>
  
  <script src="assets/js/tinymce/tinymce.min.js"></script>

	<div class="row">
			<h2>Create</h2>
	</div>

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
          <textarea id="bin" name="bin"></textarea>
        </div>

        <div class="form-group">
          <div class="col-md-8">
            <div class="input-group">
              <span class="input-group-addon">File Name</span>
              <input id="bin_name" name="bin_name" class="form-control" placeholder="File Name" type="text" required >
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group pull-right">
              <button class="btn btn-success" type="submit" name="save_bin" id="save_bin" value="save_bin" ><i class="fa fa-upload"></i>&nbsp; Save</button>
            </div>
          </div>
        </div>
    </form>

  </div>

<?@require_once('footer.php');?>