<div class="login-form-container" >

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="functions/login_check.php" method="post">
        <h3>sign in</h3>
        <span>email</span>
        <input type="email" name="email" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="pass" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p> don't have an account ? <b id="close-login-btn2" class="linkz" >create one</b></p>

    </form>

</div>
