<script type="text/javascript">
/*alert  script js*/
var PanelDialog = {
	local_ed : 'ed',
	init : function(ed) {
		PanelDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertPanel(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
	
	    var panel_heading = jQuery('input#panel_heading').val();
		var panel_text = jQuery('textarea#panel_text').val(); 
		var panel_color = jQuery('select#panel_color').val(); 
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';
		output = '&nbsp;';
		
		output = '[panel ';
		
		if(panel_heading) 
		{	
			output += ' panel_heading=\"' + panel_heading +'\"';
		}
		if(panel_text) 
		{	
			output += ' panel_text=\"' + panel_text +'\"';
		}
		
		if(panel_color)
		{
			output += ' panel_color=\"' + panel_color +'\"';		
		}
		
		output += '/]';
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(PanelDialog.init, PanelDialog);
</script>
<form action="/" method="get" accept-charset="utf-8">
    <table class="table table-bordered table-condensed" style="margin-left:35px;" >
		<tbody>
			<tr><td class="lable-all">Panel Type</td><td>&nbsp;</td>
    			<td><select class="select-medium" size="1" id="panel_color" name="panel_color" style="width:150px;" >
					<option value="panel-default" selected="selected"> Default</option>
					<option value="enigma_panel-red"> Red</option>
					<option value="enigma_panel-green"> Green</option>
					<option value="enigma_panel-blue"> Blue</option>
					<option value="enigma_panel-black"> Black</option>
					<option value="enigma_panel-orange"> Orange</option>
					<option value="enigma_panel-purple"> Purple</option>
					<option value="enigma_panel-brown">Brown</option>
					</select>
				</td>
    		</tr>				
			<tr><td class="lable-all">Title</td><td>&nbsp;</td>
    			<td><input class="input-medium" placeholder="Panel title" type="text" id="panel_heading" value="" name="panel_heading"></td>
    		</tr>
			<tr><td class="lable-all">Description</td><td>&nbsp;</td>
				<td class="text-box"><textarea class="input-xlarge"  id="panel_text" value="Panel Description....." name="panel_text" type="text">This text area show all text.....</textarea></td>
			</tr>
			<tr><td>&nbsp;</td><td>&nbsp;</td>
				<td><a href="javascript:PanelDialog.insert(PanelDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
			</tr>
		</tbody>
	</table>
</form>