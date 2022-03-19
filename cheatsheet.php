<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheatSheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="prism.css">
    <link rel="stylesheet" href="cheatsheetStyle.css">
    <script src="prism.js"></script>
</head>

<body>
    <!-- ----------------------------------Header-Navbar--------------------------------- -->
    <div class="container-fluet">
        <?php include 'public/Header.php';?>
        <?php include 'public/DBConnect.php';?>
    </div>
    <!-- <-- --------------------------Section----------------------------------------------------- -->
    <div class="container my-5">
        <h3 class="text-center p-2  bg-dark text-light">CheatSheet In C Language</h3>
        <div class="container">
                    <ol>
                        <li>
                            Structure of C Programs
                        </li>
                    </ol>

            <pre class="language-c"><code> 
                
                Commemnts
                Preprocessor directives
                Grobal variables
                int main(void)
                {
                    local variables
                    statements
                    -----------------------
                    -----------------------
                    return 0;
                }
                func1()
                {
                    local variables
                    statements
                    -----------------------
                    -----------------------
                }
                func2()
                {
                    local variables
                    statements
                    -----------------------
                    -----------------------
                }
                 
            </code></pre>
            
                    <ol>
                        <li>
                            Examples in Each Chapter
                            <p>Our Try it Yourself tool makes it easy to learn C. You can edit code and view the result in your browser:</p>
                        </li>
                    </ol>
                <pre><code class="language-c">
                    #include <stdio.h>

                        int main() {
                          printf("Hello World!");
                          return 0;
                        }
                </code></pre>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>