<h1>User: Edit</h1>

<?php
    print_r($this->user);
    //echo $this->user['id'];
?>

<form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user['id']; ?>">
    <label>Login</label>    <input type="text" name="login" value="<?php echo $this->user['login']; ?>"> <br />
    <label>Password</label> <input type="text" name="password" value="<?php echo $this->user['password']; ?>"> <br />
    <label>Role</label>
    <select name="role">
        <option value="default" <?php if ($this->user['role']== 'default') echo 'selected';  ?>>default</option>
        <option value="admin" <?php if ($this->user['role']== 'admin') echo 'selected';  ?>>admin</option>
        <option value="owner" <?php if ($this->user['role']== 'owner') echo 'selected';  ?>>owner</option>
    </select><br />
    
    <label>&nbsp;</label><input type="submit" />

</form>