
{if empty($fields.status_c.value)}
{assign var="value" value=$fields.status_c.default_value }
{else}
{assign var="value" value=$fields.status_c.value }
{/if}
{capture name=idname assign=idname}{$fields.status_c.name}{/capture}

{if isset($fields.status_c.value) && $fields.status_c.value != ''}
	{html_radios id="$idname"    name="$idname" title="Resource Status" options=$fields.status_c.options selected=$fields.status_c.value separator="<br>"}
{else}
	{html_radios id="$idname"   name="$idname" title="Resource Status" options=$fields.status_c.options selected=$fields.status_c.default separator="<br>"}
{/if}