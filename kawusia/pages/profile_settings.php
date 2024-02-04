<div class="login_container">
    <div class="login_form">
        <form action="/pages/register.php" method="post" onsubmit="return validate_login()">
            <table class="login_table">
                <tr>
                    <td colspan="2">
                        <h2>
                            Logowanie
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i>Login lub Email:</i>
                    </td>
                    <td>
                        <input type="text" name="login" id="login_login" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i>Hasło:</i>
                    </td>
                    <td>
                        <input type="password" name="password" id="login_password" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Zaloguj Się!" id="login_button">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="login_error">
    
                    </td>
                </tr>
                
            </table>
            
        </form>
    </div>

</div>