<?php 

if(!empty($_POST['id_masjid']) && !empty($_POST['status'])):
	$id_masjid = $_POST['id_masjid'];
	$status = $_POST['status'];
	echo '
			<script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-app.js"></script>
			<script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-auth.js"></script>
			<script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-firestore.js"></script>
			<script>
			  var firebaseConfig = {
			    apiKey: "AIzaSyBHNPkFp75wasU8uBVZBfirQ5yOYQ6SUak",
			    authDomain: "tutorial-flutter-942ec.firebaseapp.com",
			    projectId: "tutorial-flutter-942ec",
			    storageBucket: "tutorial-flutter-942ec.appspot.com",
			    messagingSenderId: "584324125013",
			    appId: "1:584324125013:web:e0a3fbbc16f4b08ba71fdc"
			  };
			  firebase.initializeApp(firebaseConfig);

			  var db = firebase.firestore()
			  db.collection("masjid").doc("$id_masjid").set({
				    status: "$status",
				})
				.then((docRef) => {
				    console.log("Document written with ID: ", docRef);
				})
				.catch((error) => {
				    console.error("Error adding document: ", error);
				});
			</script>
			';
	echo "Berhasil";
	endif;
?>
