
{if strlen($fields.file_name.value) <= 0}
{assign var="value" value=$fields.file_name.default_value }
{else}
{assign var="value" value=$fields.file_name.value }
{/if}  
<input type='text' name='{$fields.file_name.name}' 
    id='{$fields.file_name.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >