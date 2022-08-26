<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue</title>
</head>
<body>

    <div id="myapp">
        <h1>Hello {{ name }}</h1>
    </div>

    <script src="https://unpkg.com/vue@3"></script>
    <script type="text/javascript">
        
        const { createApp } = Vue

        createApp ({
            data() {
                return {
                    name: 'Isaac'
                }
            }
        }).mount('#myapp')

    </script>
</body>
</html>