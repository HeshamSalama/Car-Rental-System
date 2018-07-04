<form method="post" id="UpdateProfile">
    <table>
        <tr>
            <td class="text-blue">
                FirstName
            </td>
            <td class="text-dark">
                <input type="text" id="fname" value="<?php echo $_SESSION['fname']; ?>">
                <i id="FNameError" class="fa fa-warning"></i>
            </td>
        </tr>
        <tr>
            <td class="text-blue">
                LastName
            </td>
            <td class="text-dark">
                <input type="text" id="lname" value="<?php echo $_SESSION['lname']; ?>">
                <i id="LNameError" class="fa fa-warning"></i>

            </td>
        </tr>
        <tr>
            <td class="text-blue">
                Phone
            </td>
            <td class="text-dark">
                <input type="text" id="phone" value="<?php echo $_SESSION['phone']; ?>">
                <i id="PhoneError" class="fa fa-warning"></i>

            </td>
        </tr>
        <tr>
            <td class="text-blue">
                Address
            </td>
            <td class="text-dark">
                <input type="text" id="address" value="<?php echo $_SESSION['address']; ?>">
                <i id="AddressError" class="fa fa-warning"></i>

            </td>
        </tr>
        <tr class="hidden">
            <td class="text-blue">
                LastName
            </td>
            <td class="text-dark">
                <input type="text" id="email" value="<?php echo $_SESSION['email']; ?>">
                <i id="EmailError" class="fa fa-warning"></i>

            </td>
        </tr>
            <input type="text" id="id" value="<?php echo $_SESSION['id']; ?>" class="hidden">

        <tr>
            <td class="text-blue">
                Password
            </td>
            <td class="text-dark">
                <input type="password" id="password" value="">
                <i id="PasswordError" class="fa fa-warning"></i>

            </td>
        </tr>
        <tr>
            <td class="text-blue">
                Confirm Password
            </td>
            <td class="text-dark">
                <input type="password" id="confirmPassword" value="">
                <i id="CoPasswordError" class="fa fa-warning"></i>

            </td>
        </tr>
    </table>
    <div class="col-xs-12 text-right">
        <button class="btn-blue" type="submit" name="update-info">Save</button>
    </div>
    <div id="status" style="margin-top:50px">
    </div>
</form>