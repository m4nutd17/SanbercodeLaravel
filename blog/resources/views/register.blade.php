<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Laravel MVC</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <form id="Sign" action="/welcome" method="POST">
    @csrf
    <h2>Sign Up Form</h2>

    <div>
        <p>First name:</p>
        <input type="text" name="First name">
    </div>

    <div>
        <p>Last name:</p>
        <input type="text" name="Last name">
    </div>

    <div>
        <p>Gender:</p>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br>
    </div>

    <div>
        <p>Nationality:</p>
        <select>
            <option>Indonesia</option>
            <option>Malaysia</option>
            <option>Singapore</option>
            <option>Thailand</option>
            <option>Philiphines</option>
            <option>Vietnam</option>
            <option>Myanmar</option>
            <option>Cambodia</option>
            <option>Laos</option>
            <option>East Timor</option>
            <option>Brunei Darussalam</option>
        </select>
    </div>

    <div>
        <p>Language Spoken:</p>
        <input type="checkbox" name="Language">Bahasa Indonesia <br>
        <input type="checkbox" name="Language">English <br>
        <input type="checkbox" name="Language">Other <br>
    </div>

    <div>
        <p>Bio:</p>
        <textarea cols="30" rows="7"></textarea>
    </div>

    <button type="submit">Sign Up</button>

    </form>
</body>
</html>