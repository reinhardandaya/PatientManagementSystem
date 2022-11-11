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



    <section class="docpage">
            <h1>Add New Patient </h1>
           
        
        <div class="hospservices">
            
            <div class="hosp1">
                <h3>Patient's Personal Details</h3>
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
            </div>

            <div class="hosp2">
                <h3>Patient's Medical History</h3>
                <form method="post">
                        <div class="profile">
                            <input type="text" placeholder= "bloodgroup" name= "Doc_Name">
                            <input type="text" placeholder= "allergies" name= "Doc_Id">
                            <input type="text" placeholder= "underlying condition" name= "Department_Id">
                            <input type="text" placeholder= "weight" name= "Hospital_Id">
                            <input type="text" placeholder= "age" name= "Hospital_Id">
                        </div>
                    </form>
            </div>
               
            
        </div>
    </section>
    

    
</body>
</html>