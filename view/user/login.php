<div class = "container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <!-- example taken from: https://bootsnipp.com/snippets/featured/simple-login-form-bootsnipp-style-colorgraph -->
            <div class="wrapper">
                <form action="<?= URL ?>user/loginProcess" method="post" name="Login_Form" class="form-signin">
                    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                    <hr class="colorgraph"><br>

                    <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>

                    <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
                </form>
            </div>

        </div>
    </div>
</div>