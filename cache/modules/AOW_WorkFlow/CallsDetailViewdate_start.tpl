

    {if strlen($fields.date_start.value) <= 0}
        {assign var="value" value=$fields.date_start.default_value }
    {else}
        {assign var="value" value=$fields.date_start.value }
    {/if}



<span class="sugar_field" id="{$fields.date_start.name}">{$value}</span>
