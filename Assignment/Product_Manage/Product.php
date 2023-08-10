<html>
<div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                            <div class="product-f-image">
    <table width="100%" >

        <?php
            require_once ("admin/DatabaseConnect.php");
            $sql = "SELECT * FROM product";
            $result = $conn -> query($sql);
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                if($i % 3 == 0)
                    echo "<tr>";
                        echo "<td width='33%'><a href='index.php?page=ProductDetail&id={$row['product_id']}'>
                                <center>
                                    <b>{$row['product_name']}</b><br/>
                                    <img src=\"admin/{$row['product_image']}\" height='170px'><br/>
                                    "?> <?php echo number_format($row['product_price'],0) ?> <?php echo "VND
                                </center></a>
                                <center><a href='index.php?page=Cart&action=add&id={$row['product_id']}'><button>Add to cart</button></a></center>
                            </td>";
                if($i % 3 == 2)
                    echo "</tr>";
                $i++;
            }
            if($i % 3 != 0)
                    echo "</tr>";
        ?>
</div>
</div>
</div>
</div>
</div>
    </table>
</html>