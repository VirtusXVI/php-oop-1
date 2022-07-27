<?php 
    class Movie {
        public $name;

        public $length;

        public $tickets;

        function __construct($_name , $_length, $_tickets) {
            $this->name = $_name;
            $this->length = $_length;
            $this->tickets = $_tickets;
        }

        public function generateTickets(){
            return "100";
        }
    }
    $ticketNumbers = Movie::generateTickets();
    $firstMovie = new Movie("La Vita è Bella", "2", $ticketNumbers);
    $secondMovie = new Movie("La Grande Bellezza", "3", $ticketNumbers);
    var_dump($firstMovie);
    var_dump($secondMovie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $firstMovie->name; ?></p>
    <p><?php echo $firstMovie->length; ?></p>
    <p><?php echo $firstMovie->tickets; ?></p>
    <p><?php echo $secondMovie->name; ?></p>
    <p><?php echo $secondMovie->length; ?></p>
    <p><?php echo $secondMovie->tickets; ?></p>
</body>
</html>