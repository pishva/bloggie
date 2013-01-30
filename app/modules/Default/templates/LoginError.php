<center>
<div style="margin-top:140px;margin-bottom:90px">
  <h2><b style="color:#F00;"><?php echo $t['_title']; ?></b> The Admin Page</h2>
  <form  action="<?php echo $ro->gen('login'); ?>" method="post">
    <fieldset>
      <div>
        <div>
          <label for="username">Username</label>
        </div>
        <div>
          <input type="text" id="username" name="username" />
        </div>
      </div>
      <div>
        <div>
          <label for="password">Password</label>
        </div>
        <div>
          <input type="password" id="password" name="password" />
        </div>
         <div style="margin-top:5px">
        <input type="checkbox" id="remember" name="remember" value="remember" />
        <label for="remember">Remmber Me</label>
      </div>
      </div>
    </fieldset>
    <fieldset>
      <div>
        <input type="submit" name="login" value="Log In" />
      </div>
    </fieldset>  
  </form>
</div>
</center>