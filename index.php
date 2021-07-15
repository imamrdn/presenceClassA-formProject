<html>
<head>
    <title>2000018045 - Imam Ramadhan</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="main flex-container">
        <div class="title">
            <img src="logo-uad.png" alt="">
            <div class="title-text">
                <h1><a href="uad.ac.id">Ahmad Dahlan University</a></h1>
                <p>Class Attendance</p>
                <p>Web programming course</p>
            </div>
        </div>
        <div class="card">
            <form action="formaction.php" method="POST">
                <label for="">Name</label>
                <input type="text" name='nama'>
                
                <label for="">NIM</label>    
                <input type="text" name="nim">
                
                <label for="">Email</label>
                <input type="email" name="email"></td>
                
                <div class="input-radio">
                    <label for="">Class</label><br>
                    <input type="radio" name="class" id="" value="A">
                    <label for="">A</label>
                    <input type="radio" name="class" id="" value="B">
                    <label for="">B</label>
                    <br>
                </div>
                
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="5"></textarea>
                
                <input type="submit" name="submit" value="Submit">
            
            </form>
        </div>
    </div>
    
    <script>
        // alert("Good morning, do attendance today :) Keep it up");
    </script>
</body>
</html>

