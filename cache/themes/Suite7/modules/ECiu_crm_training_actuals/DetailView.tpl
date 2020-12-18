

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECiu_crm_training_actuals'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECiu_crm_training_actuals'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECiu_crm_training_actuals'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECiu_crm_training_actuals'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ECiu_crm_training_actuals", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="ECiu_crm_training_actuals_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<!-- PANEL CONTAINER HERE.. -->
<table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.number_of_pastors.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NUMBER_OF_PASTORS' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="int" field="number_of_pastors" width='37.5%'  >
{if !$fields.number_of_pastors.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.number_of_pastors.name}">
{sugar_number_format precision=0 var=$fields.number_of_pastors.value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.recourd_type.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RECOURD_TYPE' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="enum" field="recourd_type" width='37.5%'  >
{if !$fields.recourd_type.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.recourd_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.recourd_type.name}" value="{ $fields.recourd_type.options }">
{ $fields.recourd_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.recourd_type.name}" value="{ $fields.recourd_type.value }">
{ $fields.recourd_type.options[$fields.recourd_type.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_from.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_FROM' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetimecombo" field="date_from" width='37.5%'  >
{if !$fields.date_from.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.date_from.value) <= 0}
{assign var="value" value=$fields.date_from.default_value }
{else}
{assign var="value" value=$fields.date_from.value }
{/if} 
<span class="sugar_field" id="{$fields.date_from.name}">{$fields.date_from.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_to.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_TO' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetimecombo" field="date_to" width='37.5%'  >
{if !$fields.date_to.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.date_to.value) <= 0}
{assign var="value" value=$fields.date_to.default_value }
{else}
{assign var="value" value=$fields.date_to.value }
{/if} 
<span class="sugar_field" id="{$fields.date_to.name}">{$fields.date_to.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.language_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LANGUAGE' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="language_c" width='37.5%'  >
{if !$fields.language_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.language_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.language_c.name}" value="{ $fields.language_c.options }">
{ $fields.language_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.language_c.name}" value="{ $fields.language_c.value }">
{ $fields.language_c.options[$fields.language_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.paralleltracks.hidden}
{capture name="label" assign="label"}{sugar_translate label='Parallel Tracks' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="multienum" field="paralleltracks" width='37.5%'  >
{if !$fields.paralleltracks.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.paralleltracks.value) && ($fields.paralleltracks.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.paralleltracks.name}" value="{$fields.paralleltracks.value}">
{multienum_to_array string=$fields.paralleltracks.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.paralleltracks.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.resources.hidden}
{capture name="label" assign="label"}{sugar_translate label='Resource Provided' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="multienum" field="resources" width='37.5%'  >
{if !$fields.resources.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.resources.value) && ($fields.resources.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.resources.name}" value="{$fields.resources.value}">
{multienum_to_array string=$fields.resources.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.resources.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.contacts.hidden}
{capture name="label" assign="label"}{sugar_translate label='Other Pastoral Trainers' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="multienum" field="contacts" width='37.5%'  >
{if !$fields.contacts.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.contacts.value) && ($fields.contacts.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.contacts.name}" value="{$fields.contacts.value}">
{multienum_to_array string=$fields.contacts.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.contacts.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.providers.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROVIDERS' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="text" field="providers" width='37.5%'  >
{if !$fields.providers.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.providers.name|escape:'html'|url2html|nl2br}">{$fields.providers.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.additional_notes_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDITIONAL_NOTES' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="additional_notes_c" width='37.5%'  >
{if !$fields.additional_notes_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.additional_notes_c.name|escape:'html'|url2html|nl2br}">{$fields.additional_notes_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.eciu_crm_training_actuals_eciu_crm_degree_levels_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ECIU_CRM_TRAINING_ACTUALS_ECIU_CRM_DEGREE_LEVELS_FROM_ECIU_CRM_DEGREE_LEVELS_TITLE' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="eciu_crm_training_actuals_eciu_crm_degree_levels_name" width='37.5%'  >
{if !$fields.eciu_crm_training_actuals_eciu_crm_degree_levels_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.eciu_crm_t341a_levels_ida.value)}
{capture assign="detail_url"}index.php?module=ECiu_crm_degree_levels&action=DetailView&record={$fields.eciu_crm_t341a_levels_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="eciu_crm_t341a_levels_ida" class="sugar_field" data-id-value="{$fields.eciu_crm_t341a_levels_ida.value}">{$fields.eciu_crm_training_actuals_eciu_crm_degree_levels_name.value}</span>
{if !empty($fields.eciu_crm_t341a_levels_ida.value)}</a>{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.training_completed_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRAINING_COMPLETED' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="training_completed_c" width='37.5%'  >
{if !$fields.training_completed_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.training_completed_c.value) <= 0}
{assign var="value" value=$fields.training_completed_c.default_value }
{else}
{assign var="value" value=$fields.training_completed_c.value }
{/if} 
<span class="sugar_field" id="{$fields.training_completed_c.name}">{$fields.training_completed_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.country_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COUNTRY' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="country_c" width='37.5%' colspan='3' >
{if !$fields.country_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.country_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.country_c.name}" value="{ $fields.country_c.options }">
{ $fields.country_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.country_c.name}" value="{ $fields.country_c.value }">
{ $fields.country_c.options[$fields.country_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='ECiu_crm_training_actuals'}
<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='ECiu_crm_training_actuals'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="assigned_user_name" width='37.5%' colspan='3' >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>