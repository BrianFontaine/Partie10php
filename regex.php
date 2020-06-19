<?php
$title = 'Exercice tp 1';
include 'header.php';
if (isset($_GET['number'])) {
    if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_GET['number'])||preg_match("#^[A-Z][a-zA-Z]+$#", $_GET['lastname©'])) {
        echo 'Le téléphone  est un numéro <strong>valide</strong> !';
        if ((empty($_GET['name'])) && (empty($_GET['firsname'])) && (empty($_GET['birthday']))
            && (empty($_GET['countryOfBirthday'])) && (empty($_GET['nationality']))
            && (empty($_GET['adress'])) && (empty($_GET['email']))
            && (empty($_GET['number'])) && (empty($_GET['school'])) && (empty($_GET['numberPole']))
            && (empty($_GET['numberBadge'])) && (empty($_GET['liens'])) && (empty($_GET['heros']))
            && (empty($_GET['hack'])) && (empty($_GET['exp']))) {?>

<?php echo "<form name='formulaire'></form>" ?>

<?php } else {?>

<style>
    form {
        display: none
    }
</style>
    <p>Salut ton nom de famille est <?php echo $_GET['lastname']; ?>.</p>
    <p>Ton prénom est <?php echo $_GET['firstname']; ?>.</p>
    <p>Ta date de naissance est <?php echo $_GET['birthday']; ?>.</p>
    <p>La ville ou tu est néé est <?php echo $_GET['countryOfBirthday']; ?>.</p>
    <p>Ta nationalité est <?php echo $_GET['nationality']; ?>.</p>
    <p>Ton adress est <?php echo $_GET['adress']; ?>.</p>
    <p>Ton email est <?php echo $_GET['email']; ?>.</p>
    <p>Ton numéro de téléphone est <?php echo $_GET['number']; ?>.</p>
    <p>Ton niveau d'etudes est <?php echo $_GET['school']; ?>.</p>
    <p>Ton numéro pole emploi est <?php echo $_GET['numberPole']; ?>.</p>
    <p>Ton badge <?php echo $_GET['numberBadge']; ?>.</p>
    <p>Le lien de ton Codeacademy <?php echo $_GET['liens']; ?>.</p>
    <p>Ton héros est <?php echo $_GET['heros']; ?>.</p>
    <p>Ton hack : <?php echo $_GET['hack']; ?>.</p>
<p>As tu déja travaillé en tant que développeur web : <?php echo $_GET['Exp']; ?>.</p>
<?php 
}?>
<?php
} 
else 

        ?>
<div class="container">
    <h1 id='titleTp10' class='text-danger'>Projet TP 1</h1>

    <form name='formulaire' method='GET' action=''>
        <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
            <input type="text" class="form-control" name="lastname" placeholder="fabilic" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prénom</label>
            <input type="text" class="form-control" name="firstname" placeholder="Manon" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Date de naissance</label>
            <input type="date" class="form-control" name="birthday" placeholder="27/05/1986" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Pays de naissance</label>
            <input type="text" class="form-control" name="countryOfBirthday" placeholder="France" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nationalité</label>
            <input type="country" class="form-control" name="nationality" placeholder="Francaise" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Adresse</label>
            <input type="text" class="form-control" name="adress" placeholder="4 , avenue du général pay" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="manon.fabilic@gmail.com" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Téléphone</label>
            <input type="tel" class="form-control" name="number" placeholder="085454322" required>
            <p class="text-danger"><?='Le téléphone n\'est pas valide, recommencez !';?></p>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</label>
            <SELECT name="school" size="1" required>
                <OPTION value='Sans Bac'>Sans Bac</option>
                <OPTION value='Bac'>Bac</option>
                <OPTION value='Bac +2'>Bac +2</option>
                <OPTION value='Bac +3'>Bac +3</option>
                <OPTION value='supérieur'>Supérieur</option>
            </SELECT><br />
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Numéro pôle emploi</label>
            <input type="number" class="form-control" name="numberPole" placeholder="54385454322" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Nombre de badge</label>
            <input type="number" class="form-control" name="numberBadge" placeholder="6" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Liens codecademy</label>
            <input type="text" class="form-control" name="liens" placeholder="www.manon/codecademy.com" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Si vous étiez un super héros/une super héroïne, qui seriez-vous et
                pourquoi ?</label>
            <input type="text" class="form-control" name="heros" placeholder="Batman car" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Racontez-nous un de vos "hacks" (pas forcément technique ou
                informatique)</label>
            <input type="text" class="form-control" name="hack" placeholder="Hack ,...." required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Avez vous déjà eu une expérience avec la programmation et/ou
                l'informatique avant de remplir ce formulaire ?</label>
            <SELECT name="Exp" size="1" required>
                <OPTION value='Oui'>Oui</option>
                <OPTION value='Non'>Non</option>
            </SELECT><br />
        </div>
        <button type="submit" id='but' name='LOGIN' class="btn btn-primary mb-4">Validez</button>
    </form>
</div>
<?php
}
include 'footer.php';
?>