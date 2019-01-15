<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>design test</title>
    <link rel="stylesheet" href="css/design.css">
    <link href="css/shCore.css" rel="stylesheet" type="text/css" />
    <link href="css/shThemeRDark.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/design_md.css">

    <link rel="stylesheet" href="Parials/header.css">
    <link rel="stylesheet" href="css/table.css">

    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">


<link href="https://fonts.googleapis.com/css?family=Cairo:200,400|Tajawal|Lalezar" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=0.85">

  </head>
  <body>
    <!-- Include required JS files -->
<script type="text/javascript" src="js/shCore.js"></script>

<!--
    At least one brush, here we choose JS. You need to include a brush for every
    language you want to highlight
-->
<script type="text/javascript" src="js/shBrushPython.js"></script>

<!-- Include *at least* the core style and default theme -->

<?php require "./Parials/header.php"; ?>

<div class="all">
  <div class="side-menu">
    <div class="side-menu-title">
      <div class="side-menu-title-icon">

      </div>
    </div>
    <div class="side-menu-items">


    <div class="side-menu-item hvr-underline-from-center">
      محتوى
    </div>
    <div class="side-menu-item hvr-underline-from-center">
      محتوى
    </div>
    <div class="side-menu-item hvr-underline-from-center">

      محتوى
    </div>
    </div>
  </div>
  <div class="tut-content">


<h1 class="main-title">
  <span>
  هذا هوا العنوان الرئيسي
  </span>
</h1>
<h2 class="sec-title">

  <span>هذا عنوان فرعي</span>

</h2>
<div class="text">
  لبروتين من العناصر الأساسية المسؤولة عن وظائف متعددة في الجسم بما في ذلك بناء الأنسجة، والخلايا، والعضلات، ويُشكل البروتين مع الدهون والكربوهيدرات المصادر الرئيسيّة لإنتاج الطاقة التي يحتاجها الجسم للقيام بالعمليّات الحيوية. تتكوّن البروتينات من مجموعة مؤلفة من عشرين نوعاً من الأحماض الأمينية، منها تسعة أساسية، أي يجب الحصول عليها من مَصادر الطّعام الغنيّة بالبروتين، والأنواع الأخرى غير أساسية أي يُمكن تصنيعها داخل الجسم.

</div>
<div class="seperate">

</div>


<ul class="list">
  <li>الاول</li>
  <li>الثاني</li>
  <li>الثالث</li>
  <li>الرابع</li>
  <li>الخامس</li>

</ul>
<!-- You also need to add some content to highlight, but that is covered elsewhere. -->
<div class="example-cont">
  <span class="span"></span>
<pre class="brush: py" dir="ltr">
  # Python program to check if the input number is prime or not

  num = 407

  # take input from the user
  # num = int(input("Enter a number: "))

  # prime numbers are greater than 1
  if num > 1:
     # check for factors
     for i in range(2,num):
         if (num % i) == 0:
             print(num,"is not a prime number")
             print(i,"times",num//i,"is",num)
             break
     else:
         print(num,"is a prime number")

  # if input number is less than
  # or equal to 1, it is not prime
  else:
     print(num,"is not a prime number")
</pre>
</div>
<div class="output ">
  <div class="output-text output-text-not-active">

C:\xampp\htdocs\arabiandevs>git push
Enumerating objects: 19, done.
Counting objects: 100% (19/19), done.
Delta compression using up to 4 threads.
Compressing objects: 100% (10/10), done.
Writing objects: 100% (10/10), 1.93 KiB | 329.00 KiB/s, done.
Total 10 (delta 5), reused 0 (delta 0)
remote: Resolving deltas: 100% (5/5), completed with 5 local objects.
To https://github.com/Ibrahimrahhal/ArabianDevs.com.git
   35193d8..eb6dbfd  master -> master
  </div>
  <div class="output-btn">
     مخرجات البرنامج
  </div>
</div>
<div class="warning">
  <div class="icon">

  </div>
  <div class="">
  <span>إنتبة !</span>
  هذا تحذير
  هذا تحذير

  هذا تحذير
  هذا تحذير
  هذا تحذير
  </div>
</div>
<div class="note">
  <div class="icon">

  </div>
  <div class="">
  <span>ملاحظة !</span>
  هذا تحذير
  هذا تحذير

  هذا تحذير
  هذا تحذير
  هذا تحذير
  </div>
</div>
</div>
</div>

<table>
  <tr >
    <th>head</th>
    <th class="hidden_md">head</th>
    <th>head</th>
  </tr>
  <tr>
    <td>body</td>
    <td class="hidden_md">body</td>
    <td>body</td>
  </tr>
  <tr>
    <td>body</td>
    <td class="hidden_md">body</td>
    <td>body</td>
  </tr>
  <tr>
    <td>body</td>
    <td class="hidden_md">body</td>
    <td>body</td>
  </tr>
</table>
<!-- Finally, to actually run the highlighter, you need to include this JS on your page -->
<script type="text/javascript">
     SyntaxHighlighter.all()
</script>
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="Parials/header.js">

  </script>
  <script type="text/javascript" src="design.js">

  </script>
  </body>
</html>
