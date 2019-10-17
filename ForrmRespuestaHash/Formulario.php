<h1>Bienvenido al login.</h1>
Hola <?php echo htmlspecialchars($_POST['user']); ?>.
<hr>
Contraseña protegida con sha1: <?php echo sha1(htmlspecialchars($_POST['password'])); ?>.
<hr>
Contraseña protegida con sha1: <?php echo  md5(htmlspecialchars($_POST['password'])); ?>.

