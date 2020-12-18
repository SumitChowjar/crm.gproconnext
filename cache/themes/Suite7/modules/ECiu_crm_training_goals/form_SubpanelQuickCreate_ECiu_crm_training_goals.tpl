

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
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_ECiu_crm_training_goals'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_ECiu_crm_training_goals'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'ECiu_crm_training_goals_subpanel_save_button');return false;" type="submit" name="ECiu_crm_training_goals_subpanel_save_button" id="ECiu_crm_training_goals_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if}  <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="ECiu_crm_training_goals_subpanel_cancel_button" id="ECiu_crm_training_goals_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">  <input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_ECiu_crm_training_goals'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="ECiu_crm_training_goals_subpanel_full_form_button" id="ECiu_crm_training_goals_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form"> {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ECiu_crm_training_goals", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="form_SubpanelQuickCreate_ECiu_crm_training_goals_tabs"
>
<div >
<div id="detailpanel_1" >
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_{$module}_Subpanel'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='y2016_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_Y2016' module='ECiu_crm_training_goals'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.y2016.value) <= 0}
{assign var="value" value=$fields.y2016.default_value }
{else}
{assign var="value" value=$fields.y2016.value }
{/if}  
<input type='text' name='{$fields.y2016.name}' 
id='{$fields.y2016.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'   accesskey='7'   >
<td valign="top" id='y2017_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_Y2017' module='ECiu_crm_training_goals'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.y2017.value) <= 0}
{assign var="value" value=$fields.y2017.default_value }
{else}
{assign var="value" value=$fields.y2017.value }
{/if}  
<input type='text' name='{$fields.y2017.name}' 
id='{$fields.y2017.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='y2018_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_Y2018' module='ECiu_crm_training_goals'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.y2018.value) <= 0}
{assign var="value" value=$fields.y2018.default_value }
{else}
{assign var="value" value=$fields.y2018.value }
{/if}  
<input type='text' name='{$fields.y2018.name}' 
id='{$fields.y2018.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
<td valign="top" id='y2019_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_Y2019' module='ECiu_crm_training_goals'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.y2019.value) <= 0}
{assign var="value" value=$fields.y2019.default_value }
{else}
{assign var="value" value=$fields.y2019.value }
{/if}  
<input type='text' name='{$fields.y2019.name}' 
id='{$fields.y2019.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='y2020_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_Y2020' module='ECiu_crm_training_goals'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.y2020.value) <= 0}
{assign var="value" value=$fields.y2020.default_value }
{else}
{assign var="value" value=$fields.y2020.value }
{/if}  
<input type='text' name='{$fields.y2020.name}' 
id='{$fields.y2020.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
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
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_ECiu_crm_training_goals'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_ECiu_crm_training_goals'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'ECiu_crm_training_goals_subpanel_save_button');return false;" type="submit" name="ECiu_crm_training_goals_subpanel_save_button" id="ECiu_crm_training_goals_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if}  <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="ECiu_crm_training_goals_subpanel_cancel_button" id="ECiu_crm_training_goals_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">  <input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_ECiu_crm_training_goals'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="ECiu_crm_training_goals_subpanel_full_form_button" id="ECiu_crm_training_goals_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form"> {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ECiu_crm_training_goals", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_ECiu_crm_training_goals",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_ECiu_crm_training_goals) {rdelim});
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
addForm('form_SubpanelQuickCreate_ECiu_crm_training_goals');addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidateRange('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'y2016', 'int', false, '{/literal}{sugar_translate label='LBL_Y2016' module='ECiu_crm_training_goals' for_js=true}{literal}', 0, false);
addToValidateRange('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'y2017', 'int', false, '{/literal}{sugar_translate label='LBL_Y2017' module='ECiu_crm_training_goals' for_js=true}{literal}', 0, false);
addToValidateRange('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'y2018', 'int', false, '{/literal}{sugar_translate label='LBL_Y2018' module='ECiu_crm_training_goals' for_js=true}{literal}', 0, false);
addToValidateRange('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'y2019', 'int', false, '{/literal}{sugar_translate label='LBL_Y2019' module='ECiu_crm_training_goals' for_js=true}{literal}', 0, false);
addToValidateRange('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'y2020', 'int', false, '{/literal}{sugar_translate label='LBL_Y2020' module='ECiu_crm_training_goals' for_js=true}{literal}', 0, false);
addToValidateRange('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'total', 'int', false, '{/literal}{sugar_translate label='Total' module='ECiu_crm_training_goals' for_js=true}{literal}', 0, false);
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'email', 'varchar', false,'{/literal}{sugar_translate label='Email' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'accounts_eciu_crm_training_goals_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNTS_ECIU_CRM_TRAINING_GOALS_1_FROM_ACCOUNTS_TITLE' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'leads_eciu_crm_training_goals_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_LEADS_ECIU_CRM_TRAINING_GOALS_1_FROM_LEADS_TITLE' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'eciu_crm_training_goals_contacts_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ECIU_CRM_TRAINING_GOALS_CONTACTS_FROM_CONTACTS_TITLE' module='ECiu_crm_training_goals' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_ECiu_crm_training_goals', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ECiu_crm_training_goals' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ECiu_crm_training_goals' for_js=true}{literal}', 'assigned_user_id' );
</script>{/literal}
