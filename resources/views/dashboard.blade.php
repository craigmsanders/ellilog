<!DOCTYPE html>
<html>
    <head>
        <title>Ellilog - Dashboard</title>
    </head>
    <body>
        <h1>Ellilog</h1>
        <h2>Dashboard</h2>
        <h3>Log</h3>

        <form action="/log" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p>
            User: <select id="user_id" name="user_id">
                <?php foreach($users as $user) { ?>
                <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                <?php } ?>
            </select>
            </p>

            <p>
            Baby: <select id="baby_id" name="baby_id">
                <?php foreach($babies as $baby) { ?>
                <option value="{{$baby->id}}">{{$baby->first_name}} {{$baby->last_name}}</option>
                <?php } ?>
            </select>
            </p>

            <p>
            Thing: <select id="thing_id" name="thing_id">
                <?php foreach($things as $thing) { ?>
                <option value="{{$thing->thing}}">{{$thing->thing}}</option>
                <?php } ?>
            </select>
            </p>

            <p>
            Ounces: <select id="data_milk" name="data_milk">
                <?php foreach(range(1, 10) as $oz) {
                    echo '<option value="' . $oz . '">' . $oz . '</option>';
                } ?>
            </select>
            </p>

            <p>Notes:<br/>
            <textarea id="notes" name="notes"></textarea>
            </p>

            <p><input type="submit" name="submit" value="Submit" /></p>
        </form>
    </body>
</html>
