<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <style>
        main {
    color: white;
}

header {
    background-color: white;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 80px;
    display: flex;
    align-items: center;
    box-shadow: 0 0 10px 0 rgb(39, 26, 26);

}
header * {
    display: inline;
}

header li {
    margin: 20px;
}

header li a {
    color: black;
    text-decoration: none;
}


nav ul {
  list-style: none;
  display: flex;
}

nav ul li a {
  color: rgb(14, 6, 6);
  text-decoration: none;
  padding: 10px;
  display: block;
  transition: 0.7s;
}

nav ul li a:hover {
  background-color: #adb6b5;
  color: rgb(0, 0, 0);
  font-weight: bold;
  transition: 0.2s;
}
    .logo{
        padding: 40px;
        width: 200px;
        height: 60%;
        filter: contrast(1.5)

    }
    .wrapper {
  height: 100%;
  display:inherit;
  place-items:inherit;
}

.typing-demo {
  width: 150%;
  animation: typing 4s steps(50), blink .5s step-end;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
  font-family: monospace;
  font-size: 10px;
}

@keyframes typing {
  from {
    width: 0
  }
}

@keyframes blink {
  70% {
    border-color: transparent
  }
}

        </style>
    <header>

        <a href="https://www.microsoft.com/en-in/"target="_blank">
            <img class="logo" src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31"></a>



                <div class="wrapper">
                    <div class="typing-demo">
                        <h1>Welcome to the World of Bill Gates !!!</h1>
                    </div>
                </div>

        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/history">History</a></li>
                <li><a href="/achievements">Achievements</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>

    </header>
</body>
</html>
