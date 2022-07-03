<?php
require '../koneksi/koneksi.php';

$id = $_GET["id"];

if ( delete($id) > 0 ) {
    echo "
            <script>
                alert('Data successfully deleted!');
                document.location.href = 'product.php';
            </script>";
} else "
            <script>
            alert('Data failed to be deleted!');
            document.location.href = 'product.php';
            </script>"; {
    
}

?>