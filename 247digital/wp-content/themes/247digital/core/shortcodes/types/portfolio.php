<script type="text/javascript">
/* Tabs   script js*/
var PortfolioDialog = {
	local_ed : 'ed',
	init : function(ed) {
		PortfolioDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertPortfolio(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		var portfolio_type = jQuery('select#portfolio-type').val();
		var port_cat_show = jQuery('select#port_cat_show').val();
		var port_cat_name = jQuery('select#port_cat_name').val();	 
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '[portfolio';
		if(port_cat_show)
		{ output += ' port_cat_show=\"' + port_cat_show +'"';  }
		if(portfolio_type) 
		{ output += ' portfolio_type=\"' + portfolio_type +'"'; }
		if(port_cat_name)
		{ output += ' port_cat_name=\"' + port_cat_name +'"';  }
		output += ']';
		
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(PortfolioDialog.init, PortfolioDialog);
</script>
<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
$taxonomy = 'portfolio_categories';
$tax_terms = get_terms($taxonomy, array('hide_empty' => false));
?>
<form action="/" method="get" accept-charset="utf-8">
       	<table class="table table-bordered table-condensed">
			<tbody>
			<tr><td class="lable-all">Display Portfolio Categories</td>
				<td><select class="input" size="1" id="port_cat_show" name="port_cat_show">
                   	<option selected="selected" value="yes">Yes</option>
					<option value="no">NO</option>					
					</select>
				</td>
			</tr>
			<tr><td class="lable-all">Select your Portfolio Categories Name:</td>
				<td>
					<select multiple="multiple"  id="port_cat_name" name="port_cat_name">
					<?php foreach ($tax_terms as $tax_term) { ?>
						<option selected="selected" value="<?php echo $tax_term->name; ?>"><?php echo $tax_term->name; ?></option>
					<?php } ?>			
					</select>
				</td>		
			</tr>
			
			<tr><td class="lable-all">Portfolio Type</td>
				<td><select class="input" size="1" id="portfolio-type" name="portfolio-type">
                   	<option selected="selected" value="2">Two-Column</option>
					<option value="3">Three-Column</option>
					<option value="4">Four-Columnt</option>												
					</select>
				</td>
			</tr>	
			<tr>
				<td>&nbsp;</td>
				<td><a href="javascript:PortfolioDialog.insert(PortfolioDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
				</td>
			</tr>				
			</tbody>
		</table>    
</form>