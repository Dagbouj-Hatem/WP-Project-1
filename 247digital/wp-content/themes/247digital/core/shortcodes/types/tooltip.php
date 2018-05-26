<script type="text/javascript">
/*alert  script js*/
var TooltipDialog = {
	local_ed : 'ed',
	init : function(ed) {
		TooltipDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertTooltip(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
	
	    var tooltip_style = jQuery('select#tooltip_style').val();
		var tooltip_text = jQuery('input#tooltip_text').val();
		var tooltip_over_text = jQuery('input#tooltip_over_text').val(); 
		
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';
		output = '&nbsp;';
		
		output = '[tooltip ';
		
		if(tooltip_text) 
		{	
			output += ' tooltip_text=\"' + tooltip_text +'\"';
		}
		if(tooltip_over_text) 
		{	
			output += ' tooltip_over_text=\"' + tooltip_over_text +'\"';
		}
		
		if(tooltip_style)
		{
			output += ' tooltip_style=\"' + tooltip_style +'\"';		
		}
		
		output += '/]';
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(TooltipDialog.init, TooltipDialog);
</script>
<form action="/" method="get" accept-charset="utf-8">
    <table class="table table-bordered table-condensed">
		<tbody>
			<tr><td class="lable-all">Tooltip  Type</td>
    			<td><select class="select-medium" size="1" id="tooltip_style" name="tooltip_style">
					<option value="top" selected="selected">Top</option>
					<option value="left">Left</option>
					<option value="bottom">Bottom</option>
					<option value="right">Right</option>
					</select>
				</td>
    		</tr>				
			<tr><td class="lable-all">Tool tip Text</td>
    			<td><input class="input-medium" placeholder="Tool tip text" type="text" id="tooltip_text" value="" name="tooltip_text"></td>
    		</tr>
			<tr><td class="lable-all">Tool tip Hover Text</td>
    			<td><input class="input-medium" placeholder="Tool tip hover text" type="text" id="tooltip_over_text" value="" name="tooltip_over_text"></td>
    		</tr>
			<tr><td>&nbsp;</td>
				<td><a href="javascript:TooltipDialog.insert(TooltipDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
			</tr>
		</tbody>
	</table>
</form>