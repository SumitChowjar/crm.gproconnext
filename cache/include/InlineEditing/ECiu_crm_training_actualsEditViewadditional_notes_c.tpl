
{if empty($fields.additional_notes_c.value)}
{assign var="value" value=$fields.additional_notes_c.default_value }
{else}
{assign var="value" value=$fields.additional_notes_c.value }
{/if}




<textarea  id='{$fields.additional_notes_c.name}' name='{$fields.additional_notes_c.name}'
rows="2"
cols="32"
title='' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}