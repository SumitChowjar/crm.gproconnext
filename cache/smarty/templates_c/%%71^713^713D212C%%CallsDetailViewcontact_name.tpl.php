<?php /* Smarty version 2.6.29, created on 2018-08-02 11:50:32
         compiled from cache/modules/AOW_WorkFlow/CallsDetailViewcontact_name.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_ajax_url', 'cache/modules/AOW_WorkFlow/CallsDetailViewcontact_name.tpl', 5, false),)), $this); ?>

 
<?php if (! empty ( $this->_tpl_vars['fields']['contact_id']['value'] )): ?>
<?php ob_start(); ?>index.php?module=Contacts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['contact_id']['value']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('detail_url', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url' => $this->_tpl_vars['detail_url']), $this);?>
"><?php endif; ?>
<span id="contact_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['contact_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['contact_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['contact_id']['value'] )): ?></a><?php endif; ?>