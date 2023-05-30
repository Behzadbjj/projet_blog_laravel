<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>










<style>
  body {
    margin: 0;
    padding: 0;
  }

  main {
    background: rgb(91, 119, 169);
    background: linear-gradient(90deg, rgba(91, 119, 169, 1) 0%, rgba(0, 0, 0, 1) 100%);
  }

  .containerPost {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    margin: 2rem;
  }

  .myCard {
    border-radius: 2rem;
    background: rgb(169, 233, 126);
    background: linear-gradient(90deg, rgb(99, 108, 93) 0%, rgba(0, 0, 0, 1) 100%);
    padding: 2rem;
    color: white;
    width: 90%;
    text-align: center;
    margin: 2rem;
  }

  .titreaccuiel {
  text-align: center;
  padding: 1rem;
  font-family: Verdana, sans-serif;
  font-weight: 700;
  font-size: 1.5rem;
  color: orangered;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}
.logo{
  width: 7rem;
  height: 7rem;
  border-radius: 50%;

}
.cardShow{
  text-align: center
}
  .btn-danger{
    background-color:rgb(75, 75, 75);
    
  }
  .link {
    color: #000;
    text-decoration: none; 
    transition: color 0.4s; 
}

.link:hover {
    color:orangered; /
}

.link:active {
    color: rgb(4, 56, 4); 
}


  .h1 {
    font-size: 2rem;
    padding: 1rem;
  }

  .creePost {
    display: flex;
    justify-content: space-between;
    margin: 2rem;
  }

  .creePost>h1 {
    background-color: rgb(96, 157, 159);
    font-size: 2rem;
    color: white;
  }
  
  @media (max-width: 767px) {
    .myCard {
      padding: 2rem;
      width: 95%;
      text-align: center;
    }

    .myCardShow {
      width: 90%;
    }

    .imgCard {
      width: 100%;
    }

    .containerPost {
      display: grid;
      grid-template-columns: 1fr;
      margin: 1rem;
    }

    .creePost {
      display: flex;
      justify-content: space-between;
      margin: 1rem;
    }

    .creePost>h1 {
      background-color: rgb(96, 157, 159);
      font-size: 1.5rem;
      color: white;
      border-radius: 0.5rem 0 0 0.5rem;
      padding: 5px;
    }
  }





</style>


