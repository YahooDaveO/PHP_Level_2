<?php
    // Using Variables;
    $name = "George" ;
    $location = "Jungle<br>";
    print "Hello there.<br>" ;
    print "My name is $name.  I live in the $location<br>";   
    ?>    
<?php 
    // Heredoc Example;
    $Mybackground = <<<BACKGROUND
        Some of you may think that living in 
        the $location is easy, but let me tell
        you it's not! The $location is a difficult
        /$location to live in, even with My BACKGROUND.
BACKGROUND;
?>

<?php
    print "At my age, ";
    $Age = 45;        
    if (Age <= 18) {
    print "You are too young.";
    } else {
    print "you need to prepare for retirement!";
    }
?>
