<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kathmandu Jatras</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #FFEBD5;
}

.headsection {
    background-color: #B17234;
    padding: 20px;
    text-align: center;
    color: white;
}

main {
    padding: 20px;
}

.festival {
    background-color: #FFF4E3;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 20px;
    display: flex;
    align-items: center;
}

.festival img {
    max-width: 250px;
    margin-right: 20px;
    border-radius: 5px;
}

    </style>
    <?php 
    session_Start();
    include'header.php';
    ?>
</head>
<body>
    <div class="headsection">
        <h1>Welcome to Kathmandu's Grand Jatras</h1>
</div>

    <main>
        <section class="festival" id="indra-jatra">
            <img src="images/jatra1.jpg" alt="Indra Jatra Celebration">
            <h2>Indra Jatra</h2>
            <p>
                Celebrated by both Hindus and Buddhists in Kathmandu, Indra Jatra is a tribute to Lord Indra for the rains and the harvest. It is marked by a variety of events like lingo erection, processions, dances and more.
            </p>
        </section>

        <section class="festival" id="bisket-jatra">
            <img src="images/jatra1.jpg" alt="Bisket Jatra Celebration">
            <h2>Bisket Jatra</h2>
            <p>
                Bisket Jatra marks Nepalese New Year and is celebrated with much enthusiasm in Bhaktapur and other parts of the Kathmandu Valley. The most well-known event during this festival is the chariot procession.
            </p>
        </section>

        <section class="festival" id="machindranath-jatra">
            <img src="images/jatra1.jpg" alt="Rato Machindranath Jatra Celebration">
            <h2>Rato Machindranath Jatra</h2>
            <p>
                This is a chariot festival honoring Lord Machindranath. It's one of the oldest and longest festivals celebrated in the Kathmandu Valley. The chariot is paraded around the city of Patan for several months.
            </p>
        </section>
    </main>

</body>
</html>
<?php include'footer.php'?>
</body>