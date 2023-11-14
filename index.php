<!-- index.php or index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animated Page</title>
<style>
  body, html {
    height: 100%;
    margin: 0;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: grey;
  }
  #animatedText {
    font-size: 2em;
    /* Additional styling for the text */
  }
  #backgroundImage {
    position: absolute;
    left: 0;
    right: 0;
    animation: appear-disappear 10s infinite;
    /* Additional styling for the background image */
  }
  @keyframes appear-disappear {
    0%, 100% {
      opacity: 0;
      transform: translateX(-100%);
    }
    25%, 75% {
      opacity: 1;
      transform: translateX(0);
    }
    50% {
      opacity: 1;
      transform: translateX(100%);
    }
  }
</style>
</head>
<body>
<div id="animatedText">Сделанно</div>
<img id="backgroundImage" src="lesson/bg.jpg" alt="Animated Background">
<script>
  // JavaScript to change the image and text dynamically if needed
</script>
</body>
</html>
