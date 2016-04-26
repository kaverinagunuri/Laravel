<html>
    <head>
        <title>
         Transulate Page Language
        </title>
         <link href="css/styles.css" type="text/css" rel="stylesheet">
    </head>
    <body> 
        <div class="container">
            <div class="content">
                <form>
                <ul>
            <li><a href="{{URL::route('home')}}">Home</a></li>
        
           
        </ul>
        <ul>
             <li><a href="{{URL::route('english')}}">English</a></li>
              <li><a href="{{URL::route('deutsch')}}">Deutsch</a></li>
        </ul>
                </form>
            </div>
        </div>
    </body>
</html>