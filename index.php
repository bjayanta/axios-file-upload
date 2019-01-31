<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>

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
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script type="text/javascript">
        var form = document.getElementById("form");
        
        form.onsubmit = function() {
            var data = new FormData(this);

            axios.post('http://localhost/lab/file-upload/action.php', data).then(response => {
                console.log(response.data);
            }).catch(error => console.error(error));

            return false;
        }
    </script>
</body>
</html>