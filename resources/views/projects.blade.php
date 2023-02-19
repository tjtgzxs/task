<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/jquery-ui.min.js'])
    <title>projects</title>
</head>
<body>
<section class="main">

    <section class="project-list">
        @foreach($projects as $project)
            <div class="list" id="{{$project['id']}}">
                <div class="project"><p>PROJECT:{{$project['name']}}</p></div>
                <div class="task-list">
                    <div class="task-add">
                        <input type="text" placeholder="Please add new task" value="" required>
                        <button class="add">ADD</button>

                    </div>
                    @foreach($project['tasks'] as $task)
                        <div class="task" id="{{$project['id']}}-{{$task['id']}}">
                            <input type="text" value="{{$task['name']}}" required>
                            <button class="edit">EDIT</button>
                            <button class="delete">DELETE</button>
                        </div>

                    @endforeach

                </div>
            </div>

        @endforeach
    </section>

</section>


</body>
</html>
