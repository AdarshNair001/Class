<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_App_InClass</title>
    <link rel="Stylesheet" href="css/home.css" />
</head>

<body>
    <header>
        <?php echo "Today is  " . date("Y/m/d") . "<br>"; ?>
    </header>    

    <main>
        <h1>Hello_World</h1>
        <button class="say-hi button" data-message="Hi" type="button">Click Me</button>
    </main>

    <footer class="cool-footer">Copyright 2022</footer>  

    <script>
        function SayHi(event){
            let eventSource = event.target;                                 //it remembers the items clicked, in this case everything on the HTML page

            if(!eventSource.classList.contain("say-hi-button")) return;     //this filters clicking on the button, hence clicking on other items(ie: h1 or footer) on the page wont be detected

            let displayText = eventSource.dataset.message ?? "No Message Available";

            alert(disaplyText);
        }
        document.addEventListener("click", SayHi)

        let MyVat ={
            name: "bob",
            age: 22
        }
        
    </script>   
</body>
</html>