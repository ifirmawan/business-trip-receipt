<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Kuitansi</title>
</head>

<body>
    <button type="button" onclick="handleOnPrint(2)">Print</button>
    <script>
        function handleOnPrint(idData) {
            const printWindow = window.open(`/template.php?id=${idData}`);
            printWindow.print();

            //Close window once print is finished
            printWindow.onafterprint = function() {
                printWindow.close()
            }
        }
    </script>
</body>

</html>