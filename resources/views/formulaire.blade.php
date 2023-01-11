<form method="POST" action="/formulaire">
    @csrf
    <label for="name">Name: </label>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email: </label>
    <input type="text" id="email" name="email">
    <label for="message">Message: </label>
    <input type="text" name="message" id="message">
    <button type="submit">Envoyer </button>
</form>

