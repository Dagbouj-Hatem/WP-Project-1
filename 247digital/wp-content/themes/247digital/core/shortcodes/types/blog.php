<script type="text/javascript">
/* Tabs   script js*/
var BlogDialog = {
	local_ed : 'ed',
	init : function(ed) {
		BlogDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertPortfolio(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		var blog_type = jQuery('select#blog_type').val();
		var blog_cat_show = jQuery('select#blog_cat_show').val();
		var blog_cat_name =  jQuery('select#blog_cat_name').val();		 
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '[blog_post';
		if(blog_cat_show)
		{ output += ' blog_cat_show=\"' + blog_cat_show +'"';  }
		if(blog_type) 
		{ output += ' blog_type=\"' + blog_type +'"'; }
		if(blog_cat_name)
		{ output += ' blog_cat_name=\"' + blog_cat_name +'"';  }
		output += ']';
		
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(BlogDialog.init, BlogDialog);
</script>
<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' ); 
$args = array('type'=> 'post','taxonomy'=> 'category', array('hide_empty' => false)); 
$tax_terms = get_categories( $args );

?>
<form action="/" method="get" accept-charset="utf-8">
       	<table class="table table-bordered table-condensed">
			<tbody>
			<tr><td class="lable-all">Display Post Categories</td>
				<td><select class="input" size="1" id="blog_cat_show" name="blog_cat_show">
                   	<option selected="selected" value="yes">Yes</option>
					<option value="no">NO</option>					
					</select>
				</td>
			</tr>
			<tr><td class="lable-all">Select your Portfolio Categories Name:</td>
				<td>
					<select multiple="multiple"  id="blog_cat_name" name="blog_cat_name">
					<?php foreach ($tax_terms as $tax_term) { ?>
						<option selected="selected" value="<?php echo $tax_term->name; ?>"><?php echo $tax_term->name; ?></option>
					<?php } ?>			
					</select>
				</td>		
			</tr>
			
			<tr><td class="lable-all">Blog Type</td>
				<td><select class="input" size="1" id="blog_type" name="blog_type">
                   	<option selected="selected" value="2">Two-Column</option>
					<option value="3">Three-Column</option>
					<option value="4">Four-Columnt</option>												
					</select>
				</td>
			</tr>	
			<tr>
				<td>&nbsp;</td>
				<td><a href="javascript:BlogDialog.insert(BlogDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
				</td>
			</tr>				
			</tbody>
		</table>    
</form>