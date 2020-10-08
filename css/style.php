<style type="text/css">
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Mulish', sans-serif;
	}

	.nav_style {
		background-color: #a1cad5 !important;
	}

	.nav_style a {
		color: white;
	}

	.main_header {
		display: flex;
		justify-content: space-evenly;
		align-items: center;
	}

	.mask {
		padding: 2%;
	}

	.title_1 {
		margin: 10%, 2%, 0%, 2%;
		flex-wrap: wrap;

	}

	@media(max-width:720px) {
		.main_header {
			flex-flow: column wrap;
			align-items: center;
			margin: 2%;
		}

		.title_1 {
			text-align: center;
		}
	}

	.about_main {
		display: flex;
		flex-flow: column wrap;
		align-items: center;
		margin: 2%;
		padding-top: 10%;
	}

	.info{
		display: flex;
		flex-flow: column wrap;
		align-items: center;
		margin: 5%;
	}
	/* .about_body{
		display: flex;
		flex-flow: column wrap;
		align-items: center;
		margin: 2%;
	} */
	.image_2{
		margin: 2%;
		padding-bottom: 2%;
	}


	@media(min-width:720px) {
		.about {
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-direction: column;
			margin: 2%;
		}

		.info {
			display: flex;
			flex-direction: row;
			justify-content: flex-start;

		}

		.image_2 {
			margin: 2%;
		}

		.about_body {
			display: flex;
			flex-wrap: nowrap;
			flex-direction: column;
			margin: 2%;
		}
	}
</style>