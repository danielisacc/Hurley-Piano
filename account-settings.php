<!-- page opened within the parent portal using javascript -->
<div class="tile signin-form update-settings" id="account-settings" style="display: none;">
    <h1>Account Settings</h1>
    <p class="error" id="error"></p>
    <form action="./scripts/update_settings.php" method="POST">
            <div class="form-inner">
                <label for="first-name">First Name</label>
                <label><a onclick="setting_update('first-name')"><?= $user['first_name']?></a></label>
            </div>

            <input type="text" id="first-name" name="first-name">

            <div class="form-inner">
                <label for="last-name">Last Name</label>
                <label><a onclick="setting_update('last-name')"><?= $user['last_name']?></a></label>
            </div>

            <input type="text" id="last-name" name="last-name">

            <div class="form-inner">
                <label for="email">Email</label>
                <label><a onclick="setting_update('email')"><?= $user['email']?></a></label>
            </div>

            <input type="text" id="email" name="email">

            <div class="form-inner">
                <label for="birth">Date of Birth</label>
                <label><a onclick="setting_update('birth')"><?= $user['birth']?></a></label>
            </div>

            <input type="date" id="birth" name="birth">
            
            <div class="form-inner">
                <label for="country">Country</label>
                <label><a onclick="setting_update('country')"><?= $user['country']?></a></label>
            </div>
            <input type="submit" value="Save Settings">
    </form>
</div>
<script>
    // Js to make the account settings pane open or close
    function setting_update(field) {
        if (document.getElementById(field).style.display === "none") {
            document.getElementById(field).style.display = "block";
        }
        else {
            document.getElementById(field).style.display = "none";
        }
    }
</script>