<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/assets/assets-vendor/jquery/jquery.min.js"></script>
</head>

<body>

    <script>
        $(document).ready(function() {

            let link = `<?= $data_link->link_zoom ?>`

            window.location.replace(link)

        })
    </script>

</body>

</html>