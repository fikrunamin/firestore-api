<?php 

if(!empty($_GET['id_masjid']) && !empty($_GET['status'])):
	$id_masjid = $_GET['id_masjid'];
	$status = $_GET['status'];
?>

	<!DOCTYPE html>
	<html>
		<head>
			<title>API Firestore</title>
		</head>
		<body><!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
			<script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-app.js"></script>

			<!-- Add Firebase products that you want to use -->
			<script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-auth.js"></script>
			<script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-firestore.js"></script>
			<script>
			  // Your web app's Firebase configuration
			  var firebaseConfig = {
			    apiKey: "AIzaSyBHNPkFp75wasU8uBVZBfirQ5yOYQ6SUak",
			    authDomain: "tutorial-flutter-942ec.firebaseapp.com",
			    projectId: "tutorial-flutter-942ec",
			    storageBucket: "tutorial-flutter-942ec.appspot.com",
			    messagingSenderId: "584324125013",
			    appId: "1:584324125013:web:e0a3fbbc16f4b08ba71fdc"
			  };
			  // Initialize Firebase
			  firebase.initializeApp(firebaseConfig);

			  var db = firebase.firestore()
			  db.collection("masjid").doc('<?= $id_masjid ?>').set({
				    status: "<?= $status ?>",
				})
				.then((docRef) => {
				    console.log("Document written with ID: ", docRef);
				})
				.catch((error) => {
				    console.error("Error adding document: ", error);
				});
			</script>
		</body>
	</html>

<?php 
	echo "Berhasil";
	endif;
?>
