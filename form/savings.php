<section class="form">
    <label for="">SAVINGS</label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="save_savings">Savings</label>
            <input type="number" name="save_savings" id="save_savings" placeholder="1234">
       
            <!-- <label for="save_date">Date Income</label> -->
            <input type="hidden" name="save_date" id="save_date" value="<?php
            date_default_timezone_set("Asia/Manila");
            echo date("M-d-Y h:ia") ?>">
        </div>
        <input type="submit" name="submit" id="submit" value="Save">
    </form>
</section>