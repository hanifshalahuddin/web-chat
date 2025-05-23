<?php

	// $db_server = "127.0.0.1";
	$db_server = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "chatting_system";

	// $conn = new mysqli($servername, $username, $password, $dbname);

	$conn = mysqli_connect(
		$db_server,
		$db_user,
		$db_pass,
		$db_name
	);

	// if ($conn->connect_error) {
	// 	die("Connection failed: " . $conn->connect_error);
	// }
	// echo "Connected successfully";	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
/*
	#red{
		height: 100px;
		width: 100px;
	}

	.container {
		display: grid;
		grid-template-rows: ;
		grid-template-columns: 100px 100px;
	}*/

/**/
	.summary {
		display: flex;

		flex-direction: column;
		flex-direction: row;

		justify-content: flex-start;
		justify-content: flex-end;
		justify-content: center;
		justify-content: space-between;
		justify-content: space-around;
		justify-content: space-evenly;

		align-content: flex-start;
		align-content: flex-end;
		align-content: center;
		align-content: space-between;
		align-content: space-around;
		align-content: space-evenly;

		align-items: flex-start;
		align-items: flex-end;
		align-items: center;
		align-items: baseline;

		flex-wrap: nowrap;
		flex-wrap: wrap;

		gap: 1px;

		flex-grow: 1;

		flex-shrink: 5;

		flex-basis: 300px;

		flex: 1;

		align-self: center;
		align-self: flex-start;
		align-self: flex-end;
		align-self: baseline;

		order: -1;
	}

/*background*/
	.background {
		background-color: blue;
		height: 680px;
		display: flex;
	}

/*side menu*/
	.side-menu {
		background-color: navy;
		/*height: 660px;*/
		height: 680px;
		width: 55px;
		display: flex;
		padding: 5px;
		/*justify-content: space-between;*/
		gap: 5px;
		flex-direction: column;
			align-items: flex-end;
	}

		.chat-available {
			background-color: pink;
			height: 50px;
			width: 50px;
			/*justify-content: space-around;
			align-items: center;*/
		}

		.chat-new {
			background-color: pink;
			height: 50px;
			width: 50px;
			/*justify-content: space-around;
			align-items: center;*/
		}

		.side-menu-gap {
			background-color: white;
			min-height: 50px;
			height: 500px;
			width: 50px;
		}

		.setting {
			background-color: pink;
			height: 50px;
			width: 50px;
			/*justify-content: space-around;*/
		}

