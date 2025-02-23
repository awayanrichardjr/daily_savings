<section class="total">
    <table>
        <label for="">TOTAL</label>
        <thead>
            <tr>
                <th>TOTAL ITEM COST</th>
                <th>TOTAL PAYMENT</th>
                <th class="red-marked">TOTAL BALANCE PAYMENT</th>
                <th>RAMAINING BALANCE</th>
                <th>CAPITAL GAP</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_SESSION['total_cost'] ?></td>
                <td><?php echo $_SESSION['total_payment'] ?></td>
                <td class="red-marked"><?php echo $_SESSION['total_balance'] ?></td>
                <td><?php echo $_SESSION['total_remaining'] ?></td>
                <td><?php echo $_SESSION['total_gap']?></td>
            </tr>
        </tbody>
    </table>
</section>