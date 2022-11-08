<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/styles1.css">
    <title>PatientProfile</title>
</head>
<body>
    <form method ="POST">
        <div class="Profile">
            <h2>Fill in the Necessary Details</h2><br><br>
            <p>Personal Details</p><hr>
            <input type="text" placeholder="Enter First Name" name="PFN" required>
            <input type="text" placeholder="Enter Second Name" name="PMN" required>
            <input type="text" placeholder="Enter Last Name" name="PLN" required>
            <input type="text" placeholder="National ID/Millitary ID/Passport ID" name="PID" required>
            <input type="tel" placeholder="Enter Phone Number" name="TEL" required>
            <input type="text" placeholder="Enter Patient Number" name="PNUM" required>
            <input type="date" placeholder="Enter Date of Birth" name="DOB" required>
            <input type="text" placeholder="Enter Address" name="ADDR" required>
            <input type="email" placeholder="Enter Email Address" name="PEMAIL" required><br><br>
            <p>Next of Kin</p><hr>
            <input type="text" placeholder="Enter Next of Kin First Name" name="KFN" required>
            <input type="text" placeholder="Enter Next of Kin Second Name" name="KMN" required>
            <input type="text" placeholder="Enter Next of Kin Last Name" name="KLN" required>
            <input type="text" placeholder="Enter Next of Kin Address" name="KADDRESS" required>
            <input type="tel" placeholder="Enter Next of Kin Phone Number" name="KTEL" required>
            <input type="text" placeholder="Enter Next of Kin Email Address" name="KEMAIL" required>
            <input type="password" placeholder="Enter Your Password" name="PASS" required>
            <button type="submit">Send</button>
            <div class="container">
                <span class="psw">Already Signed Up, <a href="login.html">click here To Log in!</a></span><br>
            </div>
        </div> 
    </form>
   
</body>
</html>