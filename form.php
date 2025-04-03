<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            
        }
        body{
            height: 100vh;
            display:flex;
            justify-content: center;
            align-items: center;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<form action="display.php" method="POST">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    
    

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    
   

    <label for="dob">Date of Birth:</label>
    <input type="date" name="dob" id="dob" required>

    

    <label for="course">Select Course:</label>
    <input list="courses" name="course" id="course" required>
    <datalist id="courses">
        <option value="CSE AI">
        <option value="CSE ">
        <option value="ME">
        <option value="CE">
        <option value="EX">
    </datalist>


    <input type="submit" value="Submit">

</form>

</body>
</html>
