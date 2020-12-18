
{if empty($fields.key2.value)}
{assign var="value" value=$fields.key2.default_value }
{else}
{assign var="value" value=$fields.key2.value }
{/if}




<textarea  id='{$fields.key2.name}' name='{$fields.key2.name}'
rows="2"
cols="32"
title='' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}