<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <title>Element</title>
  <style>
  html {
    font-family: Ubuntu;
    text-align: center;
  }

h1 {
  font-size: 35px;
  border: 1px solid transparent;
  background-color: #5F39E2;
  margin-left:150px;
  margin-right:150px;
}

.info {
  border: 3px solid #5F39E2;
  margin-top: 150px;
  padding-bottom: 25px;
  margin-left:50px;
  margin-right:50px;
}

a {
  font-size: 35px;
  position: absolute;
  top:5px;
  left: 15px;
}
  </style>
  </head>
  <body>
    <header>
    <a href = "Main.html">TALAPTAN</a>
    </header>

    <main>
      <article class="element">
          <?php
            
            $username = 'root';
            $pasword = '';
            try{
                $conn = $conn = new PDO("mysql:host=localhost;dbname=uni", $username, $pasword);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $id = $_GET['id'];
            
                $stmt = $conn->query("SELECT * FROM message WHERE id = $id");
                $stmt->execute();

                $result = $stmt->fetch();
               


                echo '
                        <div class="info">
                        <h1>'.$result['title'] .'</h1>
                        <p>'.$result['text'] .'</p>
                        <span>'.$result['ftext'].'</span>
                    </div>';

            }catch(PDOException $e){

            }

        
        ?>
        
      </article>
    </main>

    
  </body>
</html>
