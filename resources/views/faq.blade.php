<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Jonah's Personal Site made for the HZ-ICT Programme: FAQ PAGE</title>
    <link rel="stylesheet" href="/resources/css/stylesheet.css" text="text/css">
    <link rel="stylesheet" href="/resources/css/sidebar.css" text="text/css">
    <link rel="stylesheet" href="/resources/css/pictures.css">
</head>

<body>
<div class="sidebar">
    <a href="/">Front Page</a>
    <a href="/profile">Profile Page</a>
    <a href="/dashboard">Dashboard</a>
    <a class="active" href="/faq">FAQ</a>
    <a href="/blog">Blog</a>
    <a class="bottom" href="/socials">Socials</a>
</div>

<div class="content">
    <div class="main">
        <h1>FAQ</h1>
        <p>
{{--        <ul>--}}
{{--            <li>Q: How can you print a document from your laptop at HZ? </li>--}}
{{--            A: You can upload a file on the Self-Service Portal and print it at one of the printers, as long as you have your student pass with.  <br><br>--}}


{{--            <li>Q: How can you scan a document a send it to your laptop at HZ? </li>--}}
{{--            A: Use the same printer, scan your paper and it should added on your pc if you do it right. <br><br>--}}




{{--            <li>Q: What do you need to do when you are sick / show symptoms of coronavirus? </li>--}}
{{--            A: Contact the teachers/helpdesk at school and stay home. Follow the lessons on stream to compensate for--}}
{{--            that unusual sickness. <br><br>--}}


{{--            <li>Q: How can you book a project space in one of the wings? </li>--}}
{{--            A: You can book a room on the HZ page after logging in by pressing the Self-Service Portal, it should be--}}
{{--            easy--}}
{{--            from thereon out. <br><br>--}}



{{--            <li>Q: What are the instructions if you want to park your car at the HZ parking lot? </li>--}}
{{--            A: You must park your car "across the road", at the parking lot of the former PEZM. <br><br>--}}

{{--        </ul>--}}

        <ul>
            @foreach($posts as $post)
                <li>{{ $post-> question }}</li>
                <li>{{ $post-> answer }}</li>
                <br>
            @endforeach
        </ul>

        </p>
    </div>
</div>
</body>

</html>
