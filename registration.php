<?php
require_once('inc/header.php');
?>
    <article class="main-content">
        <form action="/func/userRegistration.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="test" required class="form-control" id="exampleInputEmail1" placeholder="username"
                       name="user[username ]">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password"
                       name="user[pass]">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </article>
<?php
require_once('inc/footer.php');
?>