<div class="login_container">

    <div class="login_form">
        <form action="pages/register.php" method="post" onsubmit="return validate_reg()">
            <table class="login_table">
                <tr>
                    <td colspan="2">
                        <h2>Rejestracja</h2>
                    </td>
                </tr>
                <tr>
                    <td>Login:</td>
                    <td>
                        <input type="text" name="reg_login" id="reg_login">
                    </td>
                </tr>
                <tr>
                    <td>E-Mail:</td>
                    <td>
                        <input type="email" name="reg_email" id="reg_email">
                    </td>
                </tr>
                <tr>
                    <td>Hasło:</td>
                    <td>
                        <input type="password" name="reg_pass" id="reg_pass">
                    </td>
                </tr>
                <tr>
                    <td>Powtórz hasło:</td>
                    <td>
                        <input type="password" name="reg_rep" id="reg_rep">
                    </td>
                </tr>
                <tr>
                    <td>Telefon:</td>
                    <td>
                        <input type="tel" pattern="[0-9]{9}" name="reg_tel" id="reg_tel">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Zarejestruj Się!" id="reg_button">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="reg_error"></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="login_form">
        <form action="pages/login.php" method="post" onsubmit="return validate_login()">
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
