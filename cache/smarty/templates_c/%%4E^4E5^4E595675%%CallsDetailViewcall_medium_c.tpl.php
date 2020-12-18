<?php /* Smarty version 2.6.29, created on 2018-08-02 11:50:32
         compiled from cache/modules/AOW_WorkFlow/CallsDetailViewcall_medium_c.tpl */ ?>


<?php if (is_string ( $this->_tpl_vars['fields']['call_medium_c']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['call_medium_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['call_medium_c']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['call_medium_c']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['call_medium_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['call_medium_c']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['call_medium_c']['options'][$this->_tpl_vars['fields']['call_medium_c']['value']]; ?>

<?php endif; ?>