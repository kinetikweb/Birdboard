<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    </head>
    <body>
        <form class="container" action="/projects" method="post" style="padding-top: 40px">
            @csrf

            <h1 class="heading is-1">Create a Project</h1>
            
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input type="text" class="input" name="title" placeholder="Title">
                </div>
            </div>

            <div class="field">
                <label class="label" for="description">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea" rows="8" cols="80"></textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link"">Create Project</button>
                </div>
            </div>
        </form>
    </body>
</html>
