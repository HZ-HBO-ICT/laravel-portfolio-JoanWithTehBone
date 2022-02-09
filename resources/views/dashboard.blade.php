<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Jonah's Personal Site made for the HZ-ICT Programme: DASHBOARD PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/stylesheet.css" text="text/css">
    <link rel="stylesheet" href="/resources/css/sidebar.css" text="text/css">
    <link rel="stylesheet" href="/resources/css/pictures.css">
</head>

<body>

<div class="sidebar">
    <a href="/">Front Page</a>
    <a href="/profile">Profile Page</a>
    <a class="active" href="/dashboard">Dashboard</a>
    <a href="/faq">FAQ</a>
    <a href="/blog">Blog</a>
    <a class="bottom" href="/socials">Socials</a>

</div>

<div class="content">
    <div class="main">
        <h1>Dashboard</h1>
        <p>Study Monitor:</p>
    </div>


    <table class="table table-hover table-dark">
        <!-- Table Header-->
        <thead>
        <tr>
            <th scope="col">Quartile</th>
            <th scope="col">Course</th>
            <th scope="col">EC</th>
            <th scope="col">Exam</th>
            <th scope="col">Grade</th>
        </tr>
        </thead>
        <!-- Table Body-->
        <tr>
            <th rowspan="3">Quartile 1</th>
            <td>Programme and Career Orientation</td>
            <td>2.5</td>
            <td>Assessment</td>
            <td>---------</td>
        </tr>
        <tr>
            <td> Computer Science Basics</td>
            <td> 5</td>
            <td> Written Exam</td>
            <td> --------- </td>
        </tr>
        <tr>

            <td> Programming Basics </td>
            <td> 5 </td>
            <td> Case Study Exam</td>
            <td> --------- </td>
        </tr>
        <tr>
            <th rowspan="2">Quartile 2</th>
            <td rowspan="2"> Object Oriented Programming</td>
            <td rowspan="2"> 10 </td>
            <td> Case Study Exam</td>
            <td> ---------</td>
        </tr>
        <tr>
            <td>Project</td>
            <td> ---------</td>
        </tr>
        <tr>
            <th rowspan="3">Quartile 3 </th>
        <tr>
            <td> Framework Development 1</td>
            <td> 5</td>
            <td> Case Study</td>
            <td> ---------</td>
        </tr>
        <td> Framework Project 1</td>
        <td> 7.5 </td>
        <td> 2 Portofolio Exams</td>
        <td> ---------</td>
        </tr>
        <tr>
            <th rowspan="3">Quartile 4</th>
            <td rowspan="3"> Framework Project 2</td>
            <td rowspan="3"> 10</td>
            <td> Portofolio Exam</td>
            <td> ---------</td>
        </tr>
        <tr>
            <td>Project</td>
            <td> ---------</td>
        </tr>
        <tr>
            <td>Assessment</td>
            <td> ---------</td>
        </tr>
        <tr>
            <th rowspan="3">Entire Year</th>
            <td>Personal Development</td>
            <td>12.5</td>
            <td>Portofolio</td>
            <td> ---------</td>
        </tr>
        <tr>
            <td>IT Personality 1</td>
            <td>1.25</td>
            <td>Project</td>
            <td> ---------</td>
        </tr>
        <tr>
            <td>IT Personality 2</td>
            <td>1.25</td>
            <td>Project</td>
            <td> ---------</td>
        </tr>


    </table>
    <div class="main">
        <label for="bar">Progress Bar:</label>
        <br>

        <progress id="bar" max="100" value="75"> 75%</progress>

        <br><br>
        <p>Study Guide:</p>
        <ul>
            <li><a
                    href="https://hz.nl/uploads/documents/Regelingen/EN/OER-HZ-2019-2020werkdocv2018-05-17DEF_ENGELS-AC-29112019.pdf">Regulations
                    Regarding Tests and Exams</a></li>
        </ul>
    </div>
</div>
</body>

</html>
