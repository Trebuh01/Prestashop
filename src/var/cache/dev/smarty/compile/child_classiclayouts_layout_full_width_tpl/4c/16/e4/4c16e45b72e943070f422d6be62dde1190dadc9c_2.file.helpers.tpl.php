<?php
/* Smarty version 3.1.48, created on 2024-11-22 19:00:54
  from '/var/www/html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6740c6d65d0d11_34057043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c16e45b72e943070f422d6be62dde1190dadc9c' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1732285427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740c6d65d0d11_34057043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/child_classiclayouts_layout_full_width_tpl/4c/16/e4/4c16e45b72e943070f422d6be62dde1190dadc9c_2.file.helpers.tpl.php',
    'uid' => '4c16e45b72e943070f422d6be62dde1190dadc9c',
    'call_name' => 'smarty_template_function_renderLogo_2161679256740c6d65ce0f1_75671655',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2161679256740c6d65ce0f1_75671655 */
if (!function_exists('smarty_template_function_renderLogo_2161679256740c6d65ce0f1_75671655')) {
function smarty_template_function_renderLogo_2161679256740c6d65ce0f1_75671655(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_2161679256740c6d65ce0f1_75671655 */
}
