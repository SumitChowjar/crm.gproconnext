<?php
//Create custom code to add country dropdown
$dictionary['Contact']['fields']['primary_address_country']['type'] = 'enum';
$dictionary['Contact']['fields']['primary_address_country']['options'] = 'countries_dom';
$dictionary['Contact']['fields']['alt_address_country']['type'] = 'enum';
$dictionary['Contact']['fields']['alt_address_country']['options'] = 'countries_dom';
?>
