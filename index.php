<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>design test</title>
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="Parials/header.css">

<link href="https://fonts.googleapis.com/css?family=Cairo:200,400|Tajawal" rel="stylesheet">
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
<link href="css/shCore.css" rel="stylesheet" type="text/css" />
<link href="css/shThemeRDark.css" rel="stylesheet" type="text/css" />

<?php require "./Parials/header.php"; ?>
<h1 class="main-title">
  هذا هوا العنوان الرئيسي
</h1>
<h2 class="sec-title">
هذا عنوان فرعي
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


<!-- Finally, to actually run the highlighter, you need to include this JS on your page -->
<script type="text/javascript">
     SyntaxHighlighter.all()
</script>
  </body>
</html>
