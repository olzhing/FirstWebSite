<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    <title>Document</title>
  </head>
  <style>
a {
   font-size:35px;
   margin-top: 25px;
   margin-left: 20px;
   text-decoration: none;
}
 
html {
  font-family: Ubuntu;
  text-align:center;
}

main button {
  background-color:#5F39E2;
  color:white;
}
main h1 {
  font-size: 50px;
  line-height: 50px;
  text-align: center;
}

main section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

main .card {
  position: relative;
  background-color:#5F39E2;
  margin: 30px;
  width: 300px;
  height: 300px;
  display: flex;
  flex-direction: column;
  border: 3px solid black;
  border-radius: 20px;
}


main .card .info {
  padding: 10px;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
}

main .card .info h3 {
  text-align: center;
  color: black;
  font-size: 30px;
  font-weight: bold;
}

main .card .info p {
  font-size: 25px;
  margin-top: 10px;
  text-align: center;
}

footer {
  padding: 40px 50px;
  background-color: black;
  display: flex;
  color: white;
  align-items: center;
  justify-content: space-between;
}



@media (max-width: 550px) {

  main {
    padding: 10px;
  }

  main h1 {
    font-size: 36px;
  }

  main .card {
    width: 200px;
    height: 200px;
    margin: 10px;
  }

  main .card .info h3 {
    font-size: 20px;
  }

  main .card .info p {
    font-size: 15px;
  }



  </style>
  <body>
    <header>
       
      <a href = "Main.html" id = "logo">TALAPTAN</a>
     
    </header>
    <main>

      <h1>UNIVERSITIES</h1>
      <a href = "search.php"><button>SEARCH APPROPRIATE UNIVERSITY</button></a>
      <section id="menu">
      
      </section>
      <footer>
      
<div><a>Keep in touch</a><br>
Instagram<br>
Facebook<br>
Telegram<br>
</div>
<div><a>NUR-SULTAN</a><br>
10 Yessenberlin Str.<br>
Nur-Sultan, 034343 Kazakhstan<br>
+77743434432
</div>

<div><a>ALMATY</a><br>
Esentai Tower, 77/7 Al Farabi Avenue<br>
Almaty, 050040 Kazakhstan<br>
+77711646565<br>
</div>


      </footer>
    </main>

    
        
    <script>
      
      
      fetch("list.php").then(onSuccesAll, onError);
    

      function onSuccesAll(response){
        response.text().then(writeAll);
      }

      function writeAll(db){
        let data = JSON.parse(db);
        writeData(data);
      }

      function onError(){
        console.log("wrong");
      }


     function writeData(data){
        document.getElementById("menu").innerHTML = "";
        if(data.length == 0){
          document.getElementById("menu").innerHTML = "<p>We can't see element</p>";
        }else{
          
          for(let i = 0; i < data.length; i++){
            document.getElementById("menu").innerHTML += `
              <div class="card">
                  <div class="info">
                      <a href="element.php?id=${data[i].id}"> <h3>${data[i].title}</h3>
                        <p>${data[i].text}</p>
                      </a>
                  </div>
              </div>
            `
          }
        }
      }

  
      
    </script>
  </body>
</html>

