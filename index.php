<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>
        Strawberry Swing by frank ocean lyrics:
    </h1>

    <?php 
    $lyrics = 
            "When we were kids, we hand painted strawberries on a swing
            Every moment was so precious, then
            I'm still kicking it, I'm daydreaming on a strawberry swing
            The entire Earth is fighting, all the world is at its end
            Just in case, an atom bomb, comes falling on my lawn
            I should say and you should hear I've loved
            I've loved the good times here, I've loved our good times here
            Say hello, then say farewell to the places you know
            We are all mortals, aren't we? Any moment this could go
            Cry, cry, cry, even though that won't change a thing
            But you should know, you should hear, that I have loved
            I have loved the good times here, and I will miss our good times
            Spaceships are lifting off of a dying world
            And millions are left behind while the sky burns
            There wasn't room for you and I, only you, goodbye, goodbye"
    ?>

    <p>
        <?php echo $lyrics ?>
    </p>

    <div>
        Lyrics length is <strong>  <?php echo strlen($lyrics) ?> </strong>
    </div>
    <br>
    <span> Censor a word </span>
    <form method="get" action="">
        <input type="text" name='word'>
    </form>

    <?php  
    $word_to_censor = $_GET['word'];
    $censored_lyrics = str_ireplace($word_to_censor, '***', $lyrics); 
    ?>

    <p>
        <?php echo $censored_lyrics ?>
    </p>
    
    <div>
        Censored lyrics length is <strong>  <?php echo strlen($censored_lyrics) ?> </strong>
    </div>


</body>
</html>