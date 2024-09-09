<!DOCTYPE html>
<html>
<head>
    <title>Natural Language to SQL Query</title>
</head>
<body>
    <h1>Enter your natural language query</h1>

    <form action="<?php echo base_url('master/dbai/processquery'); ?>" method="post">
        <input type="text" name="query" placeholder="Enter your query" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
