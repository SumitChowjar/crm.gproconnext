<?php /* Smarty version 2.6.29, created on 2018-08-08 12:44:52
         compiled from cache/modules/AOW_WorkFlow/ECiu_crm_resourcesDetailViewid.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['id']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['id']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['id']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['id']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['id']['value']; ?>
</span>