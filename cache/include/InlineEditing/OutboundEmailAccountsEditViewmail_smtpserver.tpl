
{if strlen($fields.mail_smtpserver.value) <= 0}
{assign var="value" value=$fields.mail_smtpserver.default_value }
{else}
{assign var="value" value=$fields.mail_smtpserver.value }
{/if}  
<input type='text' name='{$fields.mail_smtpserver.name}' 
    id='{$fields.mail_smtpserver.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''  tabindex='1'      >