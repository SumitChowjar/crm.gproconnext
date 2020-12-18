

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_ECiu_crm_ddc'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_ECiu_crm_ddc'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'ECiu_crm_ddc_subpanel_save_button');return false;" type="submit" name="ECiu_crm_ddc_subpanel_save_button" id="ECiu_crm_ddc_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if}  <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="ECiu_crm_ddc_subpanel_cancel_button" id="ECiu_crm_ddc_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">  <input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_ECiu_crm_ddc'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="ECiu_crm_ddc_subpanel_full_form_button" id="ECiu_crm_ddc_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form"> {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ECiu_crm_ddc", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="form_SubpanelQuickCreate_ECiu_crm_ddc_tabs"
>
<div >
<div id="detailpanel_1" >
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_{$module}_Subpanel'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='code1_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CODE1' module='ECiu_crm_ddc'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.code1.value) <= 0}
{assign var="value" value=$fields.code1.default_value }
{else}
{assign var="value" value=$fields.code1.value }
{/if}  
<input type='text' name='{$fields.code1.name}' 
id='{$fields.code1.name}' size='30' 
maxlength='3' 
value='{$value}' title=''      accesskey='7'  >
<td valign="top" id='name1_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME1' module='ECiu_crm_ddc'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.name1.value) <= 0}
{assign var="value" value=$fields.name1.default_value }
{else}
{assign var="value" value=$fields.name1.value }
{/if}  
<input type='text' name='{$fields.name1.name}' 
id='{$fields.name1.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='code2_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CODE2' module='ECiu_crm_ddc'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.code2.value) <= 0}
{assign var="value" value=$fields.code2.default_value }
{else}
{assign var="value" value=$fields.code2.value }
{/if}  
<input type='text' name='{$fields.code2.name}' 
id='{$fields.code2.name}' size='30' 
maxlength='3' 
value='{$value}' title=''      >
<td valign="top" id='name2_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME2' module='ECiu_crm_ddc'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.name2.value) <= 0}
{assign var="value" value=$fields.name2.default_value }
{else}
{assign var="value" value=$fields.name2.value }
{/if}  
<input type='text' name='{$fields.name2.name}' 
id='{$fields.name2.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='code3_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CODE3' module='ECiu_crm_ddc'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.code3.value) <= 0}
{assign var="value" value=$fields.code3.default_value }
{else}
{assign var="value" value=$fields.code3.value }
{/if}  
<input type='text' name='{$fields.code3.name}' 
id='{$fields.code3.name}' size='30' 
maxlength='3' 
value='{$value}' title=''      >
<td valign="top" id='name3_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME3' module='ECiu_crm_ddc'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.name3.value) <= 0}
{assign var="value" value=$fields.name3.default_value }
{else}
{assign var="value" value=$fields.name3.value }
{/if}  
<input type='text' name='{$fields.name3.name}' 
id='{$fields.name3.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='code4_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CODE4' module='ECiu_crm_ddc'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.code4.value) <= 0}
{assign var="value" value=$fields.code4.default_value }
{else}
{assign var="value" value=$fields.code4.value }
{/if}  
<input type='text' name='{$fields.code4.name}' 
id='{$fields.code4.name}' size='30' 
maxlength='7' 
value='{$value}' title=''      >
<td valign="top" id='name4_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME4' module='ECiu_crm_ddc'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.name4.value) <= 0}
{assign var="value" value=$fields.name4.default_value }
{else}
{assign var="value" value=$fields.name4.value }
{/if}  
<input type='text' name='{$fields.name4.name}' 
id='{$fields.name4.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div></div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_ECiu_crm_ddc'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_ECiu_crm_ddc'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'ECiu_crm_ddc_subpanel_save_button');return false;" type="submit" name="ECiu_crm_ddc_subpanel_save_button" id="ECiu_crm_ddc_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if}  <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="ECiu_crm_ddc_subpanel_cancel_button" id="ECiu_crm_ddc_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">  <input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_ECiu_crm_ddc'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="ECiu_crm_ddc_subpanel_full_form_button" id="ECiu_crm_ddc_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form"> {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ECiu_crm_ddc", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_ECiu_crm_ddc",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_ECiu_crm_ddc) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>{literal}
<script type="text/javascript">
addForm('form_SubpanelQuickCreate_ECiu_crm_ddc');addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'code1', 'varchar', false,'{/literal}{sugar_translate label='LBL_CODE1' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'name1', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAME1' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'code2', 'varchar', false,'{/literal}{sugar_translate label='LBL_CODE2' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'name2', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAME2' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'code3', 'varchar', false,'{/literal}{sugar_translate label='LBL_CODE3' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'name3', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAME3' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'code4', 'varchar', false,'{/literal}{sugar_translate label='LBL_CODE4' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'name4', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAME4' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_ddc', 'key_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_KEY_ID' module='ECiu_crm_ddc' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_ECiu_crm_ddc', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ECiu_crm_ddc' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ECiu_crm_ddc' for_js=true}{literal}', 'assigned_user_id' );
</script>{/literal}
