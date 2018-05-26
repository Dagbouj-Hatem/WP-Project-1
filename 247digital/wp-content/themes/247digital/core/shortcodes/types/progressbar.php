<script type="text/javascript">
/*alert  script js*/
var ProgressbarDialog = {
	local_ed : 'ed',
	init : function(ed) {
		ProgressbarDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertProgressbar(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
	
	    var progress_percentag = jQuery('input#progress_percentag').val();
		var progress_heading = jQuery('input#progress_heading').val();	
	
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';
		output = '[progressbar ';
		
		if(progress_heading) 
		{	
			output += ' progress_heading=\"' + progress_heading +'\"';
		}
		if(progress_percentag) 
		{	
			output += ' progress_percentag=\"' + progress_percentag +'\"';
		}
		output += '/]';
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(ProgressbarDialog.init, ProgressbarDialog);
</script>
<form action="/" method="get" accept-charset="utf-8">
    <table class="table table-bordered table-condensed">
		<tbody>
			<tr><td class="lable-all">Progress Bar Title</td>
    			<td><input class="input-medium" placeholder="Progress Bar Title" type="text" id="progress_heading" value="" name="progress_heading"></td>
    		</tr>				
			<tr><td class="lable-all">Progress Bar %</td>
    			<td><input class="input-medium" placeholder="Progress Bar %" type="text" id="progress_percentag" value="" name="progress_percentag"></td>
    		</tr>			
			<tr><td>&nbsp;</td>
				<td><a href="javascript:ProgressbarDialog.insert(ProgressbarDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
			</tr>
		</tbody>
	</table>
</form>