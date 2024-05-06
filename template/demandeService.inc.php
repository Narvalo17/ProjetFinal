<main>
    <section class="content">
      <h2>Demander un service</h2>
      

      <form action="#" enctype="multipart/form-data" method="post">
        <div>
          <p>Veuillez remplir le formulaire ci-dessous pour demander un service.</p>
          <label for="service">Vous voulez quel service ? :</label>
          <input list="user" name="user" placeholder="Service Souhaiter">
              <datalist id="user">
                <option value="Électricité"></option>
                <option value="Peinture"></option>
                <option value="Plomberie"></option>
                <option value="Ferronnerie et soudure"></option>
                <option value="Menuiserie et boiserie"></option>
                <option value="Menuiserie d'aluminium et pvc"></option>
              </datalist>
          
      </div>

        <div class="contact-form">
          <label for="description">Description du service:</label>
          <textarea id="description" name="description" rows="5" placeholder="Déscription de  " required></textarea>
          <label for="photos">Photos de la deffaillance :</label>
          <label for="image">
            <span class="material-symbols-outlined">
              download
            </span>
            Télécharger une image
          </label>
          <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg">
        </div>

        <button type="submit">Envoyer la demande</button>
      </form>
    </section>
  </main>