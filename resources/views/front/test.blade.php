<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="flex">
      <div class="content">Box 1</div>
      <div class="content">Box 2</div>
      <div class="content">Box 3</div>
      <div class="content">Box 4</div>
      <div class="content">Box 5</div>
      <div class="content">Box 6</div>
      <div class="content">Box 7</div>
      <div class="content">Box 8</div>
      <div class="content">Box 9</div>
      <div class="content">Box 10</div>
      <div class="content">Box 11</div>
      <div class="content">Box 12</div>
      <div class="content">Box 13</div>
      <div class="content">Box 14</div>
      <div class="content">Box 15</div>
      <div class="content">Box 16</div>                                                                                                 
    </div>
    
    <a href="#" id="loadMore">Load More</a>
  </div>
                         
                                            
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                                                                                                             
             
  <style>
  *, body {
    margin: 0;
    padding: 0;
  }
  .flex {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }
  .content {
    height: 100px;
    width: 45%;
    color: #fff;
    font-size: 24px;
    line-height: 100px; /* centering text just for view */
    text-align: center;
    background-color: grey;
    margin: 5px;
    border: 1px solid lightgrey;
    display: none;
  }
  #loadMore {
    width: 200px;
    color: #fff;
    display: block;
    text-align: center;
    margin: 20px auto;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid transparent;
    background-color: blue;
    transition: .3s;
  }
  #loadMore:hover {
    color: blue;
    background-color: #fff;
    border: 1px solid blue;
    text-decoration: none;
  }
  .noContent {
    color: #000 !important;
    background-color: transparent !important;
    pointer-events: none;
  }</style>
   
</body>
</html>