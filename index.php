<?php
include 'connection/connection.php';
include 'expenses/index.php';
include 'incomes/index.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body>

    <section class="hero ">
        <!-- <h1>home page</h1> -->
    </section>

    <main>

        <section class="[30vw] bg-black">
            <button class="create_income px-[10px] py-[5px] rounded-[5px] bg-green-400 text-white text-bold">create income</button>
            <button class="create_expence px-[10px] py-[5px] rounded-[5px] bg-red-400 text-white text-bold">create expence</button>
        </section>

        <section class="flex gap-[10px] justify-evenly flex-wrap ">

            <table class="self-start">
                <thead>
                    <tr>
                        <th class="border border-red-500 text-center bg-red-300 " colspan="4">expenses</th>
                    </tr>
                    <tr class="border">
                        <th class="border border-red-500 px-[5px]">montant</th>
                        <th class="border border-red-500 px-[5px] w-[30vw] overflow-hidden">description</th>
                        <th class="border border-red-500 px-[5px]">created_at</th>
                        <th class="border border-red-500 px-[5px]">update/delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($expenses as $expense) {
                        echo '<tr>';

                        echo "<td class='border border-red-500 px-[5px]' ><span>" . $expense['montant'] . "</span></td>";
                        echo "<td class='border border-red-500 px-[5px]' ><span>" . $expense['description'] . "</span></td>";
                        echo "<td class='border border-red-500 px-[5px]' ><span>" . (new DateTime($expense['created_at']))->format('Y/d/m') . "</span></td>";
                        echo "<td class='p-[5px] border border-red-500 ' ><span name=" . $expense['id'] . "   class='delete_expense text-red-700 m-[5px] cursor-pointer  ' >delete</span><span name=" . $expense['id'] . " class='update_expense text-blue-700 m-[5px] cursor-pointer'  >update</span></td>";

                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

            <table class="self-start">
                <thead>
                    <tr>
                        <th class="border border-green-500 text-center bg-green-300 " colspan="4">incomes</th>
                    </tr>
                    <tr class="border">
                        <th class="border border-green-500 px-[5px]">montant</th>
                        <th class="border border-green-500 px-[5px] w-[30vw] overflow-hidden">description</th>
                        <th class="border border-green-500 px-[5px]">created_at</th>
                        <th class="border border-green-500 px-[5px]">update/delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($incomes as $income) {
                        echo '<tr>';

                        echo "<td class='border border-green-500 px-[5px]' ><span>" . $income['montant'] . "</span></td>";
                        echo "<td class='border border-green-500 px-[5px]' ><span>" . $income['description'] . "</span></td>";
                        echo "<td class='border border-green-500 px-[5px]' ><span>" . (new DateTime($income['created_at']))->format('Y/d/m') . "</span></td>";
                        echo "<td class='p-[5px] border border-green-500 ' ><span name=" . $income['id'] . "   class='delete_income text-red-700 m-[5px] cursor-pointer  ' >delete</span><span name=" . $income['id'] . " class='update_income text-blue-700 m-[5px] cursor-pointer'  >update</span></td>";

                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

        </section>

    </main>

    <script src="main.js"></script>

</body>

</html>






<!-- <table class="self-start">
                <thead>
                    <tr>
                        <th class="border border-green-500 text-center bg-green-300 " colspan="4">expenses</th>
                    </tr>
                    <tr class="border">
                        <th class="border border-green-500 px-[5px]">montant</th>
                        <th class="border border-green-500 px-[5px] w-[30vw] overflow-hidden">description</th>
                        <th class="border border-green-500 px-[5px]">created_at</th>
                        <th class="border border-green-500 px-[5px]">update/delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($expenses as $expense) {
                        echo '<tr>';

                        echo "<td class='h-[2px] border border-green-500 px-[5px]' ><span>" . $expense['montant'] . "</span></td>";
                        echo "<td class='h-[2px] border border-green-500 px-[5px]' ><span>" . $expense['description'] . "</span></td>";
                        echo "<td class='h-[2px] border border-green-500 px-[5px]' ><span>" . (new DateTime($expense['created_at']))->format('Y/d/m') . "</span></td>";
                        echo "<td class='h-[2px] p-[5px] border border-green-500' ><span name=" . $expense['id'] . "   class='delete_expense text-red-700 m-[5px] cursor-pointer  ' >delete</span><span name=" . $expense['id'] . " class='update_expense text-blue-700 m-[5px] cursor-pointer'  >update</span></td>";

                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table> -->