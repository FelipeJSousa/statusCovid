<html>
    <header>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </header>
    <body>
        <h1>Status COVID - TESTE</h1>

        <h1 id="result">
            <?php
                echo shell_exec("python3 status.py Brazil");
            ?>
        </h1>

    </body>
</html>