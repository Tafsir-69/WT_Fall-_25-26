<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clinic Patient Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Clinic Patient Registration</h2>
    <table>
        <tr>
            <td>Full Name:</td>
            <br>
            <td><input type="text" placeholder="Enter your full name" required></td>
        </tr>
        <tr>
            <td>Age:</td>
            <br>
            <td><input type="number" placeholder="Enter your age" required></td>
        </tr>
      
        <tr>
            <td>Email:</td>
            
            <td><input type="email" placeholder="Enter email address"></td>
        </tr>
       
        <tr>
            <td>Insurance Provider:</td>
            <td>
                <select>
                    <option value="">--Select--</option>
                    
                </select>
            </td>
        </tr>
       <tr>
        <td>Insurance Policy Number:</td>
        <td><input type="text"></td>
       </tr>
       <tr>
    <td colspan="2" style="text-align:center;">
        <h4>Additional Information</h4>
       
    </td>
</tr>
 <tr>
            <td>Username:</td>
            <td><input type="text" placeholder="Choose a username" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" placeholder="Enter password" required></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" placeholder="Confirm password" required></td>
        </tr>
        <tr>
    <td colspan="2" style="text-align:center;">
        <button type="button">Register</button>
    </td>
</tr>
    </table>
</body>
</html>
