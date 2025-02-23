<section class="form">
    <label for="">INCOME</label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="income_cap">Capital</label>
            <input type="number" name="income_cap" id="income_cap" placeholder="1234...">
            <label for="income_inc">Income</label>
            <input type="number" name="income_inc" id="income_inc" placeholder="1234...">
        </div>
        <div>
            <!-- <label for="income_date">Date Income</label> -->
            <input type="hidden" name="income_date" id="income_date" value="<?php
            date_default_timezone_set("Asia/Manila");
            echo date("M-d-Y h:ia") ?>">
        </div>
        <input type="submit" name="submit" id="submit" value="Save">
    </form>
</section>