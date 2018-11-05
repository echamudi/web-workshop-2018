# Web Workshop 2018
Islamic University of Madinah Web Workshop 2018

## Part 1: Installing the softwares

To start developing, we will use following tools:
- NetBeans PHP: [Download for Windows](https://netbeans.org/downloads/start.html?platform=windows&lang=en&option=php&bits=x64)
- XAMPP: [Download](https://www.apachefriends.org/index.html)

## Part 2: HTML basics

We will learn following HTML elements:
1. Headings
    ```html
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
    ```

1. Paragraph and Span
    ```html
    <p>Lorem ipsum dolor sit amet, <span>consectetur</span> adipiscing elit. Maecenas malesuada nulla vel pulvinar dapibus. Donec eu sagittis quam, nec accumsan arcu. Vivamus posuere felis eu ultrices ultricies. Praesent posuere ut purus in maximus. Sed elementum tellus ipsum, vel faucibus magna congue ac.</p>
    ```

1. Ordered List and Unordered List
    ```html
    <ol>
        <li>Chocolate</li>
        <li>Candy</li>
        <li>Apple</li>
    </ol>
    <ul>
        <li>Car</li>
        <li>Motorcycle</li>
        <li>Aeroplane</li>
    </ul>
    ```
1. Horizontal Rules
    ```html
    <hr>
    ```

1. Comment
    ```html
    <!-- This is a comment -->
    ```

1. Bold, Underline, Italic, and Strikethrough
    ```html
    <i>Italic Text</i>
    <b>Bold Text</b>
    <u>Underlined Text</u>
    <s>This text has a strikethrough</s>
    ```

1. Image
    ```html
    <img src="https://placekitten.com/200/200">
    ```

1. Link
    ```html
    <a href="https://twitter.com/fcis_iu">FCIS Twitter</a>
    ```

1. Division
    ```html
    <div>
        First division
    </div>
    <div>
        Second division
    </div>
    ```
    
### Exercise

Please make following page using HTML: 

https://ezhmd.github.io/web-workshop-2018/part-2-exercise/

Answer:

https://github.com/ezhmd/web-workshop-2018/blob/master/docs/part-2-exercise/index.html

## Part 3: CSS Basics

1. Further HTML structuring
    ```html
    <!DOCTYPE html>
    <html>
    <head>
        <title>Page Title</title>
        <style>
            /* Your CSS content here */
        </style>
    </head>
    <body>
        <!-- Your HTML content here -->
    </body>
    </html>
    ```

1. Text Color
    - CSS
        ```css
        .my-class-1 {
            color: red;
        }
        ```
    - HTML
        ```html
        <div class="my-class-1">This is my text</div>
        ```
    - List of cool color hexes available here: https://flatuicolors.com/

1. Font Size
    - CSS
        ```css
        .my-class-1 {
            font-size: 12px;
        }
        .my-class-2 {
            font-size: 20px;
        }
        .my-class-3 {
            font-size: 36px;
        }
        .my-class-4 {
            font-size: 48px;
        }
        ```
    - HTML
        ```html
        <div class="my-class-1">This is my first text</div>
        <div class="my-class-2">This is my second text</div>
        <div class="my-class-3">This is my third text</div>
        <div class="my-class-4">This is my forth text</div>
        ```

1. Font Family
    - CSS
        ```css
        .my-class-1 {
            font-family: "Arial";
        }
        .my-class-2 {
            font-family: "Times New Roman";
        }
        .my-class-3 {
            font-family: "Georgia";
        }        
        ```
    - HTML
        ```html
        <div class="my-class-1">This is my first text</div>
        <div class="my-class-2">This is my second text</div>
        <div class="my-class-3">This is my third text</div>
        ```
    - List of web safe fonts available here: http://web.mit.edu/jmorzins/www/fonts.html

1. Text align
    - CSS
        ```css
        .my-class-1 {
            text-align: left;
        }
        .my-class-2 {
            text-align: center;
        }
        .my-class-3 {
            text-align: right;
        }
        ```
    - HTML
        ```html
        <div class="my-class-1">This is my first text</div>
        <div class="my-class-2">This is my second text</div>
        <div class="my-class-3">This is my third text</div>
        ```
        
1. Multiple properties in one class
    - CSS
        ```css
        .my-text {
            font-size: 32px;
            font-family: "Comic Sans MS";
            color: brown;
        }
        ```
    - HTML
        ```html
        <div class="my-text">This is my text</div>
        ```

### Exercise

Please make following page using HTML:

https://ezhmd.github.io/web-workshop-2018/part-3-exercise/

Answer:

https://github.com/ezhmd/web-workshop-2018/blob/master/docs/part-3-exercise/index.html

## Part 4: More on CSS

1. Cascading
    - CSS
        ```css
        .my-class-1 {
            color: red;
        }
        .my-class-2 {
            color: blue;
        }
        ```
    - HTML
        ```html
        <div class="my-class-1 my-class-2">This is my text</div>
        <div class="my-class-2 my-class-1">This is my text</div>
        ```

1. Multiple classes in one element
    - CSS
        ```css
        .a {
            color: red;
        }
        .b {
            font-size: 48px;
        }
        ```
    - HTML
        ```html
        <div class="a b">This is my text</div>
        ```

1. Box Model
    - CSS
        ```css
        .my-box {
            margin-top: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
       
            border-color: #3d3d3d;
            border-width: 5px;
            border-style: solid;

            padding-top: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-left: 30px;

            width: 500px;
            height: 200px;
             
            background: #33d9b2;

            font-size: 30px;
            font-family: "Helvetica";
        }
        ```
    - HTML
        ```html
        <div class="my-box">This is my text</div>
        ```

1. Playing with boxes
    - CSS
        ```css
        .text-styling {
            color: white;
            font-family: Arial;
            font-size: 30px;
        }

        .box-1 {
            width: 400px;
            height: 200px;

            margin: 5px;
            padding: 10px;

            background: #6c5ce7;
        }
        .box-2 {
            width: 300px;
            height: 100px;

            margin: 5px;
            padding: 10px;

            background: #0984e3;
        }
        .box-3 {
            width: 100px;
            height: 100px;

            margin: 5px;
            padding: 10px;

            background: #00cec9;
        }
        ```
    - HTML
        ```html
        <div class="box-1 text-styling">
             I'm a box
        </div>
        <div class="box-2 text-styling">
             I'm also a box
        </div>
        <div class="box-3 text-styling">
             Me too
        </div>
        ```

1. Float positioning
    - CSS
        ```css
        .box {
            color: white;
            font-family: Arial;
            font-size: 30px;

            width: 200px;
            height: 200px;

            margin: 5px;
            padding: 10px;

            background: #6c5ce7;
        }

        .my-class-left {
            float: left;
        }

        .my-class-right {
            float: right;
        }
        ```
    - HTML
        ```html
        <div class="box my-class-left">
             I'm a box on left
        </div>
        <div class="box my-class-right">
             I'm also a box on right
        </div>
        ```

1. Box Shadow
    - CSS
        ```css
        .box {
            color: white;

            width: 100px;
            height: 50px;

            margin: 40px;

            background: white;
        }

        .shadow-1 {
            box-shadow: 0px 0px 5px 0px #aaaaaa;
        }

        .shadow-2 {
            box-shadow: 0px 0px 30px 0px #aaaaaa;
        }

        .shadow-3 {
            box-shadow: 0px 0px 60px 0px #aaaaaa;
        }
        ```
    - HTML
        ```html
        <div class="box shadow-1"></div>
        <div class="box shadow-2"></div>
        <div class="box shadow-3"></div>
        ```
        
### Exercise

Please make following page using HTML : 
https://ezhmd.github.io/web-workshop-2018/part-4-exercise/

Answer :
https://github.com/ezhmd/web-workshop-2018/blob/master/docs/part-4-exercise/index.html

## Part 5: PHP Basics

1. PHP structure
    ```php
    ```

### Exercise
