<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
        <label  for="email">E-mail :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
        <label  for="tel">Téléphone :</label>
        <input  type="tel"  id="tel"  name="user_tel">
    </div>
    <label for="sujet-select">Sujet:</label>

    <select name="sujet" id="sujet-select">
        <option value="">--Choisissez votre option--</option>
        <option value="espace-client">Espace client</option>
        <option value="s'abonner">S'abonner</option>
        <option value="offre">Offre</option>
        <option value="promo">Promo</option>
    </select>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit" name="submit">Envoyer votre message</button>
    </div>
</form>

