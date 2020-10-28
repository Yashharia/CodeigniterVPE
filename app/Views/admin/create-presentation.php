<?php if (isset($message) && !empty($message)) :
    echo $message;
?>

<?php endif; ?>
<?php echo \Config\Services::validation()->listErrors() ?>
<?php echo form_open('admin/createpresentation'); ?>
<p>
    Enter your name <?php echo form_input('name', '', ''); ?>
</p>

<p>
    Enter your email <?php echo form_input('email', '', ''); ?>
</p>

<p>
    Enter your password <?php echo form_password('password', '', ''); ?>
</p>
<p>
    <?php echo form_submit('mybutton', 'Create Now', ''); ?>
</p>
<?php form_close(); ?>