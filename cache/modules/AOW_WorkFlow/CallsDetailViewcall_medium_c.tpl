

{if is_string($fields.call_medium_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.call_medium_c.name}" value="{ $fields.call_medium_c.options }">
{ $fields.call_medium_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.call_medium_c.name}" value="{ $fields.call_medium_c.value }">
{ $fields.call_medium_c.options[$fields.call_medium_c.value]}
{/if}
