<!DOCTYPE html>
<html>

<head>
    <title>PHP Form Validation</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php require "process_form.php" ?>

    <p class="msg">Registration Form </p>
    <span class="error">(*) this indicates a required field</span>

    <!-- i used 'post' method for secure data sharing -->

    <form method="post" class="container" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr class="tag">
                <td><label for="userName">Enter your Username</label>
                    <span class="error">*</span>
                </td>
                <td><input type="text" name="userName" class="details"></td>
            </tr>
            <tr>
                <td></td>
                <td><span class="error">
                        <?php echo $userNameErr; ?>
                    </span></td>
            </tr>

            <tr class="tag">
                <td><label for="emailID">Enter your Email Id</label>
                    <span class="error">*</span>
                </td>
                <td><input type="text" name="emailID" class="details"></td>
            </tr>
            <tr>
                <td></td>
                <td><span class="error">
                        <?php echo $emailIDErr; ?>
                    </span></td>
            </tr>

            <tr class="tag">
                <td><label for="phoneNo">Enter your Phone Number</label>
                    <span class="error">*</span>
                </td>
                <td><input type="text" name="phoneNo" class="details"></td>
            </tr>
            <tr>
                <td></td>
                <td><span class="error">
                        <?php echo $phoneNoErr; ?>
                    </span></td>
            </tr>

            <tr class="tag">
                <td><label for="gender">Enter your Gender</label>
                    <span class="error">*</span>
                </td>
                <td>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                </td>
            </tr>
            <tr>
                <td></td>
                <td><span class="error">
                        <?php echo $genderErr; ?>
                    </span></td>
            </tr>

            <tr class="tag">
                <td><label for="tc">Agree to our Terms & Conditions</label>
                    <span class="error">*</span>
                </td>
                <td><input type="checkbox" name="tc"></td>
            </tr>
            <tr>
                <td></td>
                <td><span class="error">
                        <?php echo $tcErr; ?>
                    </span></td>
            </tr>

            <tr class="tag">
                <td><input type="submit" name="submit" value="Submit" class="btn"></td>
                <td></td>
            </tr>
        </table>
    </form>

    <?php
    //check if submit button is pressed or not
    if (isset($_POST['submit'])) {
        //check if there is any error or not
        if ($userNameErr == "" && $emailIDErr == "" && $phoneNoErr == "" && $genderErr == "" && $tcErr == "") {
            echo "<p class='msg'>You have been successfully registered</p>";
            echo "<h3>Your Details are :</h3>";
            echo "<p class='info'>User Name : " . $userName . "</p>";
            echo "<p class='info'>Email ID : " . $emailID . "</p>";
            echo "<p class='info'>Phone Number : " . $phoneNo . "</p>";
            echo "<p class='info'>Gender : " . $gender . "</p>";
        } else {
            echo "<p class='msg'>You shared invalid details<br/>Please provide correct data!</p>";
        }
    }
    ?>

</body>

</html>
