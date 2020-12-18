

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
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECiu_crm_resources'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECiu_crm_resources'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECiu_crm_resources'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECiu_crm_resources'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ECiu_crm_resources", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="ECiu_crm_resources_detailview_tabs"
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
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="name" field="name" width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.file_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FILE_NAME' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="file_name" width='37.5%'  >
{if !$fields.file_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.file_name.value) <= 0}
{assign var="value" value=$fields.file_name.default_value }
{else}
{assign var="value" value=$fields.file_name.value }
{/if} 
<span class="sugar_field" id="{$fields.file_name.name}">{$fields.file_name.value}</span>
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
{if !$fields.url.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_URL' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="url" width='37.5%'  >
{if !$fields.url.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.url.name|escape:'html'|url2html|nl2br}">{$fields.url.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="description" width='37.5%'  >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
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
{if !$fields.featured.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FEATURED' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="bool" field="featured" width='37.5%'  >
{if !$fields.featured.hidden}
{counter name="panelFieldCount"}

{if strval($fields.featured.value) == "1" || strval($fields.featured.value) == "yes" || strval($fields.featured.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.featured.name}" id="{$fields.featured.name}" value="$fields.featured.value" disabled="true" {$checked}>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.category.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CATEGORY' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="enum" field="category" width='37.5%'  >
{if !$fields.category.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.category.options)}
<input type="hidden" class="sugar_field" id="{$fields.category.name}" value="{ $fields.category.options }">
{ $fields.category.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.category.name}" value="{ $fields.category.value }">
{ $fields.category.options[$fields.category.value]}
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
{if !$fields.language_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LANGUAGE' module='ECiu_crm_resources'}{/capture}
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
{if !$fields.submission_source_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBMISSION_SOURCE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="varchar" field="submission_source_c" width='37.5%'  >
{if !$fields.submission_source_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.submission_source_c.value) <= 0}
{assign var="value" value=$fields.submission_source_c.default_value }
{else}
{assign var="value" value=$fields.submission_source_c.value }
{/if} 
<span class="sugar_field" id="{$fields.submission_source_c.name}">{$fields.submission_source_c.value}</span>
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
{if !$fields.downloaded_times.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DOWNLOADED_TIMES' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="int" field="downloaded_times" width='37.5%'  >
{if !$fields.downloaded_times.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.downloaded_times.name}">
{sugar_number_format precision=0 var=$fields.downloaded_times.value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.viewed_times.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VIEWED_TIMES' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="int" field="viewed_times" width='37.5%'  >
{if !$fields.viewed_times.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.viewed_times.name}">
{sugar_number_format precision=0 var=$fields.viewed_times.value}
</span>
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
{if !$fields.image_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_IMAGE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="image" field="image_c" width='37.5%' colspan='3' >
{if !$fields.image_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.image_c.name}">
<img src="index.php?entryPoint=download&id={$fields.id.value}_{$fields.image_c.name}{$fields.width.value}&type={$module}" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}{else}50{/if}">
</span>
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
{if !$fields.hours_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_HOURS' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="varchar" field="hours_c" width='37.5%' colspan='3' >
{if !$fields.hours_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.hours_c.value) <= 0}
{assign var="value" value=$fields.hours_c.default_value }
{else}
{assign var="value" value=$fields.hours_c.value }
{/if} 
<span class="sugar_field" id="{$fields.hours_c.name}">{$fields.hours_c.value}</span>
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
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetime" field="date_entered" width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}


{assign var="value" value=2018-08-01 }
<span class="sugar_field" id="{$fields.date_entered.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetime" field="date_modified" width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}


{assign var="value" value=2018-08-01 }
<span class="sugar_field" id="{$fields.date_modified.name}">{$value}</span>
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
{if !$fields.gpro_courses_eciu_crm_resources_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GPRO_COURSES_ECIU_CRM_RESOURCES_FROM_GPRO_COURSES_TITLE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="gpro_courses_eciu_crm_resources_name" width='37.5%'  >
{if !$fields.gpro_courses_eciu_crm_resources_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.gpro_courses_eciu_crm_resourcesgpro_courses_ida.value)}
{capture assign="detail_url"}index.php?module=gpro_Courses&action=DetailView&record={$fields.gpro_courses_eciu_crm_resourcesgpro_courses_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="gpro_courses_eciu_crm_resourcesgpro_courses_ida" class="sugar_field" data-id-value="{$fields.gpro_courses_eciu_crm_resourcesgpro_courses_ida.value}">{$fields.gpro_courses_eciu_crm_resources_name.value}</span>
{if !empty($fields.gpro_courses_eciu_crm_resourcesgpro_courses_ida.value)}</a>{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="assigned_user_name" width='37.5%'  >
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
{sugar_translate label='LBL_EDITVIEW_PANEL2' module='ECiu_crm_resources'}
<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_EDITVIEW_PANEL2' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.status_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="radioenum" field="status_c" width='37.5%'  >
{if !$fields.status_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.status_c.name}">
{ $fields.status_c.options[$fields.status_c.value]}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.suggested_by_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUGGESTED_BY' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="relate" field="suggested_by_c" width='37.5%'  >
{if !$fields.suggested_by_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.contact_id_c.value)}
{capture assign="detail_url"}index.php?module=Contacts&action=DetailView&record={$fields.contact_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="contact_id_c" class="sugar_field" data-id-value="{$fields.contact_id_c.value}">{$fields.suggested_by_c.value}</span>
{if !empty($fields.contact_id_c.value)}</a>{/if}
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
{if !$fields.custom_message_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CUSTOM_MESSAGE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="text" field="custom_message_c" width='37.5%' colspan='3' >
{if !$fields.custom_message_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.custom_message_c.name|escape:'html'|url2html|nl2br}">{$fields.custom_message_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
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
{if !$fields.approved_rejected_on_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_APPROVED_REJECTED_ON' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetimecombo" field="approved_rejected_on_c" width='37.5%'  >
{if !$fields.approved_rejected_on_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.approved_rejected_on_c.value) <= 0}
{assign var="value" value=$fields.approved_rejected_on_c.default_value }
{else}
{assign var="value" value=$fields.approved_rejected_on_c.value }
{/if} 
<span class="sugar_field" id="{$fields.approved_rejected_on_c.name}">{$fields.approved_rejected_on_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.approved_rejected_by_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_APPROVED_REJECTED_BY' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="relate" field="approved_rejected_by_c" width='37.5%'  >
{if !$fields.approved_rejected_by_c.hidden}
{counter name="panelFieldCount"}

<span id="user_id_c" class="sugar_field" data-id-value="{$fields.user_id_c.value}">{$fields.approved_rejected_by_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL2").style.display='none';</script>
{/if}
<div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(3);">
<img border="0" id="detailpanel_3_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(3);">
<img border="0" id="detailpanel_3_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='ECiu_crm_resources'}
<script>
      document.getElementById('detailpanel_3').className += ' expanded';
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
{if !$fields.is_incentive.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_IS_INCENTIVE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="bool" field="is_incentive" width='37.5%'  >
{if !$fields.is_incentive.hidden}
{counter name="panelFieldCount"}

{if strval($fields.is_incentive.value) == "1" || strval($fields.is_incentive.value) == "yes" || strval($fields.is_incentive.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.is_incentive.name}" id="{$fields.is_incentive.name}" value="$fields.is_incentive.value" disabled="true" {$checked}>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.goals_entered_set.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GOALS_ENTERED_SET' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="bool" field="goals_entered_set" width='37.5%'  >
{if !$fields.goals_entered_set.hidden}
{counter name="panelFieldCount"}

{if strval($fields.goals_entered_set.value) == "1" || strval($fields.goals_entered_set.value) == "yes" || strval($fields.goals_entered_set.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.goals_entered_set.name}" id="{$fields.goals_entered_set.name}" value="$fields.goals_entered_set.value" disabled="true" {$checked}>
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
{if !$fields.allowed_downloads_set.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ALLOWED_DOWNLOADS_SET' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="allowed_downloads_set" width='37.5%'  >
{if !$fields.allowed_downloads_set.hidden}
{counter name="panelFieldCount"}

{if strval($fields.allowed_downloads_set.value) == "1" || strval($fields.allowed_downloads_set.value) == "yes" || strval($fields.allowed_downloads_set.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.allowed_downloads_set.name}" id="{$fields.allowed_downloads_set.name}" value="$fields.allowed_downloads_set.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.allowed_downloads_value.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ALLOWED_DOWNLOADS_VALUE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="allowed_downloads_value" width='37.5%'  >
{if !$fields.allowed_downloads_value.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.allowed_downloads_value.name}">
{sugar_number_format precision=0 var=$fields.allowed_downloads_value.value}
</span>
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
{if !$fields.earned_points_set.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EARNED_POINTS_SET' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="earned_points_set" width='37.5%'  >
{if !$fields.earned_points_set.hidden}
{counter name="panelFieldCount"}

{if strval($fields.earned_points_set.value) == "1" || strval($fields.earned_points_set.value) == "yes" || strval($fields.earned_points_set.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.earned_points_set.name}" id="{$fields.earned_points_set.name}" value="$fields.earned_points_set.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.earned_points_value.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EARNED_POINTS_VALUE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="earned_points_value" width='37.5%'  >
{if !$fields.earned_points_value.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.earned_points_value.name}">
{sugar_number_format precision=0 var=$fields.earned_points_value.value}
</span>
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
{if !$fields.valid_from_set.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALID_FROM_SET' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="valid_from_set" width='37.5%'  >
{if !$fields.valid_from_set.hidden}
{counter name="panelFieldCount"}

{if strval($fields.valid_from_set.value) == "1" || strval($fields.valid_from_set.value) == "yes" || strval($fields.valid_from_set.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.valid_from_set.name}" id="{$fields.valid_from_set.name}" value="$fields.valid_from_set.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.valid_from_value.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALID_FROM_VALUE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="date" field="valid_from_value" width='37.5%'  >
{if !$fields.valid_from_value.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.valid_from_value.value) <= 0}
{assign var="value" value=$fields.valid_from_value.default_value }
{else}
{assign var="value" value=$fields.valid_from_value.value }
{/if}
<span class="sugar_field" id="{$fields.valid_from_value.name}">{$value}</span>
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
{if !$fields.valid_through_set.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALID_THROUGH_SET' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="valid_through_set" width='37.5%'  >
{if !$fields.valid_through_set.hidden}
{counter name="panelFieldCount"}

{if strval($fields.valid_through_set.value) == "1" || strval($fields.valid_through_set.value) == "yes" || strval($fields.valid_through_set.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.valid_through_set.name}" id="{$fields.valid_through_set.name}" value="$fields.valid_through_set.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.valid_through_value.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALID_THROUGH_VALUE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="date" field="valid_through_value" width='37.5%'  >
{if !$fields.valid_through_value.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.valid_through_value.value) <= 0}
{assign var="value" value=$fields.valid_through_value.default_value }
{else}
{assign var="value" value=$fields.valid_through_value.value }
{/if}
<span class="sugar_field" id="{$fields.valid_through_value.name}">{$value}</span>
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
{if !$fields.access_level_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCESS_LEVEL' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="access_level_c" width='37.5%' colspan='3' >
{if !$fields.access_level_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.access_level_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.access_level_c.name}" value="{ $fields.access_level_c.options }">
{ $fields.access_level_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.access_level_c.name}" value="{ $fields.access_level_c.value }">
{ $fields.access_level_c.options[$fields.access_level_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(3, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
<div id='detailpanel_4' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(4);">
<img border="0" id="detailpanel_4_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(4);">
<img border="0" id="detailpanel_4_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_DETAILVIEW_PANEL3' module='ECiu_crm_resources'}
<script>
      document.getElementById('detailpanel_4').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_DETAILVIEW_PANEL3' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.accounts_eciu_crm_resources_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNTS_ECIU_CRM_RESOURCES_1_FROM_ACCOUNTS_TITLE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="accounts_eciu_crm_resources_1_name" width='37.5%'  >
{if !$fields.accounts_eciu_crm_resources_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.accounts_eciu_crm_resources_1accounts_ida.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.accounts_eciu_crm_resources_1accounts_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="accounts_eciu_crm_resources_1accounts_ida" class="sugar_field" data-id-value="{$fields.accounts_eciu_crm_resources_1accounts_ida.value}">{$fields.accounts_eciu_crm_resources_1_name.value}</span>
{if !empty($fields.accounts_eciu_crm_resources_1accounts_ida.value)}</a>{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.contacts_eciu_crm_resources_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONTACTS_ECIU_CRM_RESOURCES_1_FROM_CONTACTS_TITLE' module='ECiu_crm_resources'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="contacts_eciu_crm_resources_1_name" width='37.5%'  >
{if !$fields.contacts_eciu_crm_resources_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.contacts_eciu_crm_resources_1contacts_ida.value)}
{capture assign="detail_url"}index.php?module=Contacts&action=DetailView&record={$fields.contacts_eciu_crm_resources_1contacts_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="contacts_eciu_crm_resources_1contacts_ida" class="sugar_field" data-id-value="{$fields.contacts_eciu_crm_resources_1contacts_ida.value}">{$fields.contacts_eciu_crm_resources_1_name.value}</span>
{if !empty($fields.contacts_eciu_crm_resources_1contacts_ida.value)}</a>{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(4, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DETAILVIEW_PANEL3").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>