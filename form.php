<form method="post" action="">
      <p class="formu">Name : <input type="text" name="name" placeholder="Entrez votre nom" /></p>
      <p class="formu">Email : <input type="email" name="email" placeholder="Entrer votre Email" /></p>
      <p class="formu">Votre Message: <textarea type="message" name ="message" placeholder="Votre message" maxlength="140" rows="5"></textarea></p>
      <input type="submit" name ="submit" value="Submit" />
    </form>
<?php
    // Methode asynchorme comme pour js ... en format php ....
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=Portfolioform;charset=utf8', 'user', 'user');
        // Nouvelle méthode
            if ( $_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["submit"]) ) {
                //Vieille méthode
                // $host = "localhost";
                // $username = "user";
                // $password = "user";
                // $database = "Portfolioform";
                



                // Sanatization ?!
                $nameBefore = $_POST["name"]; 
                $name = filter_var($nameBefore, FILTER_SANITIZE_STRING);
                $emailBefore = $_POST["email"];
                $email = filter_var($emailBefore, FILTER_SANITIZE_STRING);
                $messageBefore = $_POST["message"];
                $message = filter_var($messageBefore, FILTER_SANITIZE_STRING);

                mail('belindaschepers1@gmail.com' , 'Formulaire de contact' , $message);
                    
                if (!isset($name)){
                    die("S'il vous plaît entrez votre nom");
                }
                elseif (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                    die("S'il vous plaît entrez votre adresse e-mail");
                }
                elseif (!isset($message)){
                    die("S'il vous plaît entrez votre message");
                }
                else{
                    $req = $bdd->prepare('INSERT INTO users(name, email, message) VALUES(:nameadd, :emailadd, :messageadd)');
                    $req->execute(array(
                        'nameadd' => $name,
                        'emailadd' => $email,
                        'messageadd' => $message,

                    ));
                    $entete  = 'MIME-Version: 1.0' . "\r\n";
                    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                    $entete .= 'From: ' . $email . "\r\n";

                    $message_to_send = '
                    <p><b>Nom-Prénom : </b>' . $name . '</p>
                    <p><b>Email : </b>' . $email . '</p>
                    <p><b>Message : </b>' . $message . '</p>';

                    $retour = mail('indique tonmail@gmail.com', 'Formulaire de contact', $message_to_send, $entete);
                    if($retour) {
                        echo '<body onLoad="alert(\'Votre message a bien été envoyé.\')">';
                    }

                }
            }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
 

?>