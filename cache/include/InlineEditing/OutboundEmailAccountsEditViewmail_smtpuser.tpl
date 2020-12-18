
{if strlen($fields.mail_smtpuser.value) <= 0}
{assign var="value" value=$fields.mail_smtpuser.default_value }
{else}
{assign var="value" value=$fields.mail_smtpuser.value }
{/if}  
<input type='text' name='{$fields.mail_smtpuser.name}' 
    id='{$fields.mail_smtpuser.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''  tabindex='1'      >