/*list*/
	.list {
		background-color: blue;
		/*height: 650px;*/
		height: 680px;
		min-width: 340px;
		width: 460px;
		/*padding: 20px;*/
		/*margin: 20px;*/
		/*overflow: auto;*/
		display: flex;
		flex-direction: column;
	}

		.list-head {
			background-color: red;
			height: 70px;
			/*height: 120px;*/
			/*margin: 20px;*/
			/*align-items: center;	*/
			/*position: sticky;*/
			/*top: 0;*/
		}

			.list-title {
				background-color: maroon;
				justify-content: center;
				font-size: 50px;
				display: flex;
			}

			.list-setting {

			}

		.search-box {
			background-color: orange;
			height: 40px;
			margin: 10px;
			margin-left: 20px;
			margin-right: 20px;
			/*position: sticky;*/
			/*top: 3;*/
		}

		.room-list {
			background-color: yellowgreen;
			height: 550px;
			/*width: 460px;*/
			min-width: 340px;
			overflow: auto;
			display: flex;
			flex-direction: column;
		}

			.room-item {
				background-color: violet;
				/*height: 70px;*/
				/*height: 75px;*/
				height: 55px;
				margin-top: 3px;
				margin-bottom: 3px;
				margin-left: 10px;
				margin-right: 10px;
				padding: 12px;
			}
				.list-image {
					background-color: orange;
					height: 50px;
					width: 50px;
				}

		.scrollbar-list {
			background-color: white;
			height: 55px;
			width: 5px;
		}

		.room-lists {
			/*background-color: pink;*/
			height: 75px;
			/*gap: 5px;*/
			margin-top: 2px;
			margin-bottom: : 2px;
		}

		.menu-list-mobile {
			display: none;
			/*display: flex;*/
			background-color: maroon;
			height: 70px;
			min-width: 340px;
			justify-content: space-evenly;
			align-items: center;
		}

			.menu-item-mobile {
				/*display: none;*/
				background-color: red;
				height: 50px;
				width: 50px;
			}

	.content {
		background-color: green;
		/*height: 650px;*/
		height: 680px;
		min-width: 330px;
		flex-grow: 1;

		/*background-color: blue;
		height: 650px;
		min-width: 340px;
		width: 460px;*/
		/*display: all;*/
		/*display: */
		/*display: none;*/
		/*display: flex;*/
		/*flex-direction: column;*/
		display: flex;
		flex-direction: column;
		align-items: center;
	}

		.room-head {
			background-color: red;
			height: 70px;
			/*margin: 20px;*/
			/*align-items: center;	*/
			width: 100%;
			/*padding: 10px;*/
			display: flex;
			/*gap: 10px;*/
			align-items: center;
			/*padding-left: 20px;*/
		}

			.room-image {
				/*background-color: orange;
				height: 40px;
				width: 40px;*/
				height: 50px;
				width: 50px;
				object-fit: cover;
				border-radius: 50%;
				/*margin-top: 5px;*/
				/*margin-bottom: 5px;*/
				margin-left: 10px;
				/*margin-right: 5px;*/
			}

			.room-title {
				background-color: orange;
				/*padding: 10px;*/
				margin-left: 40px;
			}

		.room-content {
			background-color: lightgreen;
			/*height: 530px;*/
			/*min-height: 380px;*/
			/*max-height: 530px;*/
			max-height: 550px;
		flex-grow: 1;

			/*background-color: yellowgreen;
			height: 300px;*/
			/*width: 460px;*/
			min-width: 340px;
			overflow: auto;
			display: flex;
			flex-direction: column;
		}

			.message-sent {
				background-color: blue;
				margin-left: 50px;
				margin-right: 50px;
				/*height: 500px;*/
				/*flex-direction: column;*/
				display: flex;
				justify-content: flex-end;
			}

				.sent-content {
					background-color: white;
					/*height: 50px;*/
					max-width: 540px;
					/*width: 150px;*/
					/*margin: 10px;*/
					padding: 10px;
					/*justify-content: center;*/
					margin-top: 5px;
					margin-bottom: 5px;
					align-content: center;
					margin-left: 20px;

				}

			.message-received {
				background-color: grey;
				margin-left: 50px;
				margin-right: 50px;
				/*height: 500px;*/
				/*flex-direction: column;*/
				display: flex;
				justify-content: flex-start;
			}

				.received-content {
					background-color: lightgrey;
					/*height: 50px;*/
					max-width: 540px;
					/*width: 150px;*/
					/*margin: 10px;*/
					padding: 10px;
					/*justify-content: center;*/
					margin-top: 5px;
					margin-bottom: 5px;
					align-content: center;
					margin-right: 20px;

				}

		.chat-box {
			background-color: skyblue;
			height: 50px;
			min-width: 300px;
			width: 80%;
			/*margin-left: 20px;*/
			/*margin-right: 20px;*/
			/*margin-top: 20px;*/
		}

@media(max-width: 500px) {
	.side-menu{
		display: none;
	}
	.content{
		display: none;
	}
	.room-list{
		height: 480;
	}
	.menu-list-mobile{
		display: flex;
	}
}

/*MOBILE*/
		.room-content-mobile {
			background-color: lightgreen;
			height: 530px;
			/*background-color: yellowgreen;
			height: 300px;*/
			/*width: 460px;*/
			min-width: 340px;
			overflow: auto;
			/*display: flex;*/
			display: none;
			flex-direction: column;
		}

		.room-head-mobile {
			background-color: red;
			height: 50px;
			/*margin: 20px;*/
			/*align-items: center;	*/
			padding: 10px;
			/*display: flex;*/
			display: none;
			gap: 10px;
		}

			.room-image-mobile {
				/*background-color: orange;
				height: 40px;
				width: 40px;*/
				height: 50px;
				width: 50px;
			display: none;
				object-fit: cover;
				border-radius: 50%;
				/*margin-top: 5px;*/
				/*margin-bottom: 5px;*/
				/*margin-left: 5px;*/
				/*margin-right: 5px;*/
			}

			.room-title-mobile {
				background-color: orange;
				padding: 10px;
			display: none;
			}

		.room-content-mobile {
			background-color: lightgreen;
			height: 530px;

			/*background-color: yellowgreen;
			height: 300px;*/
			/*width: 460px;*/
			min-width: 340px;
			overflow: auto;
			/*display: flex;*/
			display: none;
			flex-direction: column;
		}

			.message-sent-mobile {
				background-color: blue;
				margin-left: 50px;
				margin-right: 50px;
				height: 500px;
				/*flex-direction: column;*/
				/*display: flex;*/
			display: none;
				justify-content: flex-end;
			}

				.sent-content-mobile {
					background-color: white;
					/*height: 50px;*/
					max-width: 540px;
					/*width: 150px;*/
					/*margin: 10px;*/
					padding: 10px;
			display: none;
					/*justify-content: center;*/
					margin-top: 5px;
					margin-bottom: 5px;
					align-content: center;
					margin-left: 20px;

				}

			.message-received-mobile {
				background-color: grey;
				margin-left: 50px;
				margin-right: 50px;
				height: 500px;
				/*flex-direction: column;*/
				/*display: flex;*/
			display: none;
				justify-content: flex-start;
			}

				.received-content-mobile {
					background-color: lightgrey;
					/*height: 50px;*/
					max-width: 540px;
					/*width: 150px;*/
					/*margin: 10px;*/
					padding: 10px;
			display: none;
					/*justify-content: center;*/
					margin-top: 5px;
					margin-bottom: 5px;
					align-content: center;
					margin-right: 20px;

				}

		.chat-box-mobile {
			background-color: skyblue;
			height: 50px;
			display: none;
			margin-left: 20px;
			margin-right: 20px;
			margin-top: 20px;
		}

</style>

<body>

<!-- background -->
	<div class="background">

	<!-- side-menu -->
		<div class="side-menu">
			<div class="chat-available"></div>
			<div class="chat-new"></div>
			<div class="side-menu-gap"></div>
			<div class="setting"></div>
		</div>

	<!-- list -->
		<div class="list">
			<!-- <div class="list-head">
				<div class="list-head-1">
					<div class="list-title">Web-Chat</div>
					<div class="list-setting"></div>
				</div>
				<div class="list-head-2">
					<div class="search-box"></div>
				</div>
			</div> -->
			<div class="list-head">
				<div class="list-title">Web-Chat</div>
				<div class="list-setting"></div>
			</div>

			<div class="search-box"></div>

			<div class="room-list">
				<div onclick=showChat(); class="room-item">
					<div class="list-image"></div>
					<div class="room-name"></div>
					<div class="latest-message"></div>
					<div class="message-time"></div>
				</div>
				<div onclick=showChat(); class="room-item">
					<div class="list-image"></div>
					<div class="room-name"></div>
					<div class="latest-message"></div>
					<div class="message-time"></div>
				</div>
				<div class="room-item">
					<div class="list-image"></div>
					<div class="room-name"></div>
					<div class="latest-message"></div>
					<div class="message-time"></div>
				</div>
				<div class="room-item">
					<div class="list-image"></div>
					<div class="room-name"></div>
					<div class="latest-message"></div>
					<div class="message-time"></div>
				</div>
				<div class="room-item">
					<div class="list-image"></div>
					<div class="room-name"></div>
					<div class="latest-message"></div>
					<div class="message-time"></div>
				</div>
				<div class="room-item">
					<div class="list-image"></div>
					<div class="room-name"></div>
					<div class="latest-message"></div>
					<div class="message-time"></div>
				</div>
				<div class="room-item">
					<div class="list-image"></div>
					<div class="room-name"></div>
					<div class="latest-message"></div>
					<div class="message-time"></div>
				</div>
				<div class="room-item">
					<div class="list-image"></div>
					<div class="room-name"></div>
					<div class="latest-message"></div>
					<div class="message-time"></div>
				</div>
			</div>

			<div class="menu-list-mobile">
				<div class="menu-item-mobile"></div>
				<div class="menu-item-mobile"></div>
				<div class="menu-item-mobile"></div>
				<div class="menu-item-mobile"></div>
			</div>

		</div>

	<!-- room -->
		<div class="content">
			<div class="room-head">
				<div class="room-image">
					<img class="room-image" src="https://picsum.photos/id/237/200/300">
				</div>
				<div class="room-title">Product A</div>
				<div class="room-participant"></div>
				<div class="setting-room"></div>
			</div>
			<div class="room-content">
				<div class="date"></div>

				<!-- <div class="message">
					<div class="sender-image"></div>
					<div class="sender-name"></div>
					<div class="content"></div>
					<div class="time"></div>
				</div> -->

				<div class="message-received">
					<div class="received-content">Message Received Message Received Message Received Message Received Message Received Message Received Message Received</div>
				</div>
				<div class="message-sent">
					<div class="sent-content">Message Sent</div>
				</div>
				<div class="message-sent">
					<div class="sent-content">Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent</div>
				</div>
				<div class="message-received">
					<div class="received-content">Message Received Message Received Message Received</div>
				</div>
				<div class="message-received">
					<div class="received-content">Message Received Message Received Message Received Message Received Message Received Message Received Message Received Message Received Message Received Message Received Message Received</div>
				</div>
				<div class="message-sent">
					<div class="sent-content">Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent</div>
				</div>
				<div class="message-received">
					<div class="received-content">Message Received Message Received Message Received Message Received Message Received Message Received Message Received</div>
				</div>
				<div class="message-sent">
					<div class="sent-content">Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent</div>
				</div>
				<div class="message-received">
					<div class="received-content">Message Received Message Received Message Received Message Received Message Received Message Received Message Received</div>
				</div>

			</div>
			<div class="chat-box">
				<div class="attach-file"></div>
				<div class="emoticon"></div>
				<div class="message-box"></div>
			</div>
		</div>

	<!-- room-mobile -->
		<div class="content-mobile">
			<div class="room-head-mobile">
				<div class="room-image-mobile">
					<img class="room-image-mobile" src="https://picsum.photos/id/237/200/300">
				</div>
				<div class="room-title-mobile">Product A</div>
				<div class="room-participant-mobile"></div>
				<div class="setting-room-mobile"></div>
			</div>
			<div class="room-content-mobile">
				<div class="date-mobile"></div>

				<!-- <div class="message">
					<div class="sender-image"></div>
					<div class="sender-name"></div>
					<div class="content"></div>
					<div class="time"></div>
				</div> -->

				<div class="message-received-mobile">
					<div class="received-content-mobile">Message Received Message Received Message Received Message Received Message Received Message Received Message Received</div>
				</div>
				<div class="message-sent-mobile">
					<div class="sent-content-mobile">Message Sent</div>
				</div>
				<div class="message-sent-mobile">
					<div class="sent-content-mobile">Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent</div>
				</div>
				<div class="message-received-mobile">
					<div class="received-content-mobile">Message Received Message Received Message Received</div>
				</div>
				<div class="message-received-mobile">
					<div class="received-content-mobile">Message Received Message Received Message Received Message Received Message Received Message Received Message Received Message Received Message Received Message Received Message Received</div>
				</div>
				<div class="message-sent-mobile">
					<div class="sent-content-mobile">Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent</div>
				</div>
				<div class="message-received-mobile">
					<div class="received-content-mobile">Message Received Message Received Message Received Message Received Message Received Message Received Message Received</div>
				</div>
				<div class="message-sent-mobile">
					<div class="sent-content-mobile">Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent Message Sent</div>
				</div>
				<div class="message-received-mobile">
					<div class="received-content-mobile">Message Received Message Received Message Received Message Received Message Received Message Received Message Received</div>
				</div>

			</div>
			<div class="chat-box-mobile">
				<div class="attach-file-mobile"></div>
				<div class="emoticon-mobile"></div>
				<div class="message-box-mobile"></div>
			</div>
		</div>

	</div>

	<script type="text/javascript">
		function showChat() {
			// const chat = document.querySelector('.content-mobile');
			// chat.style.display = 'flex';

			document.querySelector('.content-mobile').style.display = 'flex';
			// document.querySelector('.content').style.display = 'none';
			// document.querySelector('.content').style.display = 'flex';
			document.querySelector('.content').style.display = 'all';
		}
	</script>

</body>
</html>