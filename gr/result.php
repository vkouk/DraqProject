<?php
/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 4/4/2017
 * Time: 12:36
 */

require_once 'core/init.php';

//For debugging. Only temporary!!! Do not remove yet!! Only comment!!
//print "CONTENT_TYPE: " . $_SERVER['CONTENT_TYPE'] . "<BR />";
//$data = file_get_contents('php://input');
//print "DATA: <pre>";
//var_dump($data);
//var_dump($_POST);
//print "</pre>";
$results = new Results();

if ($results->isInSession()) {
    if (input::exists()) {

        $results->ProcessRequest();
        if ($results->isSuccessful()) {
            echo "<script type='text/javascript'>
                alert('Your data is sent to the server');
                </script>";
            $results->finishSession();

        } else {
            echo "<script type='text/javascript'>
                alert('Something went wrong.');
                </script>";
        }
    }
}
?>


<div class="row">
    <div class="col-md-12 col-lg-12">
        <h1>Οι πόντοι σας είναι: <?php echo $results->ShowPoints(); ?></h1><br>
        <h1>Ο δείκτης κινδύνου είναι: <?php echo $results->risk(); ?></h1><br>
        <fieldset class="risk-alert result-1" data-name="result" data-id="result1">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r1">< 7</span>
                </div>
                <div class="col-md-4  risk-text">Χαμηλός κίνδυνος</div>
                <div class="col-md-6 ">
                    <p id="result-text">Εκτιμάται ότι 1 στα 100 άτομα θα έχει σακχαρώδη διαβήτη τύπου 2,
                        ή θα αναπτύξει τη νόσο στα επόμενα 10 χρόνια.</p>
                </div>
            </div>
        </fieldset>
        <fieldset class="risk-alert result-2" data-name="result" data-id="result2">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r2"> 7 - 11</span>
                </div>
                <div class="col-md-4  risk-text">Ελαφρώς αυξημένος κίνδυνος</div>
                <div class="col-md-6">
                    <p id="result-text">Εκτιμάται ότι 1 στα 25 άτομα θα έχει σακχαρώδη διαβήτη τύπου 2,
                        ή θα αναπτύξει τη νόσο στα επόμενα 10 χρόνια.</p>
                </div>
            </div>
        </fieldset>
        <fieldset class="risk-alert result-3" data-name="result" data-id="result3">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r3">12 - 14</span>
                </div>
                <div class="col-md-4  risk-text">Μέτρια αυξημένος κίνδυνος</div>
                <div class="col-md-6">
                    <p id="result-text">Εκτιμάται ότι 1 στα 6 άτομα θα έχει σακχαρώδη διαβήτη τύπου 2,
                        ή θα αναπτύξει τη νόσο στα επόμενα 10 χρόνια.</p>
                </div>
            </div>
        </fieldset>
        <fieldset class="risk-alert result-4" data-name="result" data-id="result4">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r4">15 - 20</span>
                </div>
                <div class="col-md-4  risk-text">Υψηλός κίνδυνος</div>
                <div class="col-md-6">
                    <p id="result-text">Εκτιμάται ότι 1 στα 3 άτομα θα έχει σακχαρώδη διαβήτη τύπου 2,
                        ή θα αναπτύξει τη νόσο στα επόμενα 10 χρόνια.</p>
                </div>
            </div>
        </fieldset>
        <fieldset class="risk-alert result-5" data-name="result" data-id="result5">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r5">21 - 26+</span>
                </div>
                <div class="col-md-4  risk-text">Πολύ υψηλός κίνδυνος</div>
                <div class="col-md-6">
                    <p id="result-text">Εκτιμάται ότι 1 στα 2 άτομα θα έχει σακχαρώδη διαβήτη τύπου 2,
                        ή θα αναπτύξει τη νόσο στα επόμενα 10 χρόνια.</p>
                </div>
            </div>
        </fieldset>

    </div>
</div>

<div class="row risk-info">
    <p>Σε περίπτωση που βρεθείτε σε μια απο τις ζώνες υψηλού κινδύνου 3, 4, ή 5,
        <strong>θα πρέπει να επικοινωνήσετε</strong> άμεσα με τον προσωπικό γιατρό σας ή
        να μεταβείτε σε νοσοκομείο με διαβητολογική μονάδα προκειμένου να κάνετε
        μια από τις ακόλουθες αιματολογικές εξετάσεις:</p>
    <ul>
        <li>Σακχάρου πλάσματος νηστείας</li>
        <li>Αιμογλοβίνης A1c</li>
    </ul>

</div>

<div class="row">
    <div class="col-md-12 risk-info">
    <p>Παρακάτω θα βρείτε όλα τα διαθέσιμα διαβητολογικά κέντρα σε όλη την Ελλάδα συμπεριλαμβανομένων και των εξωτερικών.</p>
    </div>
    <div class="col-md-12">
        <iframe src="https://www.google.com/maps/d/embed?mid=1buE6Pk8o2VAOdZjZhJqBEDazChE" width="100%" height="700px"></iframe>
    </div>
    <div class="col-md-12 risk-info">
        <p> Σε περίπτωση που θέλετε να κατεβάσετε την πλήρη λίστα με τα διαβητολογικά κέντρα πατήστε <a target="_blank" href="http://www.galinos.org.gr/portal/pdf/%CE%94%CE%B9%CE%B1%CE%B2%CE%B7%CF%84%CE%BF%CE%BB%CE%BF%CE%B3%CE%B9%CE%BA%CE%AC-%CE%95%CE%BD%CE%B4%CE%BF%CE%BA%CF%81%CE%B9%CE%BD%CE%BF%CE%BB%CE%BF%CE%B3%CE%B9%CE%BA%CE%AC%20%CE%9A%CE%AD%CE%BD%CF%84%CF%81%CE%B1.pdf">εδώ</a></p>
    </div>
</div>

<div class="row risk-info">
    <p>Αν θέλετε να επαναλάβετε το τεστ, πατήστε <a href="index.php?page=do-test.php">εδώ</a></p>
</div>


<script type="text/javascript">
    var finalRiskFactor = <?php echo $results->risk(); ?>;
</script>