<form method="POST" action="/formulaire">
    @csrf
    <label for="name">Name: </label>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email: </label>
    <input type="text" id="email" name="email">
    <label for="message">Message: </label>
    <textarea id="message" name="message"></textarea><br>
    <button type="submit">Envoyer </button>
</form>

