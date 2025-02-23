<section class="form">
    <label for="">EXPENSES</label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="exp_person">Person</label>
            <input type="text" name="exp_person" id="exp_person" placeholder="Enter name">
            <label for="exp_item">Item</label>
            <input type="text" name="exp_item" id="exp_item" placeholder="Enter the item">
        </div>
        <div>
            <label for="exp_cost">Item Cost</label>
            <input type="number" name="exp_cost" id="exp_cost" placeholder="1234">
            <label for="exp_payment">Payment</label>
            <input type="number" name="exp_payment" id="exp_payment" placeholder="1234">
        </div>
        <div>
            <!-- <label for="exp_date">Date paid</label> -->
            <input type="hidden" name="exp_date" id="exp_date" value="<?php
            date_default_timezone_set("Asia/Manila");
            echo date("M-d-Y h:ia") ?>">
        </div>
        <input type="submit" name="submit" id="submit" value="Save">
    </form>
</section>