<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>

    <!-- Form for file upload -->
    <form action="action.php" method="post" id="form">
        <div>
            <label for="name">File name</label><br>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="file">File</label><br>
            <input type="file" name="file" id="file">
        </div>

        <div>
            <input type="submit" name="submit" value="Upload">
            <input type="reset" value="Clear">
        </div>
    </form>
    
    <!-- Include axios cdn -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script type="text/javascript">
        // get the form element 
        var form = document.getElementById("form");
        
        // submit the form 
        form.onsubmit = function() {
            // get all the from form
            var data = new FormData(this);

            // use asios with post method
            axios.post('http://localhost/lab/file-upload/action.php', data)
                .then(response => {
                    console.log(response.data);
                })
                .catch(error => console.error(error));
            
            // no loading and submit action
            return false;
        }
    </script>
</body>
</html>