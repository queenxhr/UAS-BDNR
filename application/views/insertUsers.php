<div id="container">
 
<h1>Welcome to CodeIgniter & MongoDB!</h1>
 
    <center>
    <a href="<?php echo site_url('welcome')?>">View User</a>
    </center>
     
 
<form action="<?php echo base_url('welcome/insertProcess')?>" method="post">
 
<table style="margin:20px auto;">
 
<tr>
 
<td>Username</td>
 
 
<td><input type="text" name="username"></td>
 
            </tr>
 
 
<tr>
 
<td>Phone</td>
 
 
<td><input type="text" name="phone"></td>
 
            </tr>
 
 
<tr>
 
<td>Unique Id</td>
 
 
<td><input type="text" name="unik"></td>
 
            </tr>
 
 
<tr>
 
<td><button type="submit">Insert</button></td>
 
            </tr>
 
             
        </table>
 
 
    </form>
 
     
 
 
 
Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
 
</div>