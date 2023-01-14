<?php
	include("db_connect.php");
	$request_method = $_SERVER["REQUEST_METHOD"];

	function getFormation()
	{
		global $conn;
		$query = "SELECT * FROM formations";
		$response = array();
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($result))
		{
			$response[] = $row;
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT);
	}
	
	function getFormations($id=0)
	{
		global $conn;
		$query = "SELECT * FROM formations";
		if($id != 0)
		{
			$query .= " WHERE id=".$id." LIMIT 1";
		}
		$response = array();
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($result))
		{
			$response[] = $row;
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT);
	}
	
	function AddFormation()
	{
		global $conn;
		$nom = $_POST["nom"];
		$description = $_POST["description"];
		$prix = $_POST["prix"];
		$convention = $_POST["convention"];
		
		echo $query="INSERT INTO formations (nom, description, prix, convention, created, modified) VALUES('".$nom."', '".$description."', '".$prix."', '".$convention."', '".$created."', '".$modified."')";
		if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Formation ajout� avec succ�s.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'ERREUR!.'. mysqli_error($conn)
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	function updateFormation($id)
	{
		global $conn;
		$_PUT = array();
		parse_str(file_get_contents('php://input'), $_PUT);
		$nom = $_PUT["nom"];
		$description = $_PUT["description"];
		$prix = $_PUT["prix"];
		$convention = $_PUT["convention"];
	
		$query="UPDATE formations SET nom='".$nom."', description='".$description."', prix='".$prix."', convention='".$convention."', modified='' WHERE id=".$id;
		
		if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Formation mis a jour avec succes.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Echec de la mise a jour de formation. '. mysqli_error($conn)
			);
			
		}
		
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	function deleteFormation($id)
	{
		global $conn;
		$query = "DELETE FROM formations WHERE id=".$id;
		if(mysqli_query($conn, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Formation supprimee avec succes.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'La suppression de la formation a echoue. '. mysqli_error($conn)
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	switch($request_method)
	{
		
		case 'GET':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				getFormation($id);
			}
			else
			{
				getFormation();
			}
			break;
		default:
			header("HTTP/1.0 405 Method Not Allowed");
			break;
			
		case 'POST':
			// Ajouter une formation
			AddFormation();
			break;
			
		case 'PUT':
			// Modifier une formation
			$id = intval($_GET["id"]);
			updateFormation($id);
			break;
			
		case 'DELETE':
			// Supprimer une formation
			$id = intval($_GET["id"]);
			deleteFormation($id);
			break;

	}
?>