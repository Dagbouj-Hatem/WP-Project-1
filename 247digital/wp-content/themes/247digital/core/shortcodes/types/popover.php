<script type="text/javascript">
/*Popover  script js*/
var PopoverDialog = {
	local_ed : 'ed',
	init : function(ed) {
		PopoverDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertPopover(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
	
	    var popover_style = jQuery('select#popover_style').val();
		var popover_text = jQuery('input#popover_text').val();
		var popover_over_text = jQuery('input#popover_over_text').val(); 
		
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';
		output = '&nbsp;';
		
		output = '[popover ';
		
		if(popover_style) 
		{	
			output += ' popover_style=\"' + popover_style +'\"';
		}
		if(popover_text) 
		{	
			output += ' popover_text=\"' + popover_text +'\"';
		}
		
		if(popover_over_text)
		{
			output += ' popover_over_text=\"' + popover_over_text +'\"';		
		}
		
		output += '/]';
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(PopoverDialog.init, PopoverDialog);
</script>
<form action="/" method="get" accept-charset="utf-8">
    <table class="table table-bordered table-condensed">
		<tbody>
			<tr><td class="lable-all">Popover  Type</td>
    			<td><select class="select-medium" size="1" id="popover_style" name="popover_style">
					<option value="top" selected="selected">Top</option>
					<option value="left">Left</option>
					<option value="bottom">Bottom</option>
					<option value="right">Right</option>
					</select>
				</td>
    		</tr>				
			<tr><td class="lable-all">Popover Text</td>
    			<td><input class="input-medium" placeholder="Popover text" type="text" id="popover_text" value="" name="popover_text"></td>
    		</tr>
			<tr><td class="lable-all">Popover hover Text</td>
    			<td><input class="input-medium" placeholder="Popover hover text" type="text" id="popover_over_text" value="" name="popover_over_text"></td>
    		</tr>
			<tr><td>&nbsp;</td>
				<td><a href="javascript:PopoverDialog.insert(PopoverDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
			</tr>
		</tbody>
	</table>
</form>