<main>
    <section class="content">
        <h2>Formulaire d'Inscription</h2>
        <form id="inscriptionForm" action="#" method="post">
            <div>
                <label for="user">Vous êtes :</label>
                <input list="user" id="userInput" name="user" placeholder="Client/Professionnelle">
                <datalist id="user">
                    <option value="Client"></option>
                    <option value="Professionnelle"></option>
                </datalist>
            </div>
            <div id="clientForm" style="display: none;">
                
                <label for="nom">Veuillez saisir votre nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Nom" required>

                <label for="nom">Veuillez saisir votre prénom :</label>
                <input type="text" id="nom" name="nom" placeholder="Nom" required>

                <label for="email">Veuillez saisir votre E-mail :</label>
                <input type="email" id="email" name="email"placeholder="exemple@gmail.com" required>

                <label for="password">Veuillez saisir votre mot de passe :</label>
                <input type="password" id="password" name="password"placeholder="********" required>

                <label for="confirmation">Veuillez confirmer votre mot de passe :</label>
                <input type="password" id="confirmation" name="confirmation"placeholder="********" required>
                
            </div>
           
            <div id="professionnelleForm" style="display: none;">
                
                <label for="nom">Veuillez saisir votre nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Nom" required>

                <label for="prenom">Veuillez saisir votre prénom :</label>
                <input type="text" id="prenom" name="prenom"placeholder="Prénom" required>

                <label for="email">Veuillez saisir votre E-mail :</label>
                <input type="email" id="email" name="email"placeholder="exemple@gmail.com" required>

                <label for="email">Raison Social :</label>
                <input type="text" id="Raison" name="raison"placeholder="Raison social" required>

                <label for="siret">Numéro de SIRET :</label>
                <input type="text" id="siret" name="siret" placeholder="XXXXXXXXXXXXXX" maxlength="14" pattern="[0-9]{14}" title="Le numéro de SIRET doit contenir 14 chiffres" required>

                <label for="password">Veuillez saisir votre mot de passe :</label>
                <input type="password" id="password" name="password"placeholder="********" required>
           
                <label for="confirmation">Veuillez confirmer votre mot de passe :</label>
                <input type="password" id="confirmation" name="confirmation"placeholder="********" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </section>
</main>