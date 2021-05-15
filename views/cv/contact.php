<!DOCTYPE html>
<html lang="fr-FR">
<head>
	
	
	<title> Mon CV</title>
	<title>javascript et formulaire</title>
	<meta charset="utf-8">
	<meta  name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="c.css">
	 <script language="javascript" type="text/javascript">


function envoyer()
{
var t='MonChamp';
var bool=false;
for (i=0;i<4;i++)
{
if(document.getElementById(t+i).value=="")
bool=true;
}
if(bool==true)
alert("Vérifier les champs obligatoires!");
else alert("Votre Message a été envoyé , merci pour votre visite!");
}


</script>
</head>
<body>

<header>
	
</header>
<nav>
	<div class="table">
	<ul>
		 <li class="menu-cv">
		 	<a href="accueil.php" style="color:#0A0A0A">accueil</a>

		</li>
		<li class="menu-pro">
			<a  href="apropos.php" style="color:#0A0A0A">a propos</a>
		</li>
		<li class="menu-exp">
			<a  href="experiences-pro.php" style="color:#0A0A0A">expérience professionnelles</a>
		</li>
		<li class="menu-per">
			<a  href="experiences-per.php" style="color:#0A0A0A">expérience personnelles</a>
		</li>
		<li class="menu-com">
			<a href="competences.php" style="color:#0A0A0A">compétences</a>
			
		</li>
		<li class="menu-con">
			<a  href="contact.php" style="color:#0A0A0A">contactez-moi</a>
		</li>
		<li class="menu-con">
			<a  href="../admin/index.php" style="color:#0A0A0A">admin</a>
		</li>
	</ul>
</div>
</nav>
<div id="tmContact" >
      
            <form 
            action='../../php/ajoutUser.php' method='post'
            id="tmContactForm"

              class="tm-bg-white-transparent"
            >
              <div class="form-group">
                <input
                  type="text"
                  id='nom' name='nom'
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Nom"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  id='email' name='email'
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Email"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  type="Telephone"
                  id='tel' name='tel'
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Telephone"
                  required
                />
              </div>

              <div class="form-group">
                <textarea
                  rows="4"
                  id='message' name='message'
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Message"
                  required
                ></textarea>
              </div>
              <div class="text-center">
                <button
                id='submit' name='submit'
                  type="submit"
                  class="btn tm-btn-enregistrer "
                >
                  Envoyer
                </button>
              </div>
            </form>
           
      
	




<div>

<button class="button buttonround" >
	<a href="http://www.linkedin.com" target="_blank">
    <img src="linkedin2.jpg" style="width: 50px; height: 50px;">
	
</a>
</button>
<button  class="button buttonround">
	<a href="http://www.twitter.com" target="_blank">
    <img src="twitter.png" style="width: 50px; height: 50px;">
	
	</a>
</button>
<button class=" button buttonround ">
	<a href="https://www.facebook.com/bec.esprit" target="_blank">
    <img src="facebook.png" style=" width: 50px; height: 50px;">

</a>
</button>
</div>
</div>
<footer>
	<p>copyright esprit2020</p>
</footer>

</body>
</html>