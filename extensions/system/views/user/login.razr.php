<form class="uk-article uk-form uk-form-stacked" action="@url('@system/auth/authenticate')" method="post">

    <h1 class="uk-article-title">@trans('Login')</h1>

    <div class="uk-form-row">
        <label for="form-username" class="uk-form-label">@trans('Username')</label>
        <div class="uk-form-controls">
            <input id="form-username" type="text" name="credentials[username]" value="@last_username" required autofocus>
        </div>
    </div>

    <div class="uk-form-row">
        <label for="form-password" class="uk-form-label">@trans('Password') <a href="@url('@system/resetpassword/request')">@trans('(Forgot Password?)')</a></label>
        <div class="uk-form-controls">
            <input id="form-password" type="password" name="credentials[password]" value="" required>
        </div>
    </div>

    <div class="uk-form-row">
        <button class="uk-button uk-button-primary" type="submit">@trans('Submit')</button>
    </div>

    <p>
        <label><input type="checkbox" name="@remember_me_param"> @trans('Remember Me')</label><br>
    </p>

    <input type="hidden" name="redirect" value="@redirect">
    @token()

</form>