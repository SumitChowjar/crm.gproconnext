<?php /* Smarty version 2.6.29, created on 2018-08-02 11:50:32
         compiled from cache/modules/AOW_WorkFlow/CallsDetailViewdirection.tpl */ ?>


<?php if (is_string ( $this->_tpl_vars['fields']['direction']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['direction']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['direction']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['direction']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['direction']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['direction']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['direction']['options'][$this->_tpl_vars['fields']['direction']['value']]; ?>

<?php endif; ?>