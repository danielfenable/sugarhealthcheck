
</form>
{literal}
<script>
function toggleInlineSearch()
{
    var $trigger = $("#tabFormAdvLink");
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
{/literal}
        $trigger.attr("title", "{sugar_translate label='LBL_ALT_HIDE_OPTIONS'}")
            .addClass('expanded');
{literal}
    }else{
{/literal}
        $trigger.attr("title", "{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}")
            .removeClass("expanded");
{literal}			
        document.getElementById('showSSDIV').value = 'no';		
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
</script>
{/literal